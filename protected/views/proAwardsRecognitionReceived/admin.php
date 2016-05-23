<?php
/* @var $this ProAwardsRecognitionReceivedController */
/* @var $model ProAwardsRecognitionReceived */

$this->breadcrumbs=array(
	'Pro Awards Recognition Receiveds'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProAwardsRecognitionReceived', 'url'=>array('index')),
	array('label'=>'Create ProAwardsRecognitionReceived', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pro-awards-recognition-received-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pro Awards Recognition Receiveds</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pro-awards-recognition-received-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		'titleOfAward',
		'dateGiven',
		'awardingBody',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
