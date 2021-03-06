<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

  <div class="form-group">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
  </div>

  <div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('maxlength'=>60,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

  <div class="form-group">
		<?php echo $form->labelEx($model,'pass'); ?>
		<?php echo $form->passwordField($model,'pass',array('maxlength'=>255,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'pass'); ?>
	</div>

	<?php echo CHtml::submitButton($model->isNewRecord ? 'Register' : 'Update', array('class' => 'btn btn-default')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->