<?php
/* @var $this ProAwardsRecognitionReceivedController */
/* @var $model ProAwardsRecognitionReceived */

$this->breadcrumbs=array(
	'Pro Awards Recognition Receiveds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProAwardsRecognitionReceived', 'url'=>array('index')),
	array('label'=>'Manage ProAwardsRecognitionReceived', 'url'=>array('admin')),
);
?>

<h1>Create ProAwardsRecognitionReceived</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>