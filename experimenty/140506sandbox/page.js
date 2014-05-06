$(document).ready(function(){ 

prekreslitCary();

$(window).resize(function(){

prekreslitCary();

});


function prekreslitCary() {

var svg = ""


$('.pribehbox').each(function(i){

halfid = $(this).attr('id')
conectedto = $(this).attr('conectedto')

console.log()

if(conectedto > 0) {
	
firstpoint = $(this).offset();
secondpoint= $('#pribeh'+conectedto).offset();

console.log("1L "+firstpoint.left)
console.log("1T "+firstpoint.top)
console.log("2L "+secondpoint.left)
console.log("2T "+secondpoint.top)

svg += "<polyline points='"+firstpoint.left+","+firstpoint.top+" "+secondpoint.left+","+secondpoint.top+" ' style='fill:none;stroke:#ffffff;stroke-width:1' />"


}



});


$('#kresliciplatno').html(svg)



// $('#kresliciplatno').html(svg)

}








});


