<?php
// $data="1";
$Criteria = new CDbCriteria();
				// $Criteria->condition = "id_project = '".$data."'";
$project= Project::model()->findAll($Criteria);
$partners= Partners::model()->findAll($Criteria);
$clientes= Clientes::model()->findAll($Criteria);

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
	<link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/flickity.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->getBaseUrl(true); ?>/css/lightslider.css" rel="stylesheet">
	<!-- BOOTSTRAP JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/phaser.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/script.js "></script>
	<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/estrellas.js "></script>
	<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/tipeo.js "></script>
	<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/flickity.pkgd.js "></script>
	<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/lightslider.js "></script>
	<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/hover_fugaz.js "></script>





</head>


<body  id="index">

	<img style="position:absolute; left:1000; bottom:0; z-index:9;     width: 60px;" id="nave" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/cohete.svg" alt="">
	<canvas id="canvasFugaz" style=" position:fixed;height:100vh; 100vw; z-index:-2"></canvas>

	<canvas id="canvas"style=""></canvas>

	<!-- <div id="canvasNave" class="canvasNave" style="position:absolute; top:0; left:0; width:100vw; display:none">

	</div> -->

	<!-- <a href="" class="glyphicon glyphicon-menu-up desplazamiento" style="top:0;"></a> -->

	<a id="link" name="#contacto" href="#" class="glyphicon glyphicon-minus desplazamiento" style="top: 48%"; ></a>
	<a id="link" name="#portfolio" href="#" class="glyphicon glyphicon-minus desplazamiento" style="top: 50%;"></a>
	<a id="link" name="#clientes" href="#" class="glyphicon glyphicon-minus desplazamiento" style="top: 52%;"></a>
	<a id="link" name="#lo-que-hacemos" href="#" class="glyphicon glyphicon-minus desplazamiento" style=" top: 54%;"></a>
	<a id="link" name="#about" href="#" class="glyphicon glyphicon-minus desplazamiento" style=" top: 56%;"></a>



	<!-- <a href="" class="glyphicon glyphicon-menu-down desplazamiento" style=""></a> -->

<section id="contacto" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " >
	<div class="hidden-xs hidden-md hidden-sm" id="step-1"></div>

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
			<img class="iconos" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/tel.svg" alt=""><br class="hidden-lg hidden-sm hidden-md">4523.3506
			</div>
		</div>


</section>

<section id="portfolio" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 seccion" >

	<div class="m hidden-xs hidden-md hidden-sm" id="step-2"></div>

	<h3 id="title-section">ESTACION PORTFOLIO</h3>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slider-porfolio">

			<div class="circle-animated"></div>


			<!-- <div class="arrow-bolita" direction=-1><</div> -->

			<div id="bolitaMessure" class="bolita-display hidden-xs hidden-sm left-covered arrow-bolita"  direction=-1 >

				<div class="b-carousel c-covered">

					<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/<?php echo $project[count($project)-1]["id_project"]; ?>.png" />

					<?php for( $i=0; $i<count($project)-1; $i++){ ?>

						<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/<?php echo $project[$i]["id_project"]; ?>.png" />

					<?php	} ?>

				</div>



			</div>
			<div class="bolita-display center-covered">



				<div class="b-carousel">



					<?php foreach($project as $p){ ?>

							<a href="<?php echo Yii::app()->getBaseUrl(true); ?>/proyecto/<?php echo $p["id_project"]; ?>"><img clas="hover-b" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/<?php echo $p["id_project"]; ?>.png" /></a>

					<?php	} ?>

				</div>



			</div>


			<!-- <?php foreach($project as $p){ ?>

				<p id="<?php echo $p["id_project"]; ?>" class="nombre-proj hidden-xs hidden-sm" style="width:300px; position:absolute; left: 0;  right: 0; margin:auto"><span><?php echo $p["nombre"]; ?></span> <br>	<?php echo $p["tipo"]; ?></p>

			<?php	} ?> -->

			<div class="bolita-display hidden-xs hidden-sm right-covered arrow-bolita" direction=1>

				<div class="b-carousel c-covered ">
					<?php for( $i=1; $i<count($project); $i++){ ?>

					<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/<?php echo $project[$i]["id_project"]; ?>.png" />

					<?php	} ?>

						<img src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/<?php echo $project[0]["id_project"]; ?>.png" />
				</div>





			</div>






			<!-- <div class="arrow-bolita" direction=1>></div> -->



		</div>

		<div class="">
			<p class="arrow-bolita  hidden-lg hidden-md flecha-port" direction=-1 style="left:2em;" ><span class="arrow-bolita glyphicon glyphicon-menu-left"   aria-hidden="true" style="font-size:3em; color: white;color:#00d6bd"></span></p>

			<?php foreach($project as $p){ ?>

				<p id="<?php echo $p["id_project"]; ?>" class="nombre-proj" style=""><span><?php echo $p["nombre"]; ?></span> <br>	<?php echo $p["tipo"]; ?></p>

			<?php	} ?>

			<p class="arrow-bolita  hidden-lg hidden-md flecha-port" direction=1 style="right:2em;" ><span class="glyphicon glyphicon-menu-right"   aria-hidden="true" style="font-size:3em; color: white;color:#00d6bd" ></span></p>

		</div>



		<div id="test-prev-label" class="arrow-bolita hidden-xs hidden-sm hidden-md" direction=-1 style="position:absolute; left:0; height:400px;width:35vw; z-index:5;top:0">

			<div  class="prev-label label-test hidden-xs"style="position:fixed;"> <p>Anterior  <br><?php foreach($project as $p){ ?><span class="left-remain"><?php echo $p["nombre"]; ?></span><?php	} ?></p> </div>

		</div>

		<div id="test-next-label" class="arrow-bolita hidden-xs hidden-sm hidden-md" direction=1 style="position:absolute;top:0;right:0; height:400px; width:35vw;z-index:5">

			<div  class="next-label label-test"  style="position:fixed; z-index:5"> <p>Proximo  <br><?php foreach($project as $p){ ?><span class="right-remain"><?php echo $p["nombre"]; ?></span><?php	} ?></p> </div>

		</div>

