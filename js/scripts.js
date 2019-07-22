(function($, root, undefined) {
	$(function() {
		"use strict";
		// DOM ready, take it away
		function set_footer() {
			var busy_space_h =
				$("header.header").height() + $("footer.footer").height();
			var window_h = $(window).height();
			var diff = window_h - busy_space_h;
			$("body main").height() < diff
				? $("body main").css("min-height", diff + "px")
				: "";
		}
		set_footer();
	});
})(jQuery, this);

(function($, root, undefined) {
	$(document).ready(function() {
		handleSubMenu();
	});

	function handleSubMenu() {
		addToggleArrowToSubMenu();
		animateArrowSubMenu();
	}

	function animateArrowSubMenu() {
		$(".mobile-nav-arrow").on("click tap touch", function() {
			$(this)
				.siblings(".sub-menu")
				.slideToggle("slow");
			$(this).toggleClass("rotate-arrow");
		});
	}

	function addToggleArrowToSubMenu() {
		if ($(".header-main-menu ul li").children(".sub-menu").length > 0) {      
			$(".sub-menu").before(
				'<span class="mobile-nav-arrow"><i class="fa fa-angle-down"></i></span>'
			);
		}
  }



})(jQuery, this);
