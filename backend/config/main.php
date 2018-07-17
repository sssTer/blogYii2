<?php

use yii\filters\AccessControl;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => 'csrf-session',

        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity', 'httpOnly' => true, 'domain' => '.blog.test'],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'session',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'backendUrlManager' => require yii::getAlias('@backendUrlManager'),
        'frontendUrlManager' => require yii::getAlias('@frontendUrlManager'),
        'urlManager' => function () {
            return Yii::$app->get('backendUrlManager');
        }
    ],

    'as access' => [
        'class' => AccessControl::className(),
        'except' => ['site/login', 'auth-site/error', 'site/logout'],
        'rules' => [
            [
                'allow' => true,
                'roles' => ['@'],
            ],
        ],
    ],


    'params' => $params,
];
