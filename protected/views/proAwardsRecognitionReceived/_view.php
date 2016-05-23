<?php
/* @var $this ProAwardsRecognitionReceivedController */
/* @var $data ProAwardsRecognitionReceived */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scholarId')); ?>:</b>
	<?php echo CHtml::encode($data->scholarId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titleOfAward')); ?>:</b>
	<?php echo CHtml::encode($data->titleOfAward); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateGiven')); ?>:</b>
	<?php echo CHtml::encode($data->dateGiven); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('awardingBody')); ?>:</b>
	<?php echo CHtml::encode($data->awardingBody); ?>
	<br />


</div>