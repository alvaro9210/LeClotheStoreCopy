<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Customer', 'url'=>array('index')),
	array('label'=>'Manage Customer', 'url'=>array('admin')),
    array('label'=>'Create User', 'url'=>array('user/create', 'pid'=>$model->id)),
);
?>

<h1>Create Customer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>