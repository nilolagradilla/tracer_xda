<?php
/* @var $this TracerController */
/* @var $model Tracer */

$this->breadcrumbs=array(
	'Tracers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tracer', 'url'=>array('index')),
	array('label'=>'Create Tracer', 'url'=>array('create')),
	array('label'=>'Update Tracer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tracer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tracer', 'url'=>array('admin')),
);
?>

<h1>View Tracer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'scholarId',
		'lastName',
		'firstName',
		'middleName',
		'nameSuffix',
		'sex',
		'dateOfBirth',
		'civilStatus',
		'father',
		'mother',
		'addressParents',
		'yearGraduated',
		'awardsHonors',
		'dateAccomplished',
		'userId',
		'entryDate',
	),
)); ?>
