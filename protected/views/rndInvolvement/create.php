<?php
/* @var $this RndInvolvementController */
/* @var $model RndInvolvement */

$this->breadcrumbs=array(
	'Rnd Involvements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RndInvolvement', 'url'=>array('index')),
	array('label'=>'Manage RndInvolvement', 'url'=>array('admin')),
);
?>

<h1>Create RndInvolvement</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>