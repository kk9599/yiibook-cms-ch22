<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comment-form',
	'action'=>'',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model, '', '', array('class' => 'text-warning')); ?>

  <div class="form-group">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
  </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('maxlength'=>60,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'user_email'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

		<?php echo CHtml::submitButton($model->isNewRecord ? 'Post Comment' : 'Save', array('class' => 'btn btn-default')); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->