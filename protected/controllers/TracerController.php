<?php

class TracerController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/colu
	 n2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
// ----------------------------------------------------------------------------------------------------------------------------------------------
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'), 
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
// ----------------------------------------------------------------------------------------------------------------------------------------------

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

// ----------------------------------------------------------------------------------------------------------------------------------------------
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model = new Tracer;
		$address = new Address;
		$contact = new Contact;
		$employmentHistory = new EmploymentHistory;
		$professionalAffiliation = new ProfessionalAffiliation;
		$rndInvolvement = new RndInvolvement;
		$employment = new Employment;
		$proAwardsRecognitionReceived = new ProAwardsRecognitionReceived;

		$scholar = Scholar::model()->findbyPk($id);
		$model->attributes = $scholar->attributes;
		$model->scholarId = $scholar->id;

		if(isset($_POST['Tracer'], $_POST['Employment'], $_POST['Address']))
		{
			$model->attributes=$_POST['Tracer'];
			$employment->attributes=$_POST['Employment'];
			$address->attributes=$_POST['Address'];

			$valid = "";
			$valid = $model->validate();
			$valid = $employment->validate() && $valid;
			$valid = $address->validate() && $valid;

			if($valid){
				if($model->save())
				{
					$employment->scholarId=$model->id;
					$address->scholarId=$model->id;
					$employment->save();
					$address->save();

					$this->redirect(array('view','id'=>$model->id));
				}
				
			}
		}

		if(isset($_POST['Contact']))
		{
			$contact->scholarId=$model->scholarId;
			$contact->attributes=$_POST['Contact'];
			$contact->save();
		}

		if(isset($_POST['EmploymentHistory']))
		{
			$employmentHistory->scholarId=$model->scholarId;
			$employmentHistory->attributes=$_POST['EmploymentHistory'];
			$employmentHistory->save();
		}

		if(isset($_POST['ProfessionalAffiliation']))
		{
			$professionalAffiliation->scholarId=$model->scholarId;
			$professionalAffiliation->attributes=$_POST['ProfessionalAffiliation'];
			$professionalAffiliation->save();
		}

		if(isset($_POST['RndInvolvement']))
		{
			$rndInvolvement->scholarId=$model->scholarId;
			$rndInvolvement->attributes=$_POST['RndInvolvement'];
			$rndInvolvement->save();
		}

		if(isset($_POST['ProAwardsRecognitionReceived']))
		{
			$proAwardsRecognitionReceived->scholarId=$model->scholarId;
			$proAwardsRecognitionReceived->attributes=$_POST['ProAwardsRecognitionReceived'];
			$proAwardsRecognitionReceived->save();
		}

		//run everytime
		$scholar_contact= new CActiveDataProvider("Contact",array(
			'criteria'=>array(
				'condition'=>"scholarId = ".$id,
				)
			));

		$scholar_empHist= new CActiveDataProvider("EmploymentHistory",array(
			'criteria'=>array(
				'condition'=>"scholarId = ".$id,
				)
			));

		$prof_affiliation= new CActiveDataProvider("ProfessionalAffiliation",array(
			'criteria'=>array(
				'condition'=>"scholarId = ".$id,
				)
			));

		$rnd_involvement= new CActiveDataProvider("RndInvolvement",array(
			'criteria'=>array(
				'condition'=>"scholarId = ".$id,
				)
			));

		$par_received= new CActiveDataProvider("ProAwardsRecognitionReceived",array(
			'criteria'=>array(
				'condition'=>"scholarId = ".$id,
				)
			));

		$this->render('create',array(
			'model'=>$model,
			'contact'=>$contact,
			'employment'=>$employment,
			'employmentHistory'=>$employmentHistory,
			'professionalAffiliation'=>$professionalAffiliation,
			'rndInvolvement'=>$rndInvolvement,
			'proAwardsRecognitionReceived'=>$proAwardsRecognitionReceived,
			'address'=>$address,

			'schontact'=>$scholar_contact,
			'empHist'=>$scholar_empHist,
			'profAff'=>$prof_affiliation,
			'rnd'=>$rnd_involvement,
			'par'=>$par_received,
		));
	}
