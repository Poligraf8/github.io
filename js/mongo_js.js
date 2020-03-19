$(document).ready(function(){
	// Burger_menue
	$(".top_mnu ul a").click(function(){
		$(".top_mnu").fadeOut(600);
		$(".burger-menu").toggleClass("burger-menu-clicked");
	}).append("<span>");

	$('.burger-menu').on('click', function() {
		if ($(this).hasClass("burger-menu-clicked")) {
			$(this).removeClass("burger-menu-clicked");
			$(this).addClass("burger-menu-closing");
		} else {
			$(this).addClass("burger-menu-clicked");
			$(this).removeClass("burger-menu-closing");
		}
	});
	$(".burger-menu").click(function(){
		if ($(".top_mnu").is(":visible")){
			$(".top_mnu").fadeOut(600);
			$(".top_mnu li a").removeClass("fadeInUp animated");
		} else {
			$(".top_mnu").fadeIn(600);
			$(".top_mnu li a").addClass("fadeInUp animated");
		};
	});
	$(".top_mnu ul a").mPageScroll2id();
	
});