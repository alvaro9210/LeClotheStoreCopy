<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */
/* @var $model Product */



echo $dataProvider->totalItemCount;

$this->menu=array(
    array('label'=>'Create Customer', 'url'=>array('create')),
    array('label'=>'Manage Customer', 'url'=>array('admin')),

);


$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));



?>




