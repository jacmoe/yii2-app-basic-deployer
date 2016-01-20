<?php
require_once __DIR__ . '/deployer/recipe/configure.php';
require_once __DIR__ . '/deployer/recipe/yii2-app-basic.php';

set('repository', 'https://github.com/jacmoe/deployer-test.git');

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

serverList(__DIR__ . '/stage/servers.yml');

after('deploy:shared', 'deploy:configure');
after('deploy:run_migrations', 'deploy:build_assets');
