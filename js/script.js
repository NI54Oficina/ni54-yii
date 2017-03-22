$(window).on("load",function () {


	CenterToParent();
});

$(window).resize(function(){
			CenterToParent();
});

$( document).scroll(function() {
	checkAnimation('fraseFlotante', 'animate-frase-flotante');
	// checkAnimation('main-logo', 'animate-imagen-principal');
});

$(document).on("ready",function(){

	tipear();
	slider();
	SameHeight();
	// centerCircleLema();
	scrollToSector();
	FitBg();


	CenterToParent();

	scrollUp();

});







function SameHeight(){
  //console.log("entra same height");

  var auxId=1;
  while($( "[hid="+auxId+"]" ).length||auxId<20){
    var hidHeight=0;
    //ResetHeight();
    $("[hid="+auxId+"]").each(function(){
      if($(this).innerHeight()>hidHeight){
        hidHeight= $(this).innerHeight();
      }

    });
    //console.log(hidHeight);
    $("[hid="+auxId+"]").css("height",hidHeight+"px");
    auxId++;
  }
}


//****************************************************************************************************************************************************************

function ResetHeight(){
  var id=1;
  while($( "[hid="+id+"]" ).length||id<20){

    $("[hid="+id+"]").css("height","auto");
    id++;
  }
}

function slider(){
	// console.log("entra slider");

var currentIndex = 0,
  items = $('.general-container');
  itemAmt = items.length;
	items.css("display","none");
	items.eq(currentIndex).css("display", "block");
	// multiplicateDotNav(itemAmt);


	$(".nav-dots").each(function(){
		$(this).find(".nav-dot").css("background-color", "#c6c6c6");
		$(this).find(".nav-dot").eq(currentIndex).css("background-color", "#ee7262");
	});

function cycleItems() {

  var item = $('.general-container').eq(currentIndex);

  // items.hide();
	items.animate({left: '-1000px', opacity:"0"});
  item.fadeIn("slow");




}


$('.next-ganado').click(function() {

	currentIndex += 1;
	$(".nav-dots").each(function(){
		$(this).find(".nav-dot").css("background-color", "#c6c6c6");
		$(this).find(".nav-dot").eq(currentIndex).css("background-color", "#ee7262");
	});

  if (currentIndex > itemAmt - 1) {

    currentIndex = 0;
		$(".nav-dots").each(function(){
			$(this).find(".nav-dot").css("background-color", "#c6c6c6");
			$(this).find(".nav-dot").eq(currentIndex).css("background-color", "#ee7262");
		});
  }
  cycleItems();
});

$('.preview-ganado').click(function() {

  currentIndex -= 1;
	$(".nav-dots").each(function(){
		$(this).find(".nav-dot").css("background-color", "#c6c6c6");
		$(this).find(".nav-dot").eq(currentIndex).css("background-color", "#ee7262");
	});

  if (currentIndex < 0) {

    currentIndex = itemAmt - 1;
  }
  cycleItems();
});

$('.nav-dot').click(function() {

	//console.log("entro dot Slider");
	var dotIndex = $(this).index();
	$(".general-container").hide();
	$('.general-container').eq(dotIndex).fadeIn("slow");

	// $(".general-container").animate({left: '-1000px', opacity:"0"});
	// $(".general-container").hide();
	// $('.general-container').eq(dotIndex).animate({left: '1000px', position:"absolute"});
	// $('.general-container').eq(dotIndex).fadeIn("slow");
	// $('.general-container').eq(dotIndex).animate({left: '0px', opacity:'1', position:"absolute"});
	//


	currentIndex = dotIndex;
	$(".nav-dots").each(function(){
		$(this).find(".nav-dot").css("background-color", "#c6c6c6");
		$(this).find(".nav-dot").eq(currentIndex).css("background-color", "#ee7262");
	});
});


}


function sliderAnim(){

    $('.js--triggerAnimation').click(function(e){
      e.preventDefault();
      var anim = $('.js--animations').val();
      testAnim(anim);
    });

    $('.js--animations').change(function(){
      var anim = $(this).val();
      testAnim(anim);
    });



}

function testAnim(x) {

	$('#animationSandbox').removeClass().addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		$(this).removeClass();
	});

};


