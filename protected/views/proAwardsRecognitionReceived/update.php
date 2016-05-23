<?php
/* @var $this ProAwardsRecognitionReceivedController */
/* @var $model ProAwardsRecognitionReceived */

$this->breadcrumbs=array(
	'Pro Awards Recognition Receiveds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProAwardsRecognitionReceived', 'url'=>array('index')),
	array('label'=>'Create ProAwardsRecognitionReceived', 'url'=>array('create')),
	array('label'=>'View ProAwardsRecognitionReceived', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProAwardsRecognitionReceived', 'url'=>array('admin')),
);
?>

<h1>Update ProAwardsRecognitionReceived <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>