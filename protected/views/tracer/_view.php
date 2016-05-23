<?php
/* @var $this TracerController */
/* @var $data Tracer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scholarId')); ?>:</b>
	<?php echo CHtml::encode($data->scholarId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastName')); ?>:</b>
	<?php echo CHtml::encode($data->lastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstName')); ?>:</b>
	<?php echo CHtml::encode($data->firstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middleName')); ?>:</b>
	<?php echo CHtml::encode($data->middleName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nameSuffix')); ?>:</b>
	<?php echo CHtml::encode($data->nameSuffix); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateOfBirth')); ?>:</b>
	<?php echo CHtml::encode($data->dateOfBirth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('civilStatus')); ?>:</b>
	<?php echo CHtml::encode($data->civilStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father')); ?>:</b>
	<?php echo CHtml::encode($data->father); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother')); ?>:</b>
	<?php echo CHtml::encode($data->mother); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addressParents')); ?>:</b>
	<?php echo CHtml::encode($data->addressParents); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yearGraduated')); ?>:</b>
	<?php echo CHtml::encode($data->yearGraduated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('awardsHonors')); ?>:</b>
	<?php echo CHtml::encode($data->awardsHonors); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateAccomplished')); ?>:</b>
	<?php echo CHtml::encode($data->dateAccomplished); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entryDate')); ?>:</b>
	<?php echo CHtml::encode($data->entryDate); ?>
	<br />

	*/ ?>

</div>