</section>

<section id="clientes" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >


	<!-- <h1 id="fraseFlotante" class="" style="">ALGUNA FRASE QUE DESCRIBA NUESTRA MANERA DE TRABAJAR</h1> -->


	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 partners clientes" >
		<h3 id="title-section">PARTNERS</h3>

		<div id="lightSlider-2" class="logo-clientes clientes-0 carousel-0" style="height:50px;">
					<?php foreach ($partners as $part) {?>



								<img class="" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/p-<?php echo $part["id"] ?>.png" alt="<?php echo $part["img"] ?>">


					<?php } ?>
			</div>

	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 separador">
		<div class="separador-inner"></div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clientes" >
		<h3 id="title-section">YA NOS CONOCEN</h3>


		<!--  -->
	<!--
		<div id="carousel">
			<div class="btn-bar">
				<div id="buttons"><a id="prev" href="#"><</a><a id="next" href="#">></a> </div>
			</div>
			<div id="slides">
				<ul> -->

					<!--  -->
<style media="screen">

		.carousel-cell {
		width: 120px;
		height: 100px;
		margin-right: 10px;
		border-radius: 5px;
		}


			.flickity-page-dots{
				display: none;
			}
			.flickity-viewport{
				height: 100px !important;
			}
		/* cell number */
		/*.carousel-cell:before {
		display: block;
		text-align: center;
		content: counter(carousel-cell);
		line-height: 200px;
		font-size: 80px;
		color: white;
		}*/


</style>

						<div id="lightSlider"  class="logo-clientes clientes-<?php echo $i ?> general-container carousel" style="height:50px;"  >



								<?php foreach ($clientes as $clien) {?>


											<img class="" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/c-<?php echo $clien["id"] ?>.png" alt="<?php echo $clien["img"] ?>">


								<?php } ?>




						</div>



<script>


var $carousel = $('.carousel').flickity({
	// wrapAround: true,
});

$carousel.flickity( 'select', 4);


$('.button-group').on( 'click', '.button', function() {
  var index = $(this).index();

  $carousel.flickity( 'select', index);
});


var $carousel1 = $('.carousel-0').flickity();

$carousel1.flickity( 'select', 1	);

$('.button-group').on( 'click', '.button', function() {
  var index = $(this).index();

  $carousel.flickity( 'select', index);
});


// $("#lightSlider").lightSlider({
// 		item: 10,
//
// 		//slideMove: 1,  slidemove will be 1 if loop is true
// 		slideMargin: 0,
//
// 		addClass: '',
// 		mode: "slide",
// 		useCSS: true,
// 		cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
// 		easing: 'linear', //'for jquery animation',////
//
// 		auto: false,
// 		loop: false,
//
// 		keyPress: true,
// 		controls: true,
//
// 		enableTouch:true,
// 		enableDrag:true,
// 		// freeMove:true,
// 		// swipeThreshold: 40,
//
// 		responsive : [{
// 		                breakpoint:800,
// 		                settings: {
// 		                    autoWidth: true,
// 												enableTouch:true,
// 												enableDrag:true,
// 		                  }
// 		            }],
//
// });

