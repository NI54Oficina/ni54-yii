(function() {
var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
						 window.webkitRequestAnimationFrame || window.msRequestAnimationFrame || function( callback ){
					 window.setTimeout(callback, 1000 / 60);
				 };
window.requestAnimationFrame = requestAnimationFrame;
})();

background = document.getElementById("canvasFugaz"),

bgCtx = background.getContext("2d"),
width = window.innerWidth,
height = document.body.offsetHeight;
(height < 400)?height = 400:height;

background.width = background.width = width;
background.height = background.height = height;


var grd = bgCtx.createRadialGradient(width/2,height*2,400,width/2, height, width*1.2);

grd.addColorStop(.0, "#d9cfdb");
grd.addColorStop(0.01, "#776db4");
grd.addColorStop(0.02, "#625897");
grd.addColorStop(0.2, "#50477f");
grd.addColorStop(.25, "#493f7b");

grd.addColorStop(.3, "#332958");
grd.addColorStop(.4, "#02011e");
grd.addColorStop(.5, "#02011e");
grd.addColorStop(0.6, "#02011e");

bgCtx.fillStyle = grd;
bgCtx.fillRect(0, 0,300, 150);



function ShootingStar(){
this.reset();
}

ShootingStar.prototype.reset = function(){
this.x = Math.random()*width;
this.y = 0;
this.len = (Math.random()*10)+10;
this.speed = (Math.random()*5)+6;
this.size = (Math.random()*1);

this.waitTime =  new Date().getTime() + (Math.random()*3000)+500;
this.active = false;
}

ShootingStar.prototype.update = function(){
if(this.active){
 this.x-=this.speed;
 this.y+=this.speed;
 if(this.x<0 || this.y >= height){
	 this.reset();
 }else{
 bgCtx.lineWidth = this.size;
	 bgCtx.beginPath();
	 bgCtx.moveTo(this.x,this.y);
	 bgCtx.lineTo(this.x+this.len, this.y-this.len);
	 bgCtx.stroke();
 }
}else{
 if(this.waitTime < new Date().getTime()){
	 this.active = true;
 }
}
}

var entities = [];

entities.push(new ShootingStar());
entities.push(new ShootingStar());

function animate(){
// bgCtx.fillStyle = 'rgba(00,00,00,0)';
bgCtx.fillRect(0,0,width,height);
// bgCtx.fillStyle = 'rgba(00,00,00,0.1)';
bgCtx.strokeStyle = '#ffffff';

var entLen = entities.length;

while(entLen--){
 entities[entLen].update();
}

requestAnimationFrame(animate);
}
animate();
