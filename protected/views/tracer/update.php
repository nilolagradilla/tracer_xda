<?php
/* @var $this TracerController */
/* @var $model Tracer */

$this->breadcrumbs=array(
	'Tracers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tracer', 'url'=>array('index')),
	array('label'=>'Create Tracer', 'url'=>array('create')),
	array('label'=>'View Tracer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tracer', 'url'=>array('admin')),
);
?>

<h1>Update Tracer <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'contact'=>$contact, 'employment'=>$employment, 'employmentHistory'=>$employmentHistory, 'professionalAffiliation'=>$professionalAffiliation, 'rndInvolvement'=>$rndInvolvement, 'proAwardsRecognitionReceived'=>$proAwardsRecognitionReceived, 'schontact'=>$schontact, 'empHist'=>$empHist, 'profAff'=>$profAff, 'rnd'=>$rnd, 'par'=>$par, 'address'=>$address)); ?>