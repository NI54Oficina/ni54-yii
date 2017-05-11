
  $(document).ready(function (e) {

    console.log("animation");

    $( ".center-covered" ).hover(function() {
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

          //console.log($(".circle-animated").css("top"));

          var ee=parseInt($(".circle-animated").css("left"));
          var ei=parseInt($(".circle-animated").css("top"))
          if(ee>-19 && ee<184 && ei<0){
            $(".circle-animated").css("display", "none");
          }else{$(".circle-animated").css("display", "block")}

      }
     timer = setInterval(animate, 1);
  },function(){
      clearInterval(timer);

  });



});


function follow_path(){
  // dots is an array of Dot objects,
// mouse is an object used to track the X and Y position
   // of the mouse, set with a mousemove event listener below
var dots = [],
    mouse = {
      x: 0,
      y: 0
    };

// The Dot object used to scaffold the dots
var Dot = function() {
  this.x = 0;
  this.y = 0;
  this.node = (function(){
    var n = document.createElement("div");
    n.className = "trail";
    document.body.appendChild(n);
    return n;
  }());
};
// The Dot.prototype.draw() method sets the position of
  // the object's <div> node
Dot.prototype.draw = function() {
  this.node.style.left = this.x + "px";
  this.node.style.top = this.y + "px";
  this.node.style.opacity= this.opacity;
};

// Creates the Dot objects, populates the dots array
for (var i = 0; i < 12; i++) {
  var d = new Dot();
  dots.push(d);
}

// This is the screen redraw function
function draw() {
  // Make sure the mouse position is set everytime
    // draw() is called.
  var x = mouse.x,
      y = mouse.y;

  // This loop is where all the 90s magic happens
  var alpha=1;
  dots.forEach(function(dot, index, dots) {
    var nextDot = dots[index + 1] || dots[0];

    dot.x = x;
    dot.y = y;
    dot.opacity=alpha;
    dot.draw();
    alpha-=0.1;
    x += (nextDot.x - dot.x) * .5;
    y += (nextDot.y - dot.y) * .5;

  });
}

// addEventListener("mousemove", function(event) {
//   //event.preventDefault();
//   mouse.x = event.pageX;
//   mouse.y = event.pageY;
// });

// animate() calls draw() then recursively calls itself
  // everytime the screen repaints via requestAnimationFrame().
function animate() {
  draw();
  requestAnimationFrame(animate);
}

// And get it started by calling animate().
animate();

}
