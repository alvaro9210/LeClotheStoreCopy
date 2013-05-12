<?php
/* @var $this RegistrationController */
/* @var $user User */
/* @var $customer Customer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registration-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($user,$customer); ?>

	<div class="row">
		<?php echo $form->labelEx($user,'name'); ?>
		<?php echo $form->textField($user,'name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($user,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user,'password'); ?>
		<?php echo $form->passwordField($user,'password',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($user,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($user,'email'); ?>
		<?php echo $form->textField($user,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($user,'email'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($customer,'rfc'); ?>
		<?php echo $form->textField($customer,'rfc'); ?>
		<?php echo $form->error($customer,'rfc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($customer,'name'); ?>
		<?php echo $form->textField($customer,'name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($customer,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($customer,'lastName'); ?>
		<?php echo $form->textField($customer,'lastName',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($customer,'lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($customer,'streetName'); ?>
		<?php echo $form->textField($customer,'streetName',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($customer,'streetName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($customer,'streetName2'); ?>
		<?php echo $form->textField($customer,'streetName2',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($customer,'streetName2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($customer,'zipcode'); ?>
		<?php echo $form->textField($customer,'zipcode'); ?>
		<?php echo $form->error($customer,'zipcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($customer,'state'); ?>
		<?php echo $form->textField($customer,'state',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($customer,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($customer,'city'); ?>
		<?php echo $form->textField($customer,'city',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($customer,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($customer,'phoneNumber'); ?>
		<?php echo $form->textField($customer,'phoneNumber'); ?>
		<?php echo $form->error($customer,'phoneNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($customer,'customerType'); ?>
		<?php echo $form->textField($customer,'customerType',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($customer,'customerType'); ?>
	</div>
	
	
	

<?php $this->endWidget(); ?>

</div><!-- form -->