<?php
// $data=22;

$maxprojects= Project::model()->findAll(array('order'=>'id_project DESC'));

$mxprojects=$maxprojects[0]['id_project'];

$Criteria = new CDbCriteria();

$Criteria->condition = "id_project = '".$data."'";
$project= Project::model()->findByPk($data);

$pantalla= Pantalla::model()->findAll($Criteria);
//
// while($project==null){
//
// 	$Criteria->condition = "id_project = '".$data."'";
// 	$project= Project::model()->findByPk($data);
// 	$data++;
// }





$next=$data+1;
$prev=$data-1;


if($data!=$mxprojects){

	$nextproject= Project::model()->findByPk($next);

	while($nextproject==NULL && $nextproject< $mxprojects){
		$next++;
		$nextproject= Project::model()->findByPk($next);

	}

}else{
	$next=1;
	$nextproject= Project::model()->findByPk(1);
}


if($data!=1){

	$prevproject= Project::model()->findByPk($prev);

	while($prevproject==NULL && $prevproject>0){
		$prev--;
		$prevproject= Project::model()->findByPk($next);
	}

}else{
	$prev=$mxprojects;
	$prevproject= Project::model()->findByPk($mxprojects);
}







?>
<!DOCTYPE html>
<html>
  <head>

    	<!-- Meta -->
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- ICON -->
    	<link href="<?php echo Yii::app()->getBaseUrl(true); ?>/img/fav-icon-nitro-01.png" rel="shortcut icon" />

    	<!-- Title -->
    	<title>NI54</title>

    	<!-- BOOTSTRAP CSS -->
    	<link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/bootstrap.min.css" rel="stylesheet">

    	<!-- CSS -->
    	<link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/style.css" rel="stylesheet">
    	<link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/xl.css" rel="stylesheet">
    	<link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/lg.css" rel="stylesheet">
    	<link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/md.css" rel="stylesheet">
    	<link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/sm.css" rel="stylesheet">
    	<link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/xs.css" rel="stylesheet">
    	<link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/sp.css" rel="stylesheet">

    	<!-- BOOTSTRAP JS -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/tipeo.js "></script>
      <script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/script.js "></script>
    	<!-- <script type="text/javascript" src="js/phaser.js"></script>

    		<script type="text/javascript" src="js/estrellas.js "></script>
    		 -->



  </head>
  <body>

    <section id="descripcion" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seccion">

			<!-- <a class="hidden-lg"  href="<?php echo Yii::app()->getBaseUrl(true); ?>/proyecto/<?php echo $prev; ?>"><span class="glyphicon glyphicon-menu-left"></span></a>
			<a class="hidden-lg"  href="<?php echo Yii::app()->getBaseUrl(true); ?>/proyecto/<?php echo $next; ?>"><span class="glyphicon glyphicon-menu-right"></span></a> -->

    <a id="prev-link"  class="hidden-xs hidden-sm hidde-md" href="<?php echo Yii::app()->getBaseUrl(true); ?>/proyecto/<?php echo $prev; ?>">
			<div id="prev-port" class="col-lg-3 col-md-3 col-sm-3 col-xs-1 prev-post">
				<div  class="prev-label" style="position:fixed; "> <p style="color: #7268b7;">
					<span>Anterior </span><br><?php echo $prevproject["nombre"]; ?></p>
				</div>
			</div>
		</a>

		<a class="hidden-xs hidden-sm hidden-md" href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/cohete.svg" id="go-back" alt=""></a>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-to-parent">

				<a class="hidden-lg" href="<?php echo Yii::app()->getBaseUrl(true); ?>/index.php"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/cohete.svg" id="go-back" alt=""></a>


        <h1>¿De que se trata?</h1>

        <h3 style="text-transform: uppercase">CLIENTE: <?php echo $project["cliente"]; ?></h3>


          <p><?php echo $project["descripcion"]; ?></p>



      </div>

    <a id="next-link" class="hidden-xs hidden-sm hidde-md"  href="<?php echo Yii::app()->getBaseUrl(true); ?>/proyecto/<?php echo $next; ?>">
			<div id="next-port" class="col-lg-3 col-md-3 col-sm-3 col-xs-1 next-post">
				<div class="next-label" style="position:fixed;">
					<p style="color: #7268b7;"><span>Siguiente</span><br><?php echo $nextproject["nombre"]; ?>
					</p>
				</div>
			</div>
		</a>


        <!-- <div class="border-white">  </div> -->
    </section>


    <div class="border-white col-lg-12 col-md-12 col-sm-12 col-xs-12">  </div>
<?php foreach($pantalla as $pt){ ?>

        <section id="port-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seccion" style="background-color:<?php echo $pt["color"]; ?>">

	  <?php      if($pt["modalidad"]!=null){?>

              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 center-to-parent left-side">
                <img  src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/icono-app.svg" alt="">  <?php echo $pt["modalidad"]; ?>
                <p class="tipo-trabajo"><?php echo $pt["trabajo"]; ?></p>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center-side port">
                <img class="center-to-parent" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/<?php echo $data."-".$pt["img"]; ?>.png" alt="">
              </div>

              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 right-side port"></div>


    <?php }else{
      // $count=count();


			 $imagen=ImgPantalla::model()->findAllByAttributes(array("id_pantalla"=>$pt->id_pantalla));

			 $colums=count($imagen);

			 $colums=12/$colums;

				foreach($imagen as $img){
					//if($img["id_pantalla"]==$pt["id_pantalla"]){ ?>

		       <div class="col-lg-<?php echo $colums; ?> col-md-<?php echo $colums; ?> col-sm-<?php echo $colums; ?> col-xs-12 port" >
		         <img class="center-to-parent" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/<?php echo $data."-".$img["img"]; ?>.png" alt="">
		       </div>



      	<?php
      // $count++;
      // $colums=12/$count;
						}
				}
?>
</section>
<div class="border-white col-lg-12 col-md-12 col-sm-12 col-xs-12">  </div>
<?php
    }?>

		<img id="go-up" name="#descripcion" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/flecha_arriba.svg" alt="">
		<img class="effect-1 effect" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/flecha_abajo.svg" alt="">
		<img class="effect-2 effect" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/flecha_abajo.svg" alt="">

  </body>

	<script>
	$( document).scroll(function() {
		if(isElementInViewport($('#port-1')) ) {

				$(".effect").fadeOut("slow");
		}

		if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {

			$("#go-up").fadeIn("slow");
		}

		if(isElementInViewport($('section#descripcion')) ) {

				$("#go-up").fadeOut("slow");
		}

	});

	$(document).on("ready",function(){

		var numItems = $('section').length;

		console.log(numItems);

		if(numItems>1){
			$(".effect").fadeIn();
		}

	});

	</script>

</html>
