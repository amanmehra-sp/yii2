<?php
return [
    'id' => 'yii2app', // Add this line to provide the application ID
    'basePath' => dirname(__DIR__),
    'components' => [
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
    ],
];
