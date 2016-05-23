<?php
/* @var $this ScholarshipCategoryController */
/* @var $model ScholarshipCategory */

$this->breadcrumbs=array(
	'Scholarship Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ScholarshipCategory', 'url'=>array('index')),
	array('label'=>'Create ScholarshipCategory', 'url'=>array('create')),
	array('label'=>'View ScholarshipCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ScholarshipCategory', 'url'=>array('admin')),
);
?>

<h1>Update ScholarshipCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>