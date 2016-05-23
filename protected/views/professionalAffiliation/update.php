<?php
/* @var $this ProfessionalAffiliationController */
/* @var $model ProfessionalAffiliation */

$this->breadcrumbs=array(
	'Professional Affiliations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfessionalAffiliation', 'url'=>array('index')),
	array('label'=>'Create ProfessionalAffiliation', 'url'=>array('create')),
	array('label'=>'View ProfessionalAffiliation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProfessionalAffiliation', 'url'=>array('admin')),
);
?>

<h1>Update ProfessionalAffiliation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>