<?php
/* @var $this CategoryController */
/* @var $data Category */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scholarId')); ?>:</b>
	<?php echo CHtml::encode($data->scholarId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoryId')); ?>:</b>
	<?php echo CHtml::encode($data->categoryId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('programId')); ?>:</b>
	<?php echo CHtml::encode($data->programId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusId')); ?>:</b>
	<?php echo CHtml::encode($data->statusId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yearAwarded')); ?>:</b>
	<?php echo CHtml::encode($data->yearAwarded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />


</div>