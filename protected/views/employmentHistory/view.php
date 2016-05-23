<?php
/* @var $this EmploymentHistoryController */
/* @var $model EmploymentHistory */

$this->breadcrumbs=array(
	'Employment Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EmploymentHistory', 'url'=>array('index')),
	array('label'=>'Create EmploymentHistory', 'url'=>array('create')),
	array('label'=>'Update EmploymentHistory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmploymentHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmploymentHistory', 'url'=>array('admin')),
);
?>

<h1>View EmploymentHistory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'scholarId',
		'position',
		'inclusivePeriod',
		'relatedToAcademic',
		'companyAddress',
	),
)); ?>
