<?php

$config = [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            // advanced_yii2 is the database name
            'dsn' => 'pgsql:host=localhost;dbname=postgres',
            'username' => 'postgres',
            'password' => 'arts123',
            'charset' => 'utf8',
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'rerererererreurerrerereierereererererere',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
