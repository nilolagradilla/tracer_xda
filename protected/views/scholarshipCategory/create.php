<?php
/* @var $this ScholarshipCategoryController */
/* @var $model ScholarshipCategory */

$this->breadcrumbs=array(
	'Scholarship Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ScholarshipCategory', 'url'=>array('index')),
	array('label'=>'Manage ScholarshipCategory', 'url'=>array('admin')),
);
?>

<h1>Create ScholarshipCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>