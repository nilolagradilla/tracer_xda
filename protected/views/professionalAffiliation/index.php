<?php
/* @var $this ProfessionalAffiliationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Professional Affiliations',
);

$this->menu=array(
	array('label'=>'Create ProfessionalAffiliation', 'url'=>array('create')),
	array('label'=>'Manage ProfessionalAffiliation', 'url'=>array('admin')),
);
?>

<h1>Professional Affiliations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
