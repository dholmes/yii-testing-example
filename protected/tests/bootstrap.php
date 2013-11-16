<?php

require_once(dirname(__FILE__).'/../../vendor/autoload.php');

// change the following paths if necessary
$yiit=dirname(__FILE__).'/../../vendor/yiisoft/yii/framework/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

$kernel = AspectMock\Kernel::getInstance();
$kernel->init([
    'debug' => true,
    'includePaths' => [
        __DIR__ . '/../',
        __DIR__ . '/../../vendor/yiisoft/yii/framework'
    ],
    'appDir' => __DIR__ . '/../',
    'excludePaths' => [
        __DIR__ . '/../config',
        __DIR__ . '/../runtime',
        __DIR__ . '/../../../vendor/yiisoft/yii/framework/base/CComponent.php',
    ],
]);
$kernel->loadFile($yiit);

$kernel->loadFile(dirname(__FILE__).'/WebTestCase.php');


Yii::createWebApplication($config);
