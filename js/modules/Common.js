import $ from 'jquery';

class Common {  
	constructor() {
		this.allMethods();  
	}
  
	allMethods() {
		/*TOGGLE MENU*/

		$(".toggle-mnu, .menu_item").click(function() {
			$(".sandwich").toggleClass("active");
		});

		$(".toggle-mnu").click(function(){
			if ($(".top-mnu").is(":visible")) {
				$(".top-mnu").fadeOut(600);
				$(".top-mnu li a").removeClass("fadeInUp animated");
			} else {
				$(".top-mnu").fadeIn(600);
				$(".top-mnu li a").addClass("fadeInUp animated");
			};
		}); 

		$(".top-mnu li a").click(function() {
			$(".top-mnu").fadeOut(600);
			$(".sandwich").toggleClass("active");
		}).append("<span>");
		/* END TOGGLE MENU */

		/*SCROLL BUTTON*/
		$(window).scroll(function() {
			if ($(this).scrollTop() > $(this).height()) {
				$('.top').addClass('active');
			} else {
				$('.top').removeClass('active');
			}
		});
		$('.top').click(function() {
			$('html, body').stop().animate({scrollTop: 0}, 'slow', 'swing');
		});
		/* END SCROLL BUTTON*/

		/* SEARCH FIELD */
		$(".search-box").click(function(){

			if ($(".search-field").is(":visible")) {
				$(".search-field").fadeOut(600);


			} else {
				$(".search-field").fadeIn(600);

			};
		}); 
		/* END SEARCH FIELD */

		/* SEARCH FIELD for xs devices */
		if ($(window) .width() < 480 ) {
			$(".search-box").click(function(){
				if ($(".toggle-mnu").is(":visible")) {
					$(".toggle-mnu").fadeOut(300);

				} else {
					$(".toggle-mnu").fadeIn(300);
				};
			}); 
		}
		else	{
		}
		/* END SEARCH FIELD  for xs devices*/

		/* Active tab on menu */
// $(".menu-line ul li").click(function () {
//     $(".menu-line ul li").removeClass("active");
//     $(".menu-line-footer ul li").removeClass("active");
//     $(this).addClass("active");   
// });
/* end Active tab on menu */

/* Preloader */
$(window).on('load', function() {
	$('.preloader').delay(100).fadeOut('slow');
});
/* END Preloader */

/* Preloader */
var $loading = $('.lds-wedges, .lds-css').delay(150).fadeOut('slow');
$(document)
.ajaxStart(function () {
	$loading.show();
})
.ajaxStop(function () {
	$loading.hide();
});
/* END Preloader */

// /* Animation */
$(".post-item").addClass("animated bounceInUp");
$(".archive-item").addClass("animated bounceInDown");
$(".category-item").addClass("animated bounceInDown");
$(".post-img").on("click", function(){
	$(".post-item").addClass("animated slideOutRight")
});
$(".post-inf").on("click", function(){
	$(".post-item").addClass("animated slideOutRight")
}); 

$(".category-item").on("click", function(){
	$(this).addClass("animated slideOutRight")
});
$(".arch-item-title").on("click", function(){
	$(".archive-item").addClass("animated bounceOut")
});
// /* END Animation */


$(document).ready(function($) {
	var Body = $('body');
	Body.addClass('preloader-site');
});

/*Highlighting Code block on post content*/

$('pre code').each(function(i, block) {
	hljs.highlightBlock(block);
});



}



}

export default Common;