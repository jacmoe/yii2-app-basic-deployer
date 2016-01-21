<?php
require_once __DIR__ . '/deployer/recipe/configure.php';
require_once __DIR__ . '/deployer/recipe/yii2-app-basic.php';

serverList(__DIR__ . '/stage/servers.yml');
set('repository', '{{repository}}');

set('keep_releases', 2);

set('shared_files', [
    'config/db.php'
]);

task('deploy:configure_composer', function () {
  $stage = env('app.stage');
  if($stage == 'dev') {
    env('composer_options', 'install --verbose --no-progress --no-interaction');
  }
})->desc('Configure composer');

after('deploy:shared', 'deploy:configure');
before('deploy:vendors', 'deploy:configure_composer');
