<?php
/* @var $this ProAwardsRecognitionReceivedController */
/* @var $model ProAwardsRecognitionReceived */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'scholarId'); ?>
		<?php echo $form->textField($model,'scholarId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titleOfAward'); ?>
		<?php echo $form->textField($model,'titleOfAward',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateGiven'); ?>
		<?php echo $form->textField($model,'dateGiven'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'awardingBody'); ?>
		<?php echo $form->textField($model,'awardingBody',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->