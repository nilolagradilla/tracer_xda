<?php
/* @var $this ScholarshipCategoryController */
/* @var $model ScholarshipCategory */

$this->breadcrumbs=array(
	'Scholarship Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ScholarshipCategory', 'url'=>array('index')),
	array('label'=>'Create ScholarshipCategory', 'url'=>array('create')),
	array('label'=>'Update ScholarshipCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ScholarshipCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ScholarshipCategory', 'url'=>array('admin')),
);
?>

<h1>View ScholarshipCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>
