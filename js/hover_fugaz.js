
  $(document).ready(function (e) {

    console.log("animation");

    $( "#title-section" ).hover(function() {
      var startAngle =-50;
      var unit = 215;
      angle=0;



       animate = function () {


          var rad = startAngle * (Math.PI / 180);


          $('.circle-animated').css({

              left: 110 + Math.cos(rad) * 200 + 'px',
              top: 100 * ( Math.sin(rad)) + 'px'

          });
          startAngle--;

          console.log($(".circle-animated").css("left"));

          var ee=parseInt($(".circle-animated").css("right"));
          var ei=parseInt($(".circle-animated").css("top"))
          if(ee>70 && ee<400 && ei<0){
            $(".circle-animated").fadeOut()
          }else{$(".circle-animated").fadeIn()}

      }
     timer = setInterval(animate, 5);
  },function(){
      clearInterval(timer);
      // $(".circle-animated").css({"display":"none"});
  });

});
