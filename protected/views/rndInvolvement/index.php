<?php
/* @var $this RndInvolvementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rnd Involvements',
);

$this->menu=array(
	array('label'=>'Create RndInvolvement', 'url'=>array('create')),
	array('label'=>'Manage RndInvolvement', 'url'=>array('admin')),
);
?>

<h1>Rnd Involvements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
