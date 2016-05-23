<?php
/* @var $this EmploymentHistoryController */
/* @var $model EmploymentHistory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employment-history-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'scholarId'); ?>
		<?php echo $form->textField($model,'scholarId'); ?>
		<?php echo $form->error($model,'scholarId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inclusivePeriod'); ?>
		<?php echo $form->textField($model,'inclusivePeriod',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'inclusivePeriod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'relatedToAcademic'); ?>
		<?php echo $form->textField($model,'relatedToAcademic'); ?>
		<?php echo $form->error($model,'relatedToAcademic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'companyAddress'); ?>
		<?php echo $form->textArea($model,'companyAddress',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'companyAddress'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->