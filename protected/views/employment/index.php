<?php
/* @var $this EmploymentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employments',
);

$this->menu=array(
	array('label'=>'Create Employment', 'url'=>array('create')),
	array('label'=>'Manage Employment', 'url'=>array('admin')),
);
?>

<h1>Employments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
