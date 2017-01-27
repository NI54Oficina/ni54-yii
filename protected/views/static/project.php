<?php
// $data="1";
$Criteria = new CDbCriteria();
				// $Criteria->condition = "id_project = '".$data."'";
$project= Project::model()->findAll($Criteria);

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

        <p>At Geckoboard, we're great believers in the Lean methodology. This has lead us to attempt to create a new movement in companies that are truly driven by data. I was keen to coin a 'one word' approach to our manifesto, which is what lead me to pitch 'Informed', a word that can easily be attached to various Business operations to help market our ideas, the Informed Business, informed Sales, etc. </p>

      </div>

    <a id="next-link"  href="">  <div id="next-port" class="col-lg-3 col-md-3 col-sm-3 col-xs-1 next-post">  <div class="next-label" style="position:fixed;"><p><span>Siguiente</span><br>Nombre del proyecto </p></div>  </div></a>


        <!-- <div class="border-white">  </div> -->
    </section>
    <div class="border-white col-lg-12 col-md-12 col-sm-12 col-xs-12">  </div>
    <section id="port-1" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seccion">


        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 center-to-parent left-side">
          <img src="img/icono-app.svg" alt="">  APP
          <p class="tipo-trabajo">Diseño + Programacion</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 center-side port">
          <img src="img/vdm-bago-01.png" alt="">
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 right-side port"></div>

    </section>
    <div class="border-white col-lg-12 col-md-12 col-sm-12 col-xs-12">  </div>

    <section id="port-2" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seccion">

    </section>

    <div class="border-white col-lg-12 col-md-12 col-sm-12 col-xs-12">  </div>

    <section id="port-3" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seccion">

    </section>

    <div class="border-white col-lg-12 col-md-12 col-sm-12 col-xs-12">  </div>

    <section id="port-4" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seccion">

    </section>


  </body>

  <script>



  </script>
</html>
