<?php

// change the following paths if necessary
$yiit=dirname(__FILE__).'/../../../yii-1.1.13/framework/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');
  // require_once dirname(__FILE__).'/../../yii-1.1.13/framework/yii.php'; // make sure your path to yii.php is correct


Yii::createWebApplication($config);
