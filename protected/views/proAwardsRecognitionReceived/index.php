<?php
/* @var $this ProAwardsRecognitionReceivedController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pro Awards Recognition Receiveds',
);

$this->menu=array(
	array('label'=>'Create ProAwardsRecognitionReceived', 'url'=>array('create')),
	array('label'=>'Manage ProAwardsRecognitionReceived', 'url'=>array('admin')),
);
?>

<h1>Pro Awards Recognition Receiveds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
