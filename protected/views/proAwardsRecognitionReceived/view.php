<?php
/* @var $this ProAwardsRecognitionReceivedController */
/* @var $model ProAwardsRecognitionReceived */

$this->breadcrumbs=array(
	'Pro Awards Recognition Receiveds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProAwardsRecognitionReceived', 'url'=>array('index')),
	array('label'=>'Create ProAwardsRecognitionReceived', 'url'=>array('create')),
	array('label'=>'Update ProAwardsRecognitionReceived', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProAwardsRecognitionReceived', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProAwardsRecognitionReceived', 'url'=>array('admin')),
);
?>

<h1>View ProAwardsRecognitionReceived #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'scholarId',
		'titleOfAward',
		'dateGiven',
		'awardingBody',
	),
)); ?>
