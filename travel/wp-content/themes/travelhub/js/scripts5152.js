jQuery(document).ready(function($){
	"use strict";

	// RESPONSIVE VERSION HEADER
	var dropdowns = $('#main-menu > li > ul');
	
	$('#main-menu > li > a').click(function() {
		$(dropdowns).slideUp();
		$(this).parent().find(dropdowns).slideToggle();
	});

	var dropdowns2 = $('#main-menu > li > ul > li ul');

	$('#main-menu li > ul > li > a').click(function() {
		$(dropdowns2).slideUp();
		$(this).parent().find(dropdowns2).slideToggle();
	});

	$('.main-nav > span').click(function() {
		$(this).next('#main-menu').slideToggle();
	});

	if ( $.flexslider )
	{
		$('.carousel').flexslider({controlNav: false, directionNav: true, slideshow: false});
	}

	if ( $.fancybox )
	{
		$('.fancybox').fancybox();
	}

	// Gallery Masonry support
	$('.gallery-masonry').imagesLoaded( function() {
		self.msnry = $('.gallery-masonry').masonry({ itemSelector: '.gallery-item', isAnimated: true, animationOptions: { duration: 750, easing: 'linear', queue: false } });
	});


	$('.masonry-container').imagesLoaded( function() {
		self.msnry = $('.masonry-container').masonry({ itemSelector: '.masonry-item', isAnimated: true, animationOptions: { duration: 750, easing: 'linear', queue: false } });
	});

	// Search form date range
	$('.input-daterange').datepicker({todayHighlight: true, autoclose: true});
});