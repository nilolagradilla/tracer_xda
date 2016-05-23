<?php
/* @var $this RndInvolvementController */
/* @var $model RndInvolvement */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rnd-involvement-form',
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
		<?php echo $form->labelEx($model,'fieldTitleResearch'); ?>
		<?php echo $form->textArea($model,'fieldTitleResearch',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fieldTitleResearch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'locationDuration'); ?>
		<?php echo $form->textArea($model,'locationDuration',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'locationDuration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fundSource'); ?>
		<?php echo $form->textField($model,'fundSource',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'fundSource'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'natureOfInvolvement'); ?>
		<?php echo $form->textField($model,'natureOfInvolvement',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'natureOfInvolvement'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->