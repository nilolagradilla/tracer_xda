<?php
/* @var $this EmploymentController */
/* @var $model Employment */

$this->breadcrumbs=array(
	'Employments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Employment', 'url'=>array('index')),
	array('label'=>'Create Employment', 'url'=>array('create')),
	array('label'=>'Update Employment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Employment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employment', 'url'=>array('admin')),
);
?>

<h1>View Employment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'scholarId',
		'employmentStatus',
		'statusEmployed',
		'companyName',
		'companyAddress',
		'businessName',
		'businessAddress',
		'sector',
		'businessType',
		'yearsOfOperation',
		'reasonUnemployed',
	),
)); ?>
