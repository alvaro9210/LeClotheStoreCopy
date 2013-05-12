<?php
/**
 * Created by JetBrains PhpStorm.
 * User: pupid
 * Date: 4/11/13
 * Time: 2:09 PM
 * To change this template use File | Settings | File Templates.
 */


class DbTest extends CTestCase
{

    public function testConnection()
    {
        $this->assertNotEquals(NULL, Yii::app()->db);
    }

}
