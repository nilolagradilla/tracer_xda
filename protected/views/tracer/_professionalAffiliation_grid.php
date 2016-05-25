<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'professionalAffiliation-grid',
    'dataProvider'=>$profAff,
    'columns'=>array(

        'organizationName',
        'address',
        'position',
        'duration',
        
        array(
            'header'=>'delete',
            'class'=>'bootstrap.widgets.TbButtonColumn',
                        'deleteConfirmation'=>"js:'Do you really want to delete sample: '+$.trim($(this).parent().parent().children(':nth-child(2)').text())+'?'",
                        'template'=>'{delete}',
                        'buttons'=>array
                        (
                            'delete' => array(
                                'label'=>'Delete Sample',
                                'url'=>'Yii::app()->createUrl("/professionalAffiliation/delete/id/$data->id")',
                                ),
                        ),
            ),
    ),
)); ?>
