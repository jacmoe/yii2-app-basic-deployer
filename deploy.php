<?php
require_once __DIR__ . '/deployer/recipe/configure.php';
require_once __DIR__ . '/deployer/recipe/yii2-app-basic.php';

serverList(__DIR__ . '/stage/servers.yml');
set('repository', '{{repository}}');

set('keep_releases', 2);

set('shared_files', [
    'config/db.php'
]);

task('deploy:build_assets', function () {
   runLocally('gulp build');
   upload(__DIR__ . '/web/css', '{{release_path}}/web/css');
   upload(__DIR__ . '/web/js', '{{release_path}}/web/js');
   upload(__DIR__ . '/web/fonts', '{{release_path}}/web/fonts');
})->desc('Build assets');

task('deploy:configure_composer', function () {
  $stage = env('stage');
  if($stage == 'local') {
    env('composer_options', 'install --verbose --no-progress --no-interaction');
  }
})->desc('Configure composer');

after('deploy:shared', 'deploy:configure');
before('deploy:vendors', 'deploy:configure_composer');
after('deploy:run_migrations', 'deploy:build_assets');
