<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'employmentHistory-grid',
    'dataProvider'=>$empHist,
    'columns'=>array(
            
        'position',
        'inclusivePeriod',
        'relatedToAcademic',
        'companyAddress',

        array(
            'header'=>'delete',
            'class'=>'bootstrap.widgets.TbButtonColumn',
                        'deleteConfirmation'=>"js:'Do you really want to delete sample: '+$.trim($(this).parent().parent().children(':nth-child(2)').text())+'?'",
                        'template'=>'{delete}',
                        'buttons'=>array
                        (
                            'delete' => array(
                                'label'=>'Delete Sample',
                                'url'=>'Yii::app()->createUrl("/employmentHistory/delete/id/$data->id")',
                                ),
                        ),
            ),
    ),
)); ?>

