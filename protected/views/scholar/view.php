<?php
/* @var $this ScholarController */
/* @var $model Scholar */

$this->breadcrumbs=array(
	'Scholars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Scholar', 'url'=>array('index')),
	array('label'=>'Create Scholar', 'url'=>array('create')),
	array('label'=>'Update Scholar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Scholar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scholar', 'url'=>array('admin')),
);
?>

<h1>View Scholar #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lastName',
		'firstName',
		'middleName',
		'nameSuffix',
		'sex',
		'userId',
		'entryDate',
	),
)); ?>

