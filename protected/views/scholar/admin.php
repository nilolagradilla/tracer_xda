<?php
/* @var $this ScholarController */
/* @var $model Scholar */

$this->breadcrumbs=array(
	'Scholars'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Scholar', 'url'=>array('index')),
	array('label'=>'Create Scholar', 'url'=>array('create')),
);


?>

<h1>Manage Scholars</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	//'id'=>'scholar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		array(
                'header'=>'Add',
                'class'=>'CButtonColumn',
                'template' => '{addsample}{updatesample}',  //include the standard buttons plus the new status button
                'buttons'=>array(

                        'addsample' => array(

                                'label'=>'Add',
                                //'imageUrl'=>'images/icn/status.png',  // make sure you have an image
                                'url'=>'Yii::app()->createUrl("/tracer/create",array("id"=>"$data->id"))',
                                  'visible'=>'$data->tracer?false:true',
                                'options' => array(
	                                'class'=>'btn btn-warning btn-small',
	                              
                               	 ),
                                

                                ),

                         'updatesample' => array(

                                'label'=>'Update',
                                //'imageUrl'=>'images/icn/status.png',  // make sure you have an image
                                'url'=>'Yii::app()->createUrl("/tracer/update",array("id"=>"$data->id"))',
                                   'visible'=>'$data->tracer?true:false',
                                'options' => array(
	                                'class'=>'btn btn-warning btn-small',
	                             
                                ),
                                

                                ),


                         ),
              //  'visible'=>'$data->tracer?true:false',

                    ),
               
		'id',
		'lastName',
		'firstName',
		'middleName',
		'nameSuffix',
		'sex',
		
		// array(
		// 	'class'=>'CButtonColumn',
		// ),
	),

)); ?>







