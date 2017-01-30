<?php
$data="8";
$Criteria = new CDbCriteria();
				$Criteria->condition = "id_project = '".$data."'";
$project= Project::model()->findByPk(8);
$pantalla= Pantalla::model()->findAll($Criteria);

?>
<!DOCTYPE html>
<html>
  <head>

    	<!-- Meta -->
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- ICON -->
    	<link href="img/fav-icon-nitro-01.png" rel="shortcut icon" />

    	<!-- Title -->
    	<title>NI54</title>

    	<!-- BOOTSTRAP CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">

    	<!-- CSS -->
    	<link href="css/style.css" rel="stylesheet">
    	<link href="css/xl.css" rel="stylesheet">
    	<link href="css/lg.css" rel="stylesheet">
    	<link href="css/md.css" rel="stylesheet">
    	<link href="css/sm.css" rel="stylesheet">
    	<link href="css/xs.css" rel="stylesheet">
    	<link href="css/sp.css" rel="stylesheet">

    	<!-- BOOTSTRAP JS -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/tipeo.js "></script>
      <script type="text/javascript" src="js/script.js "></script>
    	<!-- <script type="text/javascript" src="js/phaser.js"></script>

    		<script type="text/javascript" src="js/estrellas.js "></script>
    		 -->



  </head>
  <body>

    <section id="descripcion" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seccion">

    <a id="prev-link" href="">   <div id="prev-port" class="col-lg-3 col-md-3 col-sm-3 col-xs-1 prev-post">   <div  class="prev-label" style="position:fixed; "> <p><span>Anterior </span><br>Nombre del proyecto</p> </div> </div></a>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10 center-to-parent">

        <h1>¿De que se trata?</h1>

        <h3>CLIENTE: BIOGÉNESIS BAGÓ</h3>


          <p><?php echo $project["descripcion"]; ?></p>



      </div>

    <a id="next-link"  href="">  <div id="next-port" class="col-lg-3 col-md-3 col-sm-3 col-xs-1 next-post">  <div class="next-label" style="position:fixed;"><p><span>Siguiente</span><br>Nombre del proyecto </p></div>  </div></a>


        <!-- <div class="border-white">  </div> -->
    </section>
    <div class="border-white col-lg-12 col-md-12 col-sm-12 col-xs-12">  </div>
<?php foreach($pantalla as $pt){ ?>

        <section id="port-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seccion" style="background-color:<?php echo $pt["color"]; ?>">

	  <?php      if($pt["modalidad"]!=null){?>

              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 center-to-parent left-side">
                <img src="img/icono-app.svg" alt="">  <?php echo $pt["modalidad"]; ?>
                <p class="tipo-trabajo"><?php echo $pt["trabajo"]; ?></p>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center-side port">
                <img src="img/projects/<?php echo $data."-".$pt["img"]; ?>.png" alt="">
              </div>

              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 right-side port"></div>


    <?php }else{
      // $count=count();


			 $imagen=ImgPantalla::model()->findAllByAttributes(array("id_pantalla"=>$pt->id_pantalla));

			 $colums=count($imagen);

			 $colums=12/$colums;

				foreach($imagen as $img){
					//if($img["id_pantalla"]==$pt["id_pantalla"]){ ?>

		       <div class="col-lg-<?php echo $colums; ?> col-md-<?php echo $colums; ?> col-sm-<?php echo $colums; ?> col-xs-12 port">
		         <img src="img/projects/<?php echo $data."-".$img["img"]; ?>.png" alt="">
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

  </body>

</html>