<?php
// $data="1";
$Criteria = new CDbCriteria();
				// $Criteria->condition = "id_project = '".$data."'";
$project= Project::model()->findAll($Criteria);

?>
<!DOCTYPE HTML>
<html lang="en-US">

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
	<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/phaser.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/script.js "></script>
		<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/estrellas.js "></script>
		<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/tipeo.js "></script>



</head>


<body  id="index">
	<canvas id="canvasFugaz" style=" position:absolute;height: 335vh; width:100%; z-index:-2"></canvas>

	<canvas id="canvas"style=""></canvas>

	<div id="canvasNave" class="canvasNave" style="position:absolute; top:0; left:0; width:100%; height:100%">

	</div>

	<!-- <a href="" class="glyphicon glyphicon-menu-up desplazamiento" style="top:0;"></a> -->

	<a id="link" name="#contacto" href="#" class="glyphicon glyphicon-minus desplazamiento" style="top: 49%"; ></a>
	<a id="link" name="#portfolio" href="#" class="glyphicon glyphicon-minus desplazamiento" style="top: 50%;"></a>
	<a id="link" name="#clientes" href="#" class="glyphicon glyphicon-minus desplazamiento" style="top: 51%;"></a>
	<a id="link" name="#lo-que-hacemos" href="#" class="glyphicon glyphicon-minus desplazamiento" style=" top: 52%;"></a>
	<a id="link" name="#about" href="#" class="glyphicon glyphicon-minus desplazamiento" style=" top: 53%;"></a>



	<!-- <a href="" class="glyphicon glyphicon-menu-down desplazamiento" style=""></a> -->

<section id="contacto" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " >
 	<img id="main-logo" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/cohete_blanco.svg" alt="">
	<h1 id="title-web">NitroInteractivo</h1>
	<p id="subtitle">al infinito y mas allá...</p>

	<div class="wave">

	</div>

	<h2 id="pregunta">¿EN QUE TE PODEMOS AYUDAR?</h2>

	<p id="lema" >Somos un equipo interdisciplinario compuesto por profesionales con más <br> de 10 años de experiencia en el mercado nacional e internacional.</p>

	<form id="formulario" action="index.html" method="post">

		<input type="text" name="nombre" value="" placeholder="Nombre de la empresa"> <br>
		<input type="text" name="correo" value="" placeholder="Correo"><br>
		<textarea name="mensaje" placeholder="Escriba su consulta o pedido de presupuesto"></textarea><br>

			<button id="enviar" type="button" name="button">Enviar</button>
	</form>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 iconos-container">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	<img class="iconos" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/mail.svg" alt="">contacto@ni54.com
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	<img class="iconos" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/tel.svg" alt="">47823813
	</div>
</div>


</section>

<section id="portfolio" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seccion" >

	<h3 id="title-section">ESTACION PORTFOLIO</h3>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slider-porfolio">


			<!-- <div class="arrow-bolita" direction=-1><</div> -->

			<div id="bolitaMessure" class="bolita-display hidden-xs left-covered arrow-bolita"  direction=-1 >

				<div class="b-carousel c-covered">

					<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/projects/<?php echo $project[count($project)-1]["id_project"]; ?>.png" />

					<?php for( $i=0; $i<count($project)-1; $i++){ ?>

						<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/projects/<?php echo $project[$i]["id_project"]; ?>.png" />

					<?php	} ?>

				</div>

				<div  class="prev-label"style="position:fixed; display:block; z-index:5"> <p>Anterior  <br><?php foreach($project as $p){ ?><span class="left-remain"><?php echo $p["nombre"]; ?></span><?php	} ?></p> </div>


			</div>
			<div class="bolita-display center-covered">

				<div class="b-carousel">

					<?php foreach($project as $p){ ?>

							<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/proyecto/<?php echo $p["id_project"]; ?>"><img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/projects/<?php echo $p["id_project"]; ?>.png" /></a>

					<?php	} ?>

				</div>



			</div>

			<?php foreach($project as $p){ ?>

				<p id="<?php echo $p["id_project"]; ?>" class="nombre-proj" style="width:300px; position:absolute; left: 0;  right: 0; margin:auto"><?php echo $p["nombre"]; ?><br><span><?php echo $p["tipo"]; ?></span></p>

			<?php	} ?>

			<div class="bolita-display hidden-xs right-covered arrow-bolita" direction=1>

				<div class="b-carousel c-covered ">
					<?php for( $i=1; $i<count($project); $i++){ ?>

					<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/projects/<?php echo $project[$i]["id_project"]; ?>.png" />

					<?php	} ?>

						<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/projects/<?php echo $project[0]["id_project"]; ?>.png" />
				</div>


				<div  class="next-label"  style="position:fixed; display:block; z-index:5"> <p>Proximo  <br><?php foreach($project as $p){ ?><span class="right-remain"><?php echo $p["nombre"]; ?></span><?php	} ?></p> </div>

			</div>


			<!-- <div class="arrow-bolita" direction=1>></div> -->



		</div>

		<div class=" hidden-lg hidden-sm hidden-md">
			<p class="arrow-bolita" direction=-1 style=" position:absolute; left:4em; bottom:4em; " ><span class="arrow-bolita glyphicon glyphicon-menu-left"   aria-hidden="true" style="font-size:3em; color: white;color:#00d6bd"></span></p>
			<p class="arrow-bolita" direction=1 style=" position:absolute; right:4em; bottom:4em; " ><span class="glyphicon glyphicon-menu-right"   aria-hidden="true" style="font-size:3em; color: white;color:#00d6bd" ></span></p>

		</div>

