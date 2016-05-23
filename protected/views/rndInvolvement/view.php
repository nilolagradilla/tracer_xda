<?php
/* @var $this RndInvolvementController */
/* @var $model RndInvolvement */

$this->breadcrumbs=array(
	'Rnd Involvements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RndInvolvement', 'url'=>array('index')),
	array('label'=>'Create RndInvolvement', 'url'=>array('create')),
	array('label'=>'Update RndInvolvement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RndInvolvement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RndInvolvement', 'url'=>array('admin')),
);
?>

<h1>View RndInvolvement #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'scholarId',
		'fieldTitleResearch',
		'locationDuration',
		'fundSource',
		'natureOfInvolvement',
	),
)); ?>
