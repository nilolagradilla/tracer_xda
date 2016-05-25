<?php
/* @var $this ProfessionalAffiliationController */
/* @var $model ProfessionalAffiliation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'professional-affiliation-form',
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
		<?php echo $form->textField($model,'scholarId', array('value'=>$scholar_id)); ?>
		<?php echo $form->error($model,'scholarId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organizationName'); ?>
		<?php echo $form->textField($model,'organizationName',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'organizationName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration'); ?>
		<?php echo $form->textField($model,'duration',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'duration'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->