</section>

<!-- <section id="main-lema" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
</section> -->

<section id="clientes" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >

	<h1 id="fraseFlotante" class="" style="">ALGUNA FRASE QUE DESCRIBA NUESTRA MANERA DE TRABAJAR</h1>


	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 partners clientes" >
		<h3 id="title-section">PARTNERS</h3>

		<div class="logo-clientes">
			<img class="col-lg-1 col-md-2 col-sm-3 col-xs-3 col-lg-offset-5 col-md-offset-3" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/cac.png" alt="">
			<img class="col-lg-1 col-md-2 col-sm-3 col-xs-3" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/uba.png" alt="">
			<img class="col-lg-1 col-md-2 col-sm-3 col-xs-3" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/abuelas.png" alt="">

		</div>


	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 separador">
		<div class="separador-inner"></div>
	</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clientes" >
	<h3 id="title-section">YA NOS CONOCEN</h3>

	<div class="logo-clientes general-container">
		<img class="col-lg-1 col-md-1 col-sm-3 col-xs-3 col-lg-offset-4 col-md-offset-4" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/barrick.png" alt="">
		<img class="col-lg-1 col-md-1 col-sm-3 col-xs-3" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/bb.png" alt="">
		<img class="col-lg-1 col-md-1 col-sm-3 col-xs-3" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/biomarin.png" alt="">
		<img class="col-lg-1 col-md-1 col-sm-3 col-xs-3" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/bocafan.png" alt="">
		<img class="col-lg-1 col-md-1 col-sm-3 col-xs-3" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/easy.png" alt="">

		<!-- <img class="col-lg-1 col-md-1 col-sm-3 col-xs-3" src="img/cac.png" alt="">
		<img class="col-lg-1 col-md-1 col-sm-3 col-xs-3" src="img/easy.png" alt=""> -->
	</div>


	<div class="logo-clientes clientes-3 general-container">
		<img class="col-lg-1 col-md-1 col-sm-3 col-xs-3 col-lg-offset-4 col-md-offset-4" src="img/tang.png" alt="">
		<img class="col-lg-1 col-md-1 col-sm-3 col-xs-3" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/visa.png" alt="">
		<img class="col-lg-1 col-md-1 col-sm-3 col-xs-3" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/ymad.png" alt="">
		<img class="col-lg-1 col-md-1 col-sm-3 col-xs-3" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/zuko.png" alt="">
				<img class="col-lg-1 col-md-1 col-sm-3 col-xs-3" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/mattel.png" alt="">
	</div>


	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 dot-nav-slider">
	<ul>
		<li class="nav-dots">

				<label for="1" class="nav-dot" ></label>
				<label for="2" class="nav-dot" ></label>
				<!-- <label for="3" class="nav-dot" ></label> -->

		</li>
</ul>
</div>

</div>

</section>

