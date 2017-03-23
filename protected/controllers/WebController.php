<?php

class WebController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/admin';


	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
			'postOnly + contacto', // we only allow deletion via POST requesty
			'postOnly + testAjax', // we only allow deletion via POST requesty
			// 'postOnly + upload', // we only allow deletion via POST requesty
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
				'actions'=>array('index','view',"get","contacto","testAjax","checkFeeds","checkClima","getLocalidades","getVeterinaria","getVeterinariaByProvincia","setClima"),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
			'captcha'=>array(
			   'class'=>'CCaptchaAction',
			   'backColor'=>0xFFFFFF,
			  ),
		);
	}

	public function actionGet($data,$id=""){

		$model="";

		$model=$id;


		//echo Pais::model()->findByPk($_SESSION['pais'])->nombre;




			//$this->renderPartial("//static/layout");
			$this->renderPartial("//static/".$data,$model);
			//$this->renderPartial("//static/footer");

	}

	public function actionContacto(){
		/*foreach($_POST as $key => $value){
			echo $key;
			echo "<br>";
			echo $value;
			echo "<br><br>";
		}*/

		Yii::import('application.extensions.phpmailer.JPhpMailer');
		$mail = new JPhpMailer;
		$mail->SetFrom('test@testni54.com', "Contacto de ". $_POST["nombre"]." ".$_POST["apellido"]);
		$mail->AddReplyTo($_POST["email"], $_POST["nombre"]." ".$_POST["apellido"]);
		$mail->Subject = 'Contacto desde la web de Biogenesis Bago';
		$mail->AltBody = 'Para ver este mensaje, utilice un cliente web con capacidad de renderear html.';
		$mensaje="";
		foreach($_POST as $key=>$value){
			$mensaje.="<strong>".$key.":</strong> ".$value."<br>";
		}
		$mail->MsgHTML($mensaje);
		$mail->AddAddress('fran@ni54.com', 'Fran');
		$mail->Send();
		echo "enviado";


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

	public function actionCheckFeeds(){
		echo FeedNoticias::model()->CheckFeed();
	}

	public function actionCheckClima(){
		if($mapaClima= ClimaMapas::model()->CheckFeed()||$mapaHidrica= HidricaMapa::model()->CheckFeed()){
			return true;
		}
		return false;
		//$clima= FeedNoticias::model()->CheckFeed();
		;

	}

	public function actionGetLocalidades($id){

		if($id==-1){
			$localidades = Ciudad::model()->findAll();
		}else{
			$localidades = Ciudad::model()->findAll(array("condition"=>"provincia = ".$id));
		}
		if(count($localidades)==0||!$localidades){
			echo "-1";
			return;
		}else if(count($localidades)==1){
			echo "1";
			return;
		}
		?>
		 <option value="localidad" selected disabled>Seleccione localidad</option>
		<?php
		foreach($localidades as $localidad){
		?>
			<option value="<?php echo $localidad->id; ?>"><?php echo $localidad->nombre; ?></option>
		<?php
		}
	}

	public function actionSetClima($id){
		$_SESSION["localidad"]= $id;
		echo 1;
	}

	public function actionGetVeterinaria($id){
		$ciudad= Ciudad::model()->findByPk($id);
		$Criteria = new CDbCriteria();
		$Criteria->condition = "ciudad = '".$ciudad->nombre."'";

		$veterinarias= Veterinarias::model()->findAll($Criteria);
		if($veterinarias){
			foreach($veterinarias as $veterinaria){
		?>
			<h1><?php echo $veterinaria->cuenta; ?></h1>
		 	 <p><?php echo $veterinaria->provincia; ?>, <?php echo $veterinaria->ciudad; ?></p>
		 	 <p><?php echo $veterinaria->direccion; ?> <?php echo $veterinaria->altura; ?></p>
		 	 <p><?php echo $veterinaria->telefono; ?></p>
		<?php
			}
		}
	}

	public function actionGetVeterinariaByProvincia($id){
		//buscar id de provincia, recorrer todas las localidades e imprimir data de veterinarias
		$localidades = Ciudad::model()->findAll(array("condition"=>"provincia = ".$id));
		foreach($localidades as $localidad){
			$Criteria = new CDbCriteria();
			$Criteria->condition = "ciudad = '".$localidad->nombre."'";

			$veterinarias= Veterinarias::model()->findAll($Criteria);
			if($veterinarias){
			foreach($veterinarias as $veterinaria){
			?>
				<h1><?php echo $veterinaria->cuenta; ?></h1>
				 <p><?php echo $veterinaria->provincia; ?>, <?php echo $veterinaria->ciudad; ?></p>
				 <p><?php echo $veterinaria->direccion; ?> <?php echo $veterinaria->altura; ?></p>
				 <p><?php echo $veterinaria->telefono; ?></p>
			<?php
			}
		}
		}
	}

// 	public function actionUpload(){
//
//
// 			// $_POST["idPantalla"];
// 			$idPantalla=$_POST["idPantalla"];
//
//
// 			if($idPantalla==null) exit("Error - No fue selecionada ninguna pantalla ".$idPantalla);
//
//
// 			// echo $idProjecto[1];
//
//
//
//
// 			$numeroImage= ImgPantalla::model()->findByAttributes(array("id_pantalla"=>$idPantalla),array("order"=>"id DESC"));
// 			$numeroImage= ++$numeroImage->img;
//
// 			$projecto=Pantalla::model()->findAllByAttributes(array("id_pantalla"=>$idPantalla));
//
// 			$idProjecto=$projecto["0"]["id_project"];
//
//
//
// 			if (isset($_FILES['file'])) {
//
// 				$targetPath = "img/";
//
// 				//if(isset($_POST["nombre"])){
// 				$nombre=$idProjecto."-".$numeroImage;
//
// 					$formato="";
// 					if(strpos($_FILES['file']['name'],".png")>0){
// 						$formato= ".png";
// 					}
// 					if(strpos($_FILES['file']['name'],".jpg")>0){
// 						$formato= ".jpg";
// 					}
// 					if(strpos($_FILES['file']['name'],".jpeg")>0){
// 						$formato= ".jpeg";
// 					}
// 					$targetFile =  $targetPath.$nombre.$formato;
// 				/*}else{
// 					$targetFile =  $targetPath.$_FILES['file']['name'];
// 				}*/
// 				//echo $targetFile;
// 				//exit();
//
// 				move_uploaded_file($_FILES['file']['tmp_name'],$targetFile);
// 				//echo $targetFile;
// 				$imgPantalla= new ImgPantalla();
// 				$imgPantalla->id_pantalla= $idPantalla;
// 				$imgPantalla->img= $numeroImage;
// 				$imgPantalla->save();
// 				echo $nombre.$formato;
// 			}else{
// 				echo "0";
// 			}
//
// 	}
//
}
