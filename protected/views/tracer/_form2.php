<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/tracer.css">
</head>
<body>

</body>
</html>

<?php
/* @var $this TracerController */
/* @var $model Tracer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tracer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<h4>PERSONAL INFORMATION</h4>

	<div class="row">
		<?php echo $form->labelEx($model,'lastName'); ?>
		<?php echo $form->textField($model,'lastName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstName'); ?>
		<?php echo $form->textField($model,'firstName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middleName'); ?>
		<?php echo $form->textField($model,'middleName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'middleName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nameSuffix'); ?>
		<?php echo $form->textField($model,'nameSuffix',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nameSuffix'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->dropDownList($model,'sex', array("1"=>"Male","2"=>"Female")); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'dateOfBirth'); 
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
				'attribute'=>'dateOfBirth',
				'name'=>'dateOfBirth',
				'value'=>$model->dateOfBirth,
				'model'=>$model,

				'options'=>array(
									'showAnim'=>'slide',
									'showButtonPanel'=>true,
									'dateFormat'=>'yy-m-d',
									'showOn'=>'button', // 'focus', 'button', 'both'
       								'buttonText'=>Yii::t('ui','Select form calendar'),
       								'buttonImage'=>Yii::app()->request->baseUrl.'/images/calendar.gif',
    							    'buttonImageOnly'=>true,
								),
					'htmlOptions'=>array('style'=>''),
				)) ?>
		<?php echo $form->error($model,'dateOfBirth'); ?>
	</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - -  radio button - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<div class="row">
		<?php echo $form->labelEx($model,'civilStatus'); ?>

		<div class="compactRadioButton">
		<?php echo $form->radioButtonList($model,'civilStatus', array("1"=>"Single", "2"=>"Married", "3"=>"Divorced", "4"=>"Widowed"), array('separator'=>' ','labelOptions'=>array('style'=>'display:inline'))); ?>
		</div>

		<?php echo $form->error($model,'civilStatus'); ?>
	</div>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -Address dropDown - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<div id='ma'>
	<h4>MAILING ADDRESS</h4>

	<div class="row">
		<?php echo $form->labelEx($address,'Municipality *'); ?>

		<?php
		$this->widget('ext.select2.ESelect2',array(
			  'model'=>$address,
			  'attribute'=>'municipalityId',
			  'data'=>MunicipalityCity::listDataCity(),
			  'options'=>array(
					'width'=>'265px',
					'allowClear'=>true,
					'placeholder'=>'Please select...',
					),
			));
		?>
		<?php echo $form->error($address,'municipalityId'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($address,'Barangay *'); ?>

		<?php
		$this->widget('ext.select2.ESelect2',array(
			  'model'=>$address,
			  'attribute'=>'barangayId',
			  'data'=>Barangay::listDataBarangay(),
			  'options'=>array(
					'width'=>'265px',
					'allowClear'=>true,
					'placeholder'=>'Please select...',
					),
			));
		?>
			<?php echo $form->error($address,'barangayId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($address,'houseNo'); ?>
		<?php echo $form->textArea($address,'houseNo',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($address,'houseNo'); ?>
	</div>

</div>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<div id='pi'>
	<h4>PARENTS INFORMATION</h4>

	<div class="row">
		<?php echo $form->labelEx($model,'father'); ?>
		<?php echo $form->textField($model,'father',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'father'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mother'); ?>
		<?php echo $form->textField($model,'mother',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mother'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addressParents'); ?>
		<?php echo $form->textArea($model,'addressParents',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'addressParents'); ?>
	</div>
</div>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Contact popup - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<h4> CONTACT INFORMATION </h4>

<?php echo CHtml::link('ADD', "",  // the link for open the dialog
    array(
        'style'=>'cursor: pointer; text-decoration: none;',
        'onclick'=>"js:{addContact(); $('#dialogContact').dialog('open');}",
        'class'=>'btn btn-success'

        ));?>

<div id="grid_contact">
	<?php $this->renderPartial('_contact_grid', array('schontact'=>$schontact)); ?>
</div>


	
<!-- - - - - - - - - - - -  - - - - - - - - - -  - - - Dropdown Scholarship - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<h4> SCHOLARSHIP INFORMATION</h4> 

	<div class="row">
		<?php echo $form->labelEx($model,'Scholarship Program *'); ?>
		<?php echo $form->dropDownList($model,'scholarId', scholarshipCategory::listDataCat()); ?>
	</div>
<!-- - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

	<div class="row">
		<?php echo $form->labelEx($model,'yearGraduated'); ?>
		<?php echo $form->textField($model,'yearGraduated'); ?>
		<?php echo $form->error($model,'yearGraduated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'School/University *'); ?>
		<?php echo $form->dropDownList($model,'scholarId', school::listDataSchool()); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Course *'); ?>
		<?php echo $form->dropDownList($model,'scholarId', course::listDataCourse()); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'awardsHonors'); ?>
		<?php echo $form->dropDownList($model,'awardsHonors', array("1"=>"Summa Cum Laude","2"=>"Magna Cum Laude", "3"=>"Cum Laude")); ?>
		<?php echo $form->error($model,'awardsHonors'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateAccomplished'); 
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
				'attribute'=>'dateAccomplished',
				'name'=>'dateAccomplished',
				'value'=>$model->dateAccomplished,
				'model'=>$model,

				'options'=>array(
									'showAnim'=>'slide',
									'showButtonPanel'=>true,
									'dateFormat'=>'yy-m-d',
								),
					'htmlOptions'=>array('style'=>''),
				)) ?>
		<?php echo $form->error($model,'dateAccomplished'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entryDate'); 
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
				'attribute'=>'entryDate',
				'name'=>'entryDate',
				'value'=>$model->entryDate,
				'model'=>$model,

				'options'=>array(
									'showAnim'=>'slide',
									'showButtonPanel'=>true,
									'dateFormat'=>'yy-m-d',
								),
					'htmlOptions'=>array('style'=>''),
				)) ?>
		<?php echo $form->error($model,'entryDate'); ?>
	</div>




<!-- - - - - - - - - - - - - -  - - - - - - - - - - - - - - - - Employment - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<div id='ci'>
 
	<h4> CAREER/EMPLOYMENT INFORMATION </h4>

	<div class="row">
		<?php echo $form->labelEx($employment,'employmentStatus'); ?>

		<div class="compactRadioButton">
			<?php echo $form->radioButtonList($employment,'employmentStatus', array("1"=>"Employed, Locally", "2"=>"Employed, Abroad", "3"=>"Self-Employed", "4"=>"Unemployed"), array('separator'=>' ','labelOptions'=>array('style'=>'display:inline'))); ?>
			
		</div>
			<?php echo $form->error($employment,'employmentStatus'); ?>
		</div><br>

	
	 <div class="cpanel">
	 <input type="checkbox"><i><b> For those who are currently employed </b></i>
            <div class="cpanelContent">

	<div class="row">
		<?php echo $form->labelEx($employment,'companyName'); ?>
		<?php echo $form->textField($employment,'companyName',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($employment,'companyName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employment,'companyAddress'); ?>
		<?php echo $form->textArea($employment,'companyAddress',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($employment,'companyAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employment,'sector'); ?>

		<div class="compactRadioButton">
			<?php echo $form->dropDownList($employment,'sector', array("1"=>"Government", "2"=>"Private", "3"=>"Non-Government Organization/Foundation", "4"=>"Academe")); ?>
		</div>
			<?php echo $form->error($employment,'sector'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($employment,'statusEmployed'); ?>
		<div class="compactRadioButton">
			<?php echo $form->radioButtonList($employment,'statusEmployed', array("1"=>"Permanent", "2"=>"Temporary", "3"=>"Contractual"), array('separator'=>' ','labelOptions'=>array('style'=>'display:inline'))); ?>
		</div>
			<?php echo $form->error($employment,'statusEmployed'); ?>
	</div>

	  </div>
        </div>

        <h6>  </h6>

   	<div id='se'>

	 <div class="cpanel">
            <input type="checkbox"> <i><b> For those who are self-employed </b></i>
            <div class="cpanelContent">            

	<div class="row">
		<?php echo $form->labelEx($employment,'businessName'); ?>
		<?php echo $form->textField($employment,'businessName',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($employment,'businessName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employment,'businessAddress'); ?>
		<?php echo $form->textArea($employment,'businessAddress',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($employment,'businessAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employment,'businessType'); ?>
		<?php echo $form->textField($employment,'businessType',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($employment,'businessType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employment,'yearsOfOperation'); ?>
		<?php echo $form->textField($employment,'yearsOfOperation'); ?>
		<?php echo $form->error($employment,'yearsOfOperation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($employment,'reasonUnemployed'); ?>
		<?php echo $form->textArea($employment,'reasonUnemployed',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($employment,'reasonUnemployed'); ?>
	</div>

	     </div>
    </div>
</div>
</div>


<!-- - - - - - - - - - - - - - - - -  - - - - - - - - - - - - - -Employment History - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<div id='pop'>

<h4> EMPLOYMENT HISTORY </h4>

<?php echo CHtml::link('ADD', "",  // the link for open the dialog
    array(
        'style'=>'cursor: pointer; text-decoration: none;',
        'onclick'=>"js:{addEmploymentHistory(); $('#emphist').dialog('open');}", 
        'class'=>'btn btn-success'

        ));?>

        

<div id="grid_employmentHistory">
	<?php $this->renderPartial('_employmentHistory_grid', array('empHist'=>$empHist)); ?>
</div>
 
<!-- - - - - - - - - - - - - - - -  - - - - - - - - - - - Professional Affiliation- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<h4> PROFESSIONAL AFFILIATION </h4>

<?php echo CHtml::link('ADD', "",  // the link for open the dialog

    array(
        'style'=>'cursor: pointer; text-decoration: none;',
        'onclick'=>"js:{addProfessionalAffiliation(); $('#pa').dialog('open');}",         
        'class'=>'btn btn-success'

        ));?>

<div id="grid_professionalAffiliation">
	<?php $this->renderPartial('_professionalAffiliation_grid', array('profAff'=>$profAff)); ?>
</div>



<!-- - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - - - RND involvement - - - - - - - - -  - - - - - - - - - - - - -  - - - - - -->

<h4> RESEARCH AND DEVELOPMENT INVOLVEMENT </h4>

<?php echo CHtml::link('ADD', "",  // the link for open the dialog

    array(
        'style'=>'cursor: pointer; text-decoration: none;',
        'onclick'=>"js:{addRndInvolvement(); $('#rnd').dialog('open');}",    
        'class'=>'btn btn-success'

        ));?>

<div id="grid_rndInvolvement">
	<?php $this->renderPartial('_rndInvolvement_grid', array('rnd'=>$rnd)); ?>
</div>


<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - PAR received - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<h4> PROGRAM AWARDS RECOGNITION RECEIVED </h4>



    <?php echo CHtml::link('ADD', "",  // the link for open the dialog

    array(
        'style'=>'cursor: pointer; text-decoration: none;',
        'onclick'=>"js:{addPARreceived(); $('#par').dialog('open');}",   
        'class'=>'btn btn-success'

        ));?>

<div id="grid_proAwardsRecognitionReceived">
	<?php $this->renderPartial('_parReceived_grid', array('par'=>$par)); ?>
</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>

<!-- - - - - - -  - - - - - - - - -  - - - - - - - - - - - - - - - - Contact Popup - - - - - -  - - - - - - - -  - - - - - - - - - - - - - - --> 

<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'dialogContact',
    'options'=>array(
        'title'=>'Contact Information',
        'show'=>array('effect'=>'fadeIn','duration'=>500),
        'hide'=>array('effect'=>'fadeOut','duration'=>500),
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>350,
        'height'=>470,
        'draggable'=>false,
        'resizable'=>false,
        'closeOnEscape'=>false,
    ),
));?> 

<?php $this->endWidget(); ?>

</div><br>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Employment History Popup - - - - - - - - - - -  - - - - - - - - - - - - - - - -->

<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'emphist',
    'options'=>array(
        'title'=>'Employment History',
        'show'=>array('effect'=>'fadeIn','duration'=>500),
        'hide'=>array('effect'=>'fadeOut','duration'=>500),
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>350,
        'height'=>470,
        'draggable'=>false,
        'resizable'=>false,
        'closeOnEscape' => false,
    ),
));?> 


<?php $this->endWidget(); ?>


<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - Professional Affiliation - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'pa',
    'options'=>array(
        'title'=>'Professional Affiliation',
        'show'=>array('effect'=>'fadeIn','duration'=>500),
        'hide'=>array('effect'=>'fadeOut','duration'=>500),
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>350,
        'height'=>470,
        'draggable'=>false,
        'resizable'=>false,
        'closeOnEscape' => false,
    ),
));?> 

<?php $this->endWidget(); ?>
<!-- - - - - - -  - - - - - - - - - - - - - - - - - - - RND Involvement - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'rnd',
    'options'=>array(
        'title'=>'RND Involvement',
        'show'=>array('effect'=>'fadeIn','duration'=>500),
        'hide'=>array('effect'=>'fadeOut','duration'=>500),
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>350,
        'height'=>470,
        'draggable'=>false,
        'resizable'=>false,
        'closeOnEscape' => false,
    ),
));?> 

<?php $this->endWidget(); ?>

<!-- - - - - - - -  - - - - - - - - - - - - - - - - - - - - - PAR received - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array( // the dialog
    'id'=>'par',
    'options'=>array(
        'title'=>'PAR Received',
        'show'=>array('effect'=>'fadeIn','duration'=>500),
        'hide'=>array('effect'=>'fadeOut','duration'=>500),
        'autoOpen'=>false,
        'modal'=>true,
        'width'=>350,
        'height'=>470,
        'draggable'=>false,
        'resizable'=>false,
        'closeOnEscape' => false, 
    ),
));?> 

<?php $this->endWidget(); ?>



<script type="text/javascript">
function addContact()
{
	<?php echo CHtml::ajax(array(
			'url'=>$this->createUrl('contact/create',array('id'=>$model->scholarId)),
			'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#dialogContact').html(data.div);
                    // Here is the trick: on submit-> once again this function!
                    $('#dialogContact form').submit(addContact);
                }
                else
                {
                    $.fn.yiiGridView.update('scholar-grid');
					$('#dialogContact').html(data.div);
                    setTimeout(\"$('#dialogContact').dialog('close') \",1000);
					
                }
 
            }",
			'beforeSend'=>'function(jqXHR, settings){
                    $("#dialogContact").html(
						\'<div class="loader"><br\><br\>Generating form.<br\> Please wait...</div>\'
					);
             }',
			 'error'=>"function(request, status, error){
				 	$('#dialogContact').html(status+'('+error+')'+': '+ request.responseText );
					}",
				
			
            ))?>;
    return false; 
}
</script>

<script type="text/javascript">
function addEmploymentHistory()
{
	<?php echo CHtml::ajax(array(
			'url'=>$this->createUrl('employmentHistory/create',array('id'=>$model->scholarId)),
			'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#emphist').html(data.div);
                    // Here is the trick: on submit-> once again this function!
                    $('#emphist form').submit(addEmploymentHistory);
                }
                else
                {
                    $.fn.yiiGridView.update('employmentHistory-grid');
					$('#emphist').html(data.div);
                    setTimeout(\"$('#emphist').dialog('close') \",1000);
					
                }
 
            }",
			'beforeSend'=>'function(jqXHR, settings){
                    $("#emphist").html(
						\'<div class="loader"><br\><br\>Generating form.<br\> Please wait...</div>\'
					);
             }',
			 'error'=>"function(request, status, error){
				 	$('#emphist').html(status+'('+error+')'+': '+ request.responseText );
					}",
				
			
            ))?>;
    return false; 
}
</script>

<script type="text/javascript">
function addProfessionalAffiliation()
{
	<?php echo CHtml::ajax(array(
			'url'=>$this->createUrl('professionalAffiliation/create',array('id'=>$model->scholarId)),
			'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#pa').html(data.div);
                    // Here is the trick: on submit-> once again this function!
                    $('#pa form').submit(addProfessionalAffiliation);
                }
                else
                {
                    $.fn.yiiGridView.update('professionalAffiliation-grid');
					$('#pa').html(data.div);
                    setTimeout(\"$('#pa').dialog('close') \",1000);
					
                }
 
            }",
			'beforeSend'=>'function(jqXHR, settings){
                    $("#pa").html(
						\'<div class="loader"><br\><br\>Generating form.<br\> Please wait...</div>\'
					);
             }',
			 'error'=>"function(request, status, error){
				 	$('#pa').html(status+'('+error+')'+': '+ request.responseText );
					}",
				
			
            ))?>;
    return false; 
}
</script>

<script type="text/javascript">
function addRndInvolvement()
{
	<?php echo CHtml::ajax(array(
			'url'=>$this->createUrl('rndInvolvement/create',array('id'=>$model->scholarId)),
			'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#rnd').html(data.div);
                    // Here is the trick: on submit-> once again this function!
                    $('#rnd form').submit(addRndInvolvement);
                }
                else
                {
                    $.fn.yiiGridView.update('rndInvolvement-grid');
					$('#rnd').html(data.div);
                    setTimeout(\"$('#rnd').dialog('close') \",1000);
					
                }
 
            }",
			'beforeSend'=>'function(jqXHR, settings){
                    $("#rnd").html(
						\'<div class="loader"><br\><br\>Generating form.<br\> Please wait...</div>\'
					);
             }',
			 'error'=>"function(request, status, error){
				 	$('#rnd').html(status+'('+error+')'+': '+ request.responseText );
					}",
				
			
            ))?>;
    return false; 
}
</script>

<script type="text/javascript">
function addPARreceived()
{
	<?php echo CHtml::ajax(array(
			'url'=>$this->createUrl('proAwardsRecognitionReceived/create',array('id'=>$model->scholarId)),
			'data'=> "js:$(this).serialize()",
            'type'=>'post',
            'dataType'=>'json',
            'success'=>"function(data)
            {
                if (data.status == 'failure')
                {
                    $('#par').html(data.div);
                    // Here is the trick: on submit-> once again this function!
                    $('#par form').submit(addPARreceived);
                }
                else
                {
                    $.fn.yiiGridView.update('proAwardsRecognitionReceived-grid');
					$('#par').html(data.div);
                    setTimeout(\"$('#par').dialog('close') \",1000);
					
                }
 
            }",
			'beforeSend'=>'function(jqXHR, settings){
                    $("#par").html(
						\'<div class="loader"><br\><br\>Generating form.<br\> Please wait...</div>\'
					);
             }',
			 'error'=>"function(request, status, error){
				 	$('#par').html(status+'('+error+')'+': '+ request.responseText );
					}",
				
			
            ))?>;
    return false; 
}
</script>





