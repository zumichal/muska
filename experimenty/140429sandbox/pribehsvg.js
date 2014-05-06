$(document).ready(function(){ 

prekreslitCary();

var refreshId = setInterval(function(){
           prekreslitCary();
        }, 10);


$('#historierozbalitvse').click(function(){
$('.pribehblok').addClass('detaily');
});



$('.pribehblok').click(function(){
$(this).toggleClass('detaily')
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

// console.log("1L "+firstpoint.left)
var oneL = firstpoint.left - 20;
var oneT = firstpoint.top - 20;
var twoL = secondpoint.left - 20
var twoT = secondpoint.top - 20;
// console.log("1T "+firstpoint.top)
// console.log("2L "+secondpoint.left)
// console.log("2T "+secondpoint.top)

svg += "<polyline points='"+oneL+","+oneT+" "+twoL+","+twoT+" ' style='fill:none;stroke:rgba(255,255,255,0.5);stroke-width:1' />"


}



});


$('#kresliciplatno').html(svg)



// $('#kresliciplatno').html(svg)

}








});


