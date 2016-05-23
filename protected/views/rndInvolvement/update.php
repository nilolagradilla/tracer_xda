<?php
/* @var $this RndInvolvementController */
/* @var $model RndInvolvement */

$this->breadcrumbs=array(
	'Rnd Involvements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RndInvolvement', 'url'=>array('index')),
	array('label'=>'Create RndInvolvement', 'url'=>array('create')),
	array('label'=>'View RndInvolvement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RndInvolvement', 'url'=>array('admin')),
);
?>

<h1>Update RndInvolvement <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>