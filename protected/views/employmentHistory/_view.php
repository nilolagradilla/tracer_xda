<?php
/* @var $this EmploymentHistoryController */
/* @var $data EmploymentHistory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scholarId')); ?>:</b>
	<?php echo CHtml::encode($data->scholarId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inclusivePeriod')); ?>:</b>
	<?php echo CHtml::encode($data->inclusivePeriod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('relatedToAcademic')); ?>:</b>
	<?php echo CHtml::encode($data->relatedToAcademic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companyAddress')); ?>:</b>
	<?php echo CHtml::encode($data->companyAddress); ?>
	<br />


</div>