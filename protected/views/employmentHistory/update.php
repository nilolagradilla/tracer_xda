<?php
/* @var $this EmploymentHistoryController */
/* @var $model EmploymentHistory */

$this->breadcrumbs=array(
	'Employment Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmploymentHistory', 'url'=>array('index')),
	array('label'=>'Create EmploymentHistory', 'url'=>array('create')),
	array('label'=>'View EmploymentHistory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EmploymentHistory', 'url'=>array('admin')),
);
?>

<h1>Update EmploymentHistory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>