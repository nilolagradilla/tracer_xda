<?php
/* @var $this EmploymentController */
/* @var $model Employment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employment-form',
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
		<?php echo $form->labelEx($model,'employmentStatus'); ?>
		<?php echo $form->textField($model,'employmentStatus'); ?>
		<?php echo $form->error($model,'employmentStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'statusEmployed'); ?>
		<?php echo $form->textField($model,'statusEmployed'); ?>
		<?php echo $form->error($model,'statusEmployed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'companyName'); ?>
		<?php echo $form->textField($model,'companyName',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'companyName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'companyAddress'); ?>
		<?php echo $form->textArea($model,'companyAddress',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'companyAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'businessName'); ?>
		<?php echo $form->textField($model,'businessName',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'businessName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'businessAddress'); ?>
		<?php echo $form->textArea($model,'businessAddress',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'businessAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sector'); ?>
		<?php echo $form->textField($model,'sector'); ?>
		<?php echo $form->error($model,'sector'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'businessType'); ?>
		<?php echo $form->textField($model,'businessType',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'businessType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'yearsOfOperation'); ?>
		<?php echo $form->textField($model,'yearsOfOperation'); ?>
		<?php echo $form->error($model,'yearsOfOperation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reasonUnemployed'); ?>
		<?php echo $form->textArea($model,'reasonUnemployed',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'reasonUnemployed'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->