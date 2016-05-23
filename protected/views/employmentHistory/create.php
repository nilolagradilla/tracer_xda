<?php
/* @var $this EmploymentHistoryController */
/* @var $model EmploymentHistory */

$this->breadcrumbs=array(
	'Employment Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmploymentHistory', 'url'=>array('index')),
	array('label'=>'Manage EmploymentHistory', 'url'=>array('admin')),
);
?>

<h1>Create EmploymentHistory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>