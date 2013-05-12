<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view span2"style="padding: 10px; border: 1px; border-color: gray; border-style: solid; -webkit-border-radius: 7px; -moz-border-radius: 7px; border-radius: 7px;">


	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

    <div class="thumbnail">
        <img src= "images/<?php echo ($data->image).'' ?>" />
    </div>

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

  <?php
  /**
  //  array('label'=>'Create Order', 'url'=>array('orderDetail/create', 'pid'=>$data->id));
     echo CHtml::link('Buy Me',array('orderDetail/create',
        'pid'=>"1"
       ));
   **/
    ?>
</div>

