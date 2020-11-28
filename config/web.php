<?php

   $config =[
    'id'=>'finance',
    'basePath'=> realpath(__DIR__.'/../'),
       'bootstrap'=>['debug','gii'],
       'language' => 'ru',
       'timeZone' => 'Asia/Vladivostok',
      'components'=>[
        'urlManager'=>[
          'enablePrettyUrl'=>true,
            'showScriptName'=>false,
        ],
          'request'=>[
              'cookieValidationKey' => 'vsemprivetktoetochitaet',
              'baseUrl' => ''
          ],
          'db'=> require(__DIR__.'/db.php'),
          'user'=>[
              'identityClass' =>'app\models\UserIdentity',
              'enableAutoLogin' => true,
          ],
          'authManager' => [
              'class' => 'yii\rbac\DbManager',
              // uncomment if you want to cache RBAC items hierarchy
              // 'cache' => 'cache',
          ],
      ],
       'modules'=>[
           'debug'=>'yii\debug\Module',
           'gii' => 'yii\gii\Module',
       ],
        ];

   return $config;