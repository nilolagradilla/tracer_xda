<?php
/* @var $this ProAwardsRecognitionReceivedController */
/* @var $model ProAwardsRecognitionReceived */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pro-awards-recognition-received-form',
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
		<?php echo $form->labelEx($model,'titleOfAward'); ?>
		<?php echo $form->textField($model,'titleOfAward',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'titleOfAward'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateGiven'); ?>
		<?php echo $form->textField($model,'dateGiven'); ?>
		<?php echo $form->error($model,'dateGiven'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'awardingBody'); ?>
		<?php echo $form->textField($model,'awardingBody',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'awardingBody'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->