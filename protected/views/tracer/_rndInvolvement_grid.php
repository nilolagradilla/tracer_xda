<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'rndInvolvement-grid',
    'dataProvider'=>$rnd,
    'columns'=>array(

        'fieldTitleResearch',
        'locationDuration',
        'fundSource',
        'natureOfInvolvement',
            

        array(
                'header'=>'Remove',
                'class'=>'CButtonColumn',
                'template' => '{remove}',  //include the standard buttons plus the new status button
                'buttons'=>array(

                        'remove' => array(

                                'label'=>'Remove',
                                'url'=>'Yii::app()->createUrl("/tracer/deleteRndInvolvement",array("id"=>$data->id))',
                                'options' => array(
                                    'class'=>'btn btn-warning btn-small',
                                    'confirm'=>'Are you sure you wish to delete this information?',
                                    'ajax' => array(
                                        'type' => 'POST',
                                        'url'=>'js:$(this).attr("href")',
                                        'success' => 'js:function(data) {
                                            $.fn.yiiGridView.update("rndInvolvement-grid");
                                            
                                         }',
                                         )

                                ),

                         ),

                    ),

                ),
    ),
)); ?>