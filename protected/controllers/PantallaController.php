<?php

class PantallaController extends Controller
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
			'postOnly + testAjax', // we only allow deletion via POST requesty
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
				'actions'=>array('index','view','upload',"testAjax"),
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
		$model=new Pantalla;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pantalla']))
		{
			$model->attributes=$_POST['Pantalla'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_pantalla));
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

		if(isset($_POST['Pantalla']))
		{
			$model->attributes=$_POST['Pantalla'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_pantalla));
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
		$dataProvider=new CActiveDataProvider('Pantalla');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pantalla('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pantalla']))
			$model->attributes=$_GET['Pantalla'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Pantalla the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Pantalla::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Pantalla $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='pantalla-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionTestajax(){
		//header("Access-Control-Allow-Origin: *");

		$metas= MetatagPage::model()->findAllByAttributes(array('idPage'=>"1",));
		$model=null;
		$data=1;

		if($_POST["url"]=="header"){
			$this->renderPartial("//static/stylesheet-code2",$model);
			$this->renderPartial("//static/header",$model);
		}else{
			/*if($_POST["url"]!="home"){
				$this->renderPartial("//static/header",$model);
			}*/
			$segments= explode('/',$_POST["url"]);
			if(count($segments)>2){
				//echo "<div style='width:100%;height:40px;background-color:red;'>sdasdas</div>";
				$this->renderPartial("//static/".$segments[1],$segments[2]);
			}else{
				//$this->renderPartial("//static/".$segments[1],$segments[2]);
			//}else{
				$this->renderPartial("//static/".$_POST["url"],$model);
			//}
			}
		}
	}

	public function actionUpload(){


			$id_projecto=$_POST["id_projecto"];
			$modalidad=$_POST["modalidad"];
			$trabajo=$_POST["trabajo"];
			$color=$_POST["color"];

			// echo $id_projecto." ".$modalidad." ".$trabajo." ".$color;
			//
			// exit();

				if($color==null)exit("Debe ingresar un color para la pantalla");

				if($modalidad==null)exit("El campo modalidad no puede estar vacio");

				if($trabajo==null)exit("El campo trabajo no puede estar vacio");

				if($color[0]!="#")exit("Debe ingresar un color en hexagesimal empezando con #");

				$maxpantalla= Pantalla::model()->findAll(array('order'=>'id_pantalla DESC'));


				$id=$maxpantalla[0]["id_pantalla"];
				$id++;



			if (isset($_FILES['file'])) {

				$targetPath = "img/";

				//if(isset($_POST["nombre"])){
				$nombre=$id_projecto."-1";

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
				/*}else{
					$targetFile =  $targetPath.$_FILES['file']['name'];
				}*/
				//echo $targetFile;
				//exit();

				move_uploaded_file($_FILES['file']['tmp_name'],$targetFile);
				//echo $targetFile;
				$Pn= new Pantalla();
				$Pn->id_pantalla =$id;
				$Pn->id_project= $id_projecto;
				$Pn ->img=1;
				$Pn->modalidad=$modalidad;
				$Pn->trabajo=$trabajo;
				$Pn->color=$color;
				$Pn->save();
				echo $nombre.$formato;
			}else{
				echo "0";
			}

	}

}
