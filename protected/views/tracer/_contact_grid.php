<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'scholar-grid',
	'dataProvider'=>$schontact,
	'columns'=>array(
            
		'contactType',
		'home',
		'office',
        
	 	array(
            'header'=>'delete',
            'class'=>'bootstrap.widgets.TbButtonColumn',
                        'deleteConfirmation'=>"js:'Do you really want to delete sample: '+$.trim($(this).parent().parent().children(':nth-child(2)').text())+'?'",
                        'template'=>'{delete}',
                        'buttons'=>array
                        (
                            'delete' => array(
                                'label'=>'Delete Sample',
                                'url'=>'Yii::app()->createUrl("/contact/delete/id/$data->id")',
                                ),
                        ),
            ),
	),
)); ?>
