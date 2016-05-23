<?php
/* @var $this EmploymentController */
/* @var $model Employment */

$this->breadcrumbs=array(
	'Employments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Employment', 'url'=>array('index')),
	array('label'=>'Manage Employment', 'url'=>array('admin')),
);
?>

<h1>Create Employment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>