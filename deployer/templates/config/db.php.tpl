<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host={{app.mysql.host}};dbname={{app.mysql.dbname}}',
    'username' => '{{app.mysql.username}}',
    'password' => '{{app.mysql.password}}',
    'charset' => 'utf8',
];
