<?php
/* @var $this ProfessionalAffiliationController */
/* @var $model ProfessionalAffiliation */

$this->breadcrumbs=array(
	'Professional Affiliations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfessionalAffiliation', 'url'=>array('index')),
	array('label'=>'Manage ProfessionalAffiliation', 'url'=>array('admin')),
);
?>

<h1>Create ProfessionalAffiliation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>