//
// $("#lightSlider-2").lightSlider({
// 		item: 3,
// 		// autoWidth: true,
// 		//slideMove: 1,  slidemove will be 1 if loop is true
// 		slideMargin: 20,
//
// 		addClass: '',
// 		mode: "slide",
// 		useCSS: true,
// 		cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
// 		easing: 'linear', //'for jquery animation',////
//
// 		auto: false,
// 		loop: false,
//
// 		keyPress: true,
// 		controls: true,
//
// 		enableTouch:true,
// 		enableDrag:true,
// 		// freeMove:true,
// 		swipeThreshold: 40,
//
// 		responsive : [
//             {
//                 breakpoint:800,
//                 settings: {
//                     item:3,
//                     slideMove:1,
//                     slideMargin:6,
// 										enableTouch:true,
// 										enableDrag:true,
//                   }
//             }
//
//         ]
//
// });

</script>



	</div>

</section>

<section id="lo-que-hacemos" class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="m hidden-xs hidden-md hidden-sm" id="step-4"></div>

		<div class="about col-lg-12 col-sm-12 col-md-12 col-xs-12">
			<!-- <canvas id="canvasSky"></canvas> -->

		<div class="circle-container col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<div class="circle-lema">
					<p>Lo que nos <br> gusta hacer</p>
				</div>
		</div>







			<div class="planetas col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-4 floating-planet" hid="2"> <img class="floating floating-time-1" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/planetitas-01.svg" alt=""><p hid="1" style="bottom:0; position:absolute">Contenido <br>Interactivos</p></div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-4 floating-planet" hid="2"> <img class="floating floating-time-2" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/planetitas-05.svg" alt=""><p hid="1" style="bottom:0;position:absolute">Diseño y <br> comunicación</p></div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-4 floating-planet  float-left" hid="2"> <img class="floating floating-time-3"  src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/planetitas-02.svg" alt=""><p hid="1"class="float-word-1" style="bottom:0;position:absolute">Edutainment<br>Gamification</p></div>
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6 floating-planet float-right" hid="2"> <img class="floating floating-time-1" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/planetitas-04.svg" alt=""><p hid="1" class="float-word-2" style="bottom:0;position:absolute" >Videojuegos y <br>aplicaciones</p></div>
				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-6 floating-planet" hid="2"> <img class="floating floating-time-3"  src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/planetitas-03.svg" alt=""><p hid="1" style="bottom:0;position:absolute">Websites y <br>mobile apps.</p> </div>

			</div>



			<!-- <img class="hidden-xs" style="max-width:100vw;" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/suelo.png" alt=""> -->


		</div>

</section>

<section id="section-init" class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="text-align:center; height:100vh">

<div class="hidden-xs hidden-md hidden-sm" id="step-5"></div>

	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 zona-nubes">
			<img class="animate-nubes" id="nube-1" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/nube-01.svg" alt="">
			<img class="animate-nubes" id="nube-2" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/nube-03.svg" alt="">
			<img class="animate-nubes" id="nube-3" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/nube-02.svg" alt="">

	</div>

	<div id="about"class="col-lg-12 col-sm-12 col-md-12 col-xs-12 about-inner">



		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 center-to-parent">
			<h3 id="dinamic-content">NitroInteractivo </h3>

			<h1>LANZÁ</h1>
			<h2>Tus ideas con nosotros</h2>

			<p>Somos un estudio creativo de comunicación. Fotografía, Cinematografía, <br>
			Diseño Gráfico, Ilustración, 3D, Desarrollo Web y APP.</p>
		</div>

	</div>



	<!-- <img style="width:100%; position:absolute; bottom:0; left:0" class="piso" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/suelo.png" alt=""> -->


<img id="nave-estatica" style="" class="hidden-lg " src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/cohete.svg" alt="">
<img id="nube" style="" src="<?php echo Yii::app()->getBaseUrl(true); ?>/img/nubecita.png" alt="">

</section>






</body>



	<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/fugaz.js "></script>

<!-- <script type="text/javascript" src="js/cohete.js"></script> -->
		<script type="text/javascript" src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/cohete_css.js "></script>

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


<script>


$(document).ready(function () {
    //rotation speed and timer
    var speed = 5000;

    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();



    $('#buttons a').click(function (e) {
        //slide the item

        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }

        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }

        //cancel the link behavior
        return false;

    });

    //if mouse hover, pause the auto rotation, otherwise rotate it
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });


    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }

});
//a simple function to click next link
//a timer will call this function, and the rotation will begin

function rotate() {
    $('#next').click();
}
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>





















</html>
