<?php
/* @var $this ScholarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Scholars',
);

$this->menu=array(
	array('label'=>'Create Scholar', 'url'=>array('create')),
	array('label'=>'Manage Scholar', 'url'=>array('admin')),
);
?>

<h1>Scholars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

