<?php
/* @var $this ProfessionalAffiliationController */
/* @var $model ProfessionalAffiliation */

$this->breadcrumbs=array(
	'Professional Affiliations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProfessionalAffiliation', 'url'=>array('index')),
	array('label'=>'Create ProfessionalAffiliation', 'url'=>array('create')),
	array('label'=>'Update ProfessionalAffiliation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProfessionalAffiliation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfessionalAffiliation', 'url'=>array('admin')),
);
?>

<h1>View ProfessionalAffiliation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'scholarId',
		'organizationName',
		'address',
		'position',
		'duration',
	),
)); ?>
