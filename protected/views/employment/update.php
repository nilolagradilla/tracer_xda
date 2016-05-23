<?php
/* @var $this EmploymentController */
/* @var $model Employment */

$this->breadcrumbs=array(
	'Employments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Employment', 'url'=>array('index')),
	array('label'=>'Create Employment', 'url'=>array('create')),
	array('label'=>'View Employment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Employment', 'url'=>array('admin')),
);
?>

<h1>Update Employment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>