<section id="lo-que-hacemos" class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
<div class="about col-lg-12 col-sm-12 col-md-12 col-xs-12">
	<!-- <canvas id="canvasSky"></canvas> -->

<div class="circle-container col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="circle-lema">
			<p>Lo que nos <br> gusta hacer</p>
		</div>
</div>







	<div class="planetas col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6" hid="1"> <img class="floating floating-time-1" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/planetitas-01.svg" alt=""><p>Contenido <br>Interactivos</p></div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6" hid="1"> <img class="floating floating-time-2" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/planetitas-05.svg" alt=""><p>Diseño y <br> comunicación</p></div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6  float-left" hid="1"> <img class="floating floating-time-3"  src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/planetitas-02.svg" alt=""><p>Edutainment<br>Gamification</p></div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6  float-right" hid="1"> <img class="floating floating-time-1" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/planetitas-04.svg" alt=""><p>Videojuegos y <br>aplicaciones</p></div>
		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" hid="1"> <img class="floating floating-time-3"  src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/planetitas-03.svg" alt=""><p>Websites y <br>mobile apps.</p> </div>

	</div>

	<div id="about"class="col-lg-12 col-sm-12 col-md-12 col-xs-12 about-inner seccion">
		<h3 id="dinamic-content">NitroInteractivo </h3>

		<h1>LANZÁ</h1>
		<h2>Tus ideas con nosotros</h2>

		<p>Somos un estudio creativo de comunicación. Fotografía, Cinematografía, <br>
		Diseño Gráfico, Ilustración, 3D, Desarrollo Web y APP.</p>
	</div>

</div>



</section>




<img style="max-width:100vw;" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/suelo.png" alt="">

</body>



	<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/fugaz.js "></script>

<!-- <script type="text/javascript" src="js/cohete.js"></script> -->

<script type="text/javascript">

$(document).on("ready",function(){

window.scrollTo(30,document.body.scrollHeight);

})





</script>


<script>

var index=0;
var indexL=-1;
var indexR=1
var bTransition=false;
$("document").ready(function(){

items = $('.nombre-proj');
itemsLeft = $('.left-remain');
itemsRight = $('.right-remain');

items.css("display","none");
items.eq(index).css("display", "block");

itemsLeft.css("display","none");
itemsLeft.eq(indexL).css("display", "block");

itemsRight.css("display","none");
itemsRight.eq(indexR).css("display", "block");

var frameWidth= $("#bolitaMessure .b-carousel img").width();
var length=$("#bolitaMessure .b-carousel img").length;
console.log(frameWidth*length);
var displayWidth=frameWidth*length;
$(".b-carousel").css("width",displayWidth+"px");

});


$("body").on("click",".arrow-bolita",function(){
if(bTransition) return;
	var left= parseInt($(".b-carousel").css("left"));
	var frameWidth= $("#bolitaMessure .b-carousel img").width();
	var length=$("#bolitaMessure .b-carousel img").length;

	if($(this).attr("direction")>0){
		if(length*-frameWidth+frameWidth<left){
			$(".b-carousel").css("left","-="+frameWidth);
			bTransition=true;
		}


		if(index<items.length-1){
			index++;
			indexR++;
			indexL++;
			var item = $('.nombre-proj').eq(index);
			var itemL= $('.left-remain').eq(indexL);
			var itemR= $('.right-remain').eq(indexR);
			items.hide();
			itemsLeft.hide();
			itemsRight.hide();
			item.fadeIn("slow");
			itemL.fadeIn("slow");
			itemR.fadeIn("slow");

		}

	}else{
		if(left<0){
			$(".b-carousel").css("left","+="+frameWidth);
			bTransition=true;
		}

		if(index>0){
			index--;
			indexR--;
			indexL--;
			var item = $('.nombre-proj').eq(index);
			var itemL= $('.left-remain').eq(indexL);
			var itemR= $('.right-remain').eq(indexR);
			items.hide();
			itemsLeft.hide();
			itemsRight.hide();
			item.fadeIn("slow");
			itemL.fadeIn("slow");
			itemR.fadeIn("slow");

		}

	}

});

$(".b-carousel").on('transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd',
    function() {
         bTransition=false;
    });
</script>



</html>
