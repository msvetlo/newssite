<?php
return [
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => 'yii\gii\Module',
    ],	
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=mysql;dbname=news_db',
            'username' => 'news_db',
            'password' => 'secret',
            'charset' => 'utf8',
        ],
    ],
];
