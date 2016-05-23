<?php
/* @var $this EmploymentController */
/* @var $model Employment */
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
		<?php echo $form->label($model,'employmentStatus'); ?>
		<?php echo $form->textField($model,'employmentStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusEmployed'); ?>
		<?php echo $form->textField($model,'statusEmployed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'companyName'); ?>
		<?php echo $form->textField($model,'companyName',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'companyAddress'); ?>
		<?php echo $form->textArea($model,'companyAddress',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'businessName'); ?>
		<?php echo $form->textField($model,'businessName',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'businessAddress'); ?>
		<?php echo $form->textArea($model,'businessAddress',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sector'); ?>
		<?php echo $form->textField($model,'sector'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'businessType'); ?>
		<?php echo $form->textField($model,'businessType',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yearsOfOperation'); ?>
		<?php echo $form->textField($model,'yearsOfOperation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reasonUnemployed'); ?>
		<?php echo $form->textArea($model,'reasonUnemployed',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->