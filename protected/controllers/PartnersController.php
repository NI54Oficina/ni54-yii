<?php

class PartnersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
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
			'postOnly + upload', // we only allow deletion via POST requesty
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'upload'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Partners;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Partners']))
		{
			$model->attributes=$_POST['Partners'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Partners']))
		{
			$model->attributes=$_POST['Partners'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
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
		$dataProvider=new CActiveDataProvider('Partners');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Partners('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Partners']))
			$model->attributes=$_GET['Partners'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Partners the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Partners::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Partners $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='partners-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	// functin para partners

	 public function actionUpload(){




	 		$nombreImg=$_POST["nombreImg"];

			if($nombreImg==null) exit("Error - No fue selecionado un nombre para la imagen ");

			$partners= new Partners();
			$partners->img= $nombreImg;
			$partners->save();

			$indiceImg= $partners->id;



	 		if (isset($_FILES['file'])) {

	 			$targetPath = "img/";

	 			//if(isset($_POST["nombre"])){
	 			$nombre="p-".$indiceImg;

	 				$formato="";
	 				if(strpos($_FILES['file']['name'],".png")>0){
	 					$formato= ".png";
	 				}
	 				if(strpos($_FILES['file']['name'],".jpg")>0){
	 					$formato= ".jpg";
	 				}
	 				if(strpos($_FILES['file']['name'],".jpeg")>0){
	 					$formato= ".jpeg";
	 				}
	 				$targetFile =  $targetPath.$nombre.$formato;


	 			move_uploaded_file($_FILES['file']['tmp_name'],$targetFile);
				//echo $targetFile;

				echo $nombre.$formato;

	 		}else{
	 			echo "0";
	 		}

	 }

}
