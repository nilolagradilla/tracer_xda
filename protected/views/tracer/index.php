<?php
/* @var $this TracerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tracers',
);

$this->menu=array(
	array('label'=>'Create Tracer', 'url'=>array('create')),
	array('label'=>'Manage Tracer', 'url'=>array('admin')),
);
?>

<h1>Tracers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


