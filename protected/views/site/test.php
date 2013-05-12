<?php

/* @var $this SiteController */


echo Yii::app()->getSession()->get('LeSession');




try{
    $clienteSOAP = new
    SoapClient('http://iamacloths.com/servicio/Inventario.wsdl');
    $resultado_suma = $clienteSOAP->sumar(1, 24);
    echo  $resultado_suma . "<br/>";
}catch(SoapFault $e){
        var_dump($e);
}


//$dels = Order::model()->findAll();
//print_r($dels->count());
//$orderOption = new Order;
//$orderOption->model()->getAttributes('id');
//print_r( $orderOption->getAttribute('id'));
?>

