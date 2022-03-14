/**
 * jQuery Document Ready Function
 */
jQuery(document).ready(function($){
	"use strict";

	$("#mainHeader").sticky({topSpacing:0});

	var wow = new WOW()
	wow.init();

});

/**
 * Home Page Slider Animation
 * @param  {[homeBannerSlider]} $ [Bootstrap carosal slider]
 * @return {[caption animate]}   [description]
 */
(function($) {
	"use strict";

	var $myCarousel = $("#homeBannerSlider"),
		$firstAnimatingElems = $myCarousel
	.find(".carousel-item:first")
	.find("[data-animation ^= 'animated']");

	$myCarousel.carousel();

	doAnimations( $firstAnimatingElems );

	$myCarousel.on("slide.bs.carousel", function(e) {
		var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
		doAnimations($animatingElems);
	});

	function doAnimations(elems) {

		var animEndEv = "webkitAnimationEnd animationend";

		elems.each(function() {
			var $this = $(this),
			$animationType = $this.data("animation");
			$this.addClass($animationType).one(animEndEv, function() {
				$this.removeClass($animationType);
			});
		});
	}
})(jQuery);

/**
 * ScrollTop Options
 */
(function ($){
	"use strict";

	var scrollTopClass = $(".scroll-to-target");
	if( scrollTopClass.length ) {
		scrollTopClass.on('click', function() {
			var target = $(this).attr('data-target');
		   	$('html, body').animate({
			   scrollTop: $(target).offset().top
			}, 1000);
		});
	}

	function scrollTopOpt() {
		var windowpos = $(window).scrollTop(),
			scrollLink = $('.scroll-to-top'),
			stickyMenuIcon = $(".toggleMenu");

		if( scrollLink.length ){
			if (windowpos >= 1) {
				scrollLink.addClass('show');
				stickyMenuIcon.addClass('stickyOn');
			} else {
				scrollLink.removeClass('show');
				stickyMenuIcon.removeClass('stickyOn');
			}
		}
	}
	scrollTopOpt();

	$(window).on('scroll', function() {
		scrollTopOpt();
	});

})(jQuery);