function centerCircleLema(){
	var circle=parseInt($('.circle-lema').width());
	var container= parseInt($('.circle-container').width());

	var pos = container/2 - circle/2;



	$('.circle-container').css('padding-left', pos+'px');

}

function scrollToSector(){
	$(".desplazamiento").click(function() {

		var toGo=$(this).attr('name');

		var aTag = $(toGo);

		$('html,body').animate({scrollTop: aTag.offset().top},'slow');

	});
}

function scrollUp(){
	$("#go-up").click(function() {

		var toGo=$(this).attr('name');

		var aTag = $(toGo);

		$('html,body').animate({scrollTop: aTag.offset().top},'slow');

	});
}


function tipear(){
 $(function(){
     $("#dinamic-content").typed({
       strings: ["NitroInteractivo"],
       typeSpeed: 100
     });
 });
}




function FitBg(){

 	var dd=$(document).height();


		$('#canvasFugaz').css('height',dd+'px');
}


function isElementInViewport(elem) {
    var $elem = $(elem);

    var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    var elemTop = Math.round( $elem.offset().top );
    var elemBottom = elemTop + $elem.height();

    return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
}


function checkAnimation(idObject, classAnimation) {


    var $elem = $('#'+idObject);



		if($elem.height()==null)return;


    if ($elem.hasClass(classAnimation))return;

    if (isElementInViewport($elem)) {



        $elem.addClass(classAnimation);



    }

}


function CenterToParent(){
	$(".center-to-parent").each(function(){
		$(this).css("margin-top",0);
		$(this).css("margin-bottom",0);
		$(this).css("padding-bottom",0);
		$(this).css("padding-top",0);
		var parent= $(this).parent();
		//console.log($(this).outerHeight());
		if($(this).outerHeight()>0){
			var paddingTop= ($(parent).innerHeight()/2)-($(this).outerHeight()/2);
			$(this).css("padding-top",paddingTop+"px");
		}
	});

	$(".center-to-parent-d").each(function(){
		$(this).css("margin-top",0);
		$(this).css("margin-bottom",0);
		$(this).css("padding-bottom",0);
		$(this).css("padding-top",0);
		var parent= $(this).parent();
		//console.log($(this).outerHeight());
		if($(this).outerHeight()>0){
			var paddingTop= ($(parent).innerHeight()/2)-($(this).outerHeight()/2);
			paddingTop= paddingTop/2;
			$(this).css("padding-top",paddingTop+"px");
		}
	});

	$(".center-to-parent-m").each(function(){
		$(this).css("margin-top",0);
		$(this).css("margin-bottom",0);
		$(this).css("padding-bottom",0);
		$(this).css("padding-top",0);
		var parent= $(this).parent();
		console.log($(this).outerHeight());
		var paddingTop= ($(parent).innerHeight()/2)-($(this).outerHeight()/2);
		$(this).css("display","inline-block");
		$(this).css("position","relative");

		$(this).css("top",'-'+paddingTop+"px");
	});
	$(".center-to-parent-t").each(function(){
		$(this).css("margin-top",0);
		$(this).css("margin-bottom",0);
		$(this).css("padding-bottom",0);
		$(this).css("padding-top",0);
		var parent= $(this).parent();
		console.log($(this).outerHeight());
		var paddingTop= ($(parent).innerHeight()/2)-($(this).outerHeight()/2);
		$(this).css("display","inline-block");
		$(this).css("position","relative");

		$(this).css("top",paddingTop+"px");
	});
}




  $( window ).on( "mousemove", function( event ) {

    var mousePosX = event.clientX;
    var mousePosY = event.clientY;
    var right = $(window).width() - mousePosX;
    var bottom = $(window).height() - mousePosY;

  //	$(".prev-label").css( "pageX: " + event.pageX + ", pageY: " + event.pageY );
    $( ".prev-label" ).css( "bottom", + bottom + "px" );
    $( ".prev-label" ).css( "left", + event.clientX );
  });


  $( window ).on( "mousemove", function( event ) {

    var mousePosX = event.clientX;
    var mousePosY = event.clientY;
    var right = $(window).width() - mousePosX;
    var bottom = $(window).height() - mousePosY;

  //	$(".prev-label").css( "pageX: " + event.pageX + ", pageY: " + event.pageY );
    $( ".next-label" ).css( "bottom", + bottom + "px" );
    $( ".next-label" ).css( "right", + right + "px" );
  });
