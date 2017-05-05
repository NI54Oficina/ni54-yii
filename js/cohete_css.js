indexes=[["#step-1","animate-1"], ["#step-2","animate-2"],["#step-4","animate-4"],["#step-5","animate-5"]];
animates=[, "animate-2", "animate-3", "animate-4", "animate-5" ];
index=0;
animation=0;
prevElem= null;
prevPos=$(document).height();
prevLeft=1;

mobile=0;


$(window).scroll(function(){
    // checkAnimation();
    moveNave();

});


$(document).on("ready",function(){

	isMobile();

});


$(window).resize(function(){

			isMobile();
});


function isMobile(){
	if( $(window).width()<1200) mobile=1;
}


$.fn.animateRotate = function(angle, duration, easing, complete) {
    var args = $.speed(duration, easing, complete);
    var step = args.step;
    return this.each(function(i, e) {
        args.step = function(now) {
            $.style(e, 'transform', 'rotate(' + now + 'deg)');
            if (step) return step.apply(this, arguments);
        };

        $({deg: 0}).animate({deg: angle}, args);
    });
};



function isElementInViewportRever(elem) {
    var $elem = $(elem);

    var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    var elemTop = Math.round( $elem.offset().top );
    var elemBottom = elemTop + $elem.height();
   //  console.log([(elemTop < viewportBottom) && (elemBottom > viewportTop), viewportTop]);
    return [(elemTop < viewportBottom) && (elemBottom > viewportTop),viewportTop];
}

function moveNave(){

  if(mobile)return;


  var $nave =$('#nave');

  if ($nave==null)return;

  indexes.forEach(function($elem){

    resp=isElementInViewportRever($elem[0]);

    if(resp[0]){


      if($elem[0]!=prevElem){



        prevElem=$elem[0];


        width=$(window).width();

        left=Math.floor((Math.random() * 2) + 0);

        posMax= $(window).width()-200;

        pos=[200,posMax];

        height=($(window).height())/2;

        var angle;

         if(prevPos<resp[1] && prevLeft!=left && left==0){
           angle=-170;

         }else if(prevPos<resp[1] && prevLeft!=left && left==1){
           angle=-200;


         }else if(prevPos<resp[1] && prevLeft==left){
           angle=180;

         }else if(prevPos>resp[1] && prevLeft!=left && left==0){
           angle=-30;

         }else if(prevPos>resp[1] && prevLeft!=left && left==1){
           angle=30;

         }else if(prevPos>resp[1] && prevLeft==left){
           angle=0;

         }

        prevPos=resp[1];
        prevLeft=left;
        posX=pos[left];

        $nave.animateRotate(angle, 100, "linear");

        if($elem[0]=="#step-1"){
          opa=0;posX=$(window).width()/2;
          opaLogo=1;
          // timeLogo=

        }else if($elem[0]=="#step-5"){
          opa=1;posX=$(window).width()/2+300;
          opaLogo=0;
          // timeLogo=

        }else{
          opa=1;
          opaLogo=0;
        }


        $nave.animate({top:(resp[1])+height,
                       left: posX,
                      opacity:opa},
                      700,
                      function(){

                                  $("#main-logo").animate({opacity:opaLogo},100);

                                  if($elem[0]=="#step-5"){
                                    $nave.animate({top:$(document).height()-150},
                                                  700);

                                      $nave.animateRotate(0, 400, "linear");


                                      $("#nube").animate({opacity:1,left:posX-50},500);
                                      $("#nube").fadeIn();
                                  }else{
                                      $("#nube").animate({opacity:0},200);
                                      $("#nube").fadeOut();
                                  }



                                }
                    );

      }


    }

  });

}
