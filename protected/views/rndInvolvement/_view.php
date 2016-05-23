<?php
/* @var $this RndInvolvementController */
/* @var $data RndInvolvement */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scholarId')); ?>:</b>
	<?php echo CHtml::encode($data->scholarId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fieldTitleResearch')); ?>:</b>
	<?php echo CHtml::encode($data->fieldTitleResearch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('locationDuration')); ?>:</b>
	<?php echo CHtml::encode($data->locationDuration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fundSource')); ?>:</b>
	<?php echo CHtml::encode($data->fundSource); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('natureOfInvolvement')); ?>:</b>
	<?php echo CHtml::encode($data->natureOfInvolvement); ?>
	<br />


</div>