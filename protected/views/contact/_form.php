<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
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
			<?php echo $form->labelEx($model,'contactType'); ?>
			<?php echo $form->dropDownList($model,'contactType', array("1"=>"Landline Phone Number","2"=>"Cellular Phone Number", "3"=>"e-Mail-Address")); ?>
			<?php echo $form->error($model,'contactType'); ?>
		</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home'); ?>
		<?php echo $form->textField($model,'home',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'home'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'office'); ?>
		<?php echo $form->textField($model,'office',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'office'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->