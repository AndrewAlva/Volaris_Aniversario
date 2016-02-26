var contador = 0;
$(document).ready(function() {
	$('#blasfemiamenu-btn').click(function(e) {
		e.preventDefault();
		$('#blasfemiamenu-wrapper').toggleClass('menu-enter');
		$('#blasfemiamenu-btn').toggleClass('menubtn-enter');
		$('#blasfemiamenu-btn').toggleClass('menu-Close');
	});

	$('#about-btn').click(function(e) {
		$('#about-wrapper').toggleClass('menu-enter');
		$('#about-btn').toggleClass('menubtn-enter');
		$('#about-btn').toggleClass('menu-Close');
	});

	$('#blasfemiamenu-wrapper').find('.stream').addClass('hidden');


	// $(document).click(function(e) {
		
	// 	if (contador == 0) {
	// 		$('#spithere').after('<div class="svgbox spitpos"><img src="spits/Stone-orange.gif" alt=""></div>');
	// 	} else if (contador < 2) {
	// 		$('#spithere').after('<div class="svgbox spitpos"><img src="spits/Stone-blue.gif" alt=""></div>');
	// 	} else if (contador < 3) {
	// 		$('#spithere').after('<div class="svgbox spitpos"><img src="spits/Stone-red.gif" alt=""></div>');
	// 	} else if (contador < 4) {
	// 		$('#spithere').after('<div class="svgbox spitpos"><img src="spits/Stone-purple.gif" alt=""></div>');
	// 	} else if (contador < 5) {
	// 		$('#spithere').after('<div class="svgbox spitpos"><img src="spits/Stone-orange 2.gif" alt=""></div>');
	// 	} else if (contador < 6) {
	// 		$('#spithere').after('<div class="svgbox spitpos"><img src="spits/Stone-blue 2.gif" alt=""></div>');
	// 	} else if (contador < 7) {
	// 		$('#spithere').after('<div class="svgbox spitpos"><img src="spits/Stone-red 2.gif" alt=""></div>');
	// 	} else if (contador < 8) {
	// 		$('#spithere').after('<div class="svgbox spitpos"><img src="spits/Stone-purple 2.gif" alt=""></div>');
	// 	} else if (contador < 9) {
	// 		$('#spithere').after('<div class="svgbox spitpos"><img src="spits/Stone-orange 3.gif" alt=""></div>');
	// 	} else if (contador < 10) {
	// 		$('#spithere').after('<div class="svgbox spitpos"><img src="spits/Stone-blue 3.gif" alt=""></div>');
	// 	} else if (contador < 11) {
	// 		$('#spithere').after('<div class="svgbox spitpos"><img src="spits/Stone-red 3.gif" alt=""></div>');
	// 	} else if (contador < 12) {
	// 		$('#spithere').after('<div class="svgbox spitpos"><img src="spits/Stone-purple 3.gif" alt=""></div>');
	// 	};

		
	// 	if (contador < 12) {
	// 		contador = contador + 1;
	// 	};
	// });



	// setInterval(function(){
	// 	location.reload(true);
	// }, 90000);
});
