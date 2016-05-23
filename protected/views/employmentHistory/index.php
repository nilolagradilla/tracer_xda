<?php
/* @var $this EmploymentHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employment Histories',
);

$this->menu=array(
	array('label'=>'Create EmploymentHistory', 'url'=>array('create')),
	array('label'=>'Manage EmploymentHistory', 'url'=>array('admin')),
);
?>

<h1>Employment Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
