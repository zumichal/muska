$(document).ready(function(){ 


	rozmerovac()
	menuPozice = $("#menu_fixed").offset().top
	contentPozice = $("#content").offset().top
	$(window).resize(function(){
		rozmerovac()
		menuPozice = $("#menu_fixed").offset().top
		contentPozice = $("#content").offset().top
	});

	$(document).scroll(function() {
		console.log(menuPozice)
		odzhora = $(document).scrollTop()
		

		if(odzhora > menuPozice) {
			$('#menu_fixed').addClass('fixed')
		} else {
			$('#menu_fixed').removeClass('fixed')
		}


		if(odzhora > contentPozice-250) {
			$('#menu_fixed').addClass('small')
		} else {
			$('#menu_fixed').removeClass('small')
		}




	});

	$('h1').prev('p').css({'padding-bottom':'120px'})
	$('#historieindex').prev('p').css({'padding-bottom':'120px'})

	function rozmerovac() {
		vyskaOkna = $(window).height()
		vyskaHlavicky = vyskaOkna * 0.9

		if (vyskaHlavicky < 500) {vyskaHlavicky = 500}
		$("#hlavicka").height(vyskaHlavicky)

	}
	
	
	$(".sipka_dolu").click(function(){
	    $('html,body').animate({scrollTop: vyskaHlavicky -49 }, 1000); 
	})




});