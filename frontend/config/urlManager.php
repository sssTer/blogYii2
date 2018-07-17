<?php

return [
    'class' => 'yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '/' => 'site/index', // main page
        '/login' => '/site/login',
//        '/tables/user' => '/user',

    ],
];