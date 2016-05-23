<?php
/* @var $this TracerController */
/* @var $model Tracer */

$this->breadcrumbs=array(
	'Tracers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tracer', 'url'=>array('index')),
	array('label'=>'Manage Tracer', 'url'=>array('admin')),
);
?>

<h1>Create Tracer</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'contact'=>$contact, 'employment'=>$employment, 'employmentHistory'=>$employmentHistory, 'professionalAffiliation'=>$professionalAffiliation, 'address'=>$address, 'rndInvolvement'=>$rndInvolvement, 'proAwardsRecognitionReceived'=>$proAwardsRecognitionReceived, 'schontact'=>$schontact, 'empHist'=>$empHist, 'profAff'=>$profAff, 'rnd'=>$rnd, 'par'=>$par)); ?>