// ----------------------------------------------------------------------------------------------------------------------------------------------
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$contact = new Contact;
		$employmentHistory = new EmploymentHistory;
		$professionalAffiliation = new ProfessionalAffiliation;
		$rndInvolvement = new RndInvolvement;
		$employment = new Employment;
		$address = new Address;

		$proAwardsRecognitionReceived = new ProAwardsRecognitionReceived;
		$model=Tracer::model()->findByAttributes(array("scholarId"=>$id));
		$scholar = Scholar::model()->findbyPk($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performcreateAjaxValidation($model);

		if(isset($_POST['Tracer'], $_POST['Employment'], $_POST['Address']))
		{
			$model->attributes=$_POST['Tracer'];
			$employment->attributes=$_POST['Employment'];
			$address->attributes=$_POST['Address'];

			$valid = "";
			$valid = $model->validate();
			$valid = $employment->validate() && $valid;
			$valid = $address->validate() && $valid;

			if($valid){
				if($model->save())
				{
					$employment->scholarId=$model->id;
					$address->scholarId=$model->id;
					$employment->save();
					$address->save();

					$this->redirect(array('view','id'=>$model->id));
				}
				
			}
		}


		if(isset($_POST['Contact']))
		{
			$contact->scholarId=$model->scholarId;
			$contact->attributes=$_POST['Contact'];
			$contact->save();
		}

		if(isset($_POST['EmploymentHistory']))
		{
			$employmentHistory->scholarId=$model->scholarId;
			$employmentHistory->attributes=$_POST['EmploymentHistory'];
			$employmentHistory->save();
		}

		if(isset($_POST['ProfessionalAffiliation']))
		{
			$professionalAffiliation->scholarId=$model->scholarId;
			$professionalAffiliation->attributes=$_POST['ProfessionalAffiliation'];
			$professionalAffiliation->save();
		}

		if(isset($_POST['RndInvolvement']))
		{
			$rndInvolvement->scholarId=$model->scholarId;
			$rndInvolvement->attributes=$_POST['RndInvolvement'];
			$rndInvolvement->save();
		}

		if(isset($_POST['ProAwardsRecognitionReceived']))
		{
			$proAwardsRecognitionReceived->scholarId=$model->scholarId;
			$proAwardsRecognitionReceived->attributes=$_POST['ProAwardsRecognitionReceived'];
			$proAwardsRecognitionReceived->save();
		}

		$scholar_contact= new CActiveDataProvider("Contact",array(
			'criteria'=>array(
				'condition'=>"scholarId = ".$id,
				)
			));

		$scholar_empHist= new CActiveDataProvider("EmploymentHistory",array(
			'criteria'=>array(
				'condition'=>"scholarId = ".$id,
				)
			));

		$prof_affiliation= new CActiveDataProvider("ProfessionalAffiliation",array(
			'criteria'=>array(
				'condition'=>"scholarId = ".$id,
				)
			));

		$rnd_involvement= new CActiveDataProvider("RndInvolvement",array(
			'criteria'=>array(
				'condition'=>"scholarId = ".$id,
				)
			));

		$par_received= new CActiveDataProvider("ProAwardsRecognitionReceived",array(
			'criteria'=>array(
				'condition'=>"scholarId = ".$id,
				)
			));

		$this->render('update',array(
			'model'=>$model,
			'contact'=>$contact,
			'employment'=>$employment,
			'employmentHistory'=>$employmentHistory,
			'professionalAffiliation'=>$professionalAffiliation,
			'rndInvolvement'=>$rndInvolvement,
			'proAwardsRecognitionReceived'=>$proAwardsRecognitionReceived,
			'address'=>$address,

			'schontact'=>$scholar_contact,
			'empHist'=>$scholar_empHist,
			'profAff'=>$prof_affiliation,
			'rnd'=>$rnd_involvement,
			'par'=>$par_received,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Tracer');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Tracer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tracer']))
			$model->attributes=$_GET['Tracer'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Tracer the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Tracer::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

// ----------------------------------------------------------------------------------------------------------------------------------------------

	
// ----------------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------------
	/**
	 * Performs the AJAX validation.
	 * @param Tracer $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tracer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

}
