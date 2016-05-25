<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'rndInvolvement-grid',
    'dataProvider'=>$rnd,
    'columns'=>array(

        'fieldTitleResearch',
        'locationDuration',
        'fundSource',
        'natureOfInvolvement',
        
        array(
            'header'=>'delete',
            'class'=>'bootstrap.widgets.TbButtonColumn',
                        'deleteConfirmation'=>"js:'Do you really want to delete sample: '+$.trim($(this).parent().parent().children(':nth-child(2)').text())+'?'",
                        'template'=>'{delete}',
                        'buttons'=>array
                        (
                            'delete' => array(
                                'label'=>'Delete Sample',
                                'url'=>'Yii::app()->createUrl("/rndInvolvement/delete/id/$data->id")',
                                ),
                        ),
            ),
    ),
)); ?>
