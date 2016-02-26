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


	setInterval(function(){
		location.reload(true);
	}, 90000);
});
