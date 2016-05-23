<?php
/* @var $this EmploymentController */
/* @var $data Employment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scholarId')); ?>:</b>
	<?php echo CHtml::encode($data->scholarId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employmentStatus')); ?>:</b>
	<?php echo CHtml::encode($data->employmentStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusEmployed')); ?>:</b>
	<?php echo CHtml::encode($data->statusEmployed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companyName')); ?>:</b>
	<?php echo CHtml::encode($data->companyName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companyAddress')); ?>:</b>
	<?php echo CHtml::encode($data->companyAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('businessName')); ?>:</b>
	<?php echo CHtml::encode($data->businessName); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('businessAddress')); ?>:</b>
	<?php echo CHtml::encode($data->businessAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sector')); ?>:</b>
	<?php echo CHtml::encode($data->sector); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('businessType')); ?>:</b>
	<?php echo CHtml::encode($data->businessType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yearsOfOperation')); ?>:</b>
	<?php echo CHtml::encode($data->yearsOfOperation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reasonUnemployed')); ?>:</b>
	<?php echo CHtml::encode($data->reasonUnemployed); ?>
	<br />

	*/ ?>

</div>