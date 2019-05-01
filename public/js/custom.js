$(window).scroll(function() {
	if ($(this).scrollTop() == 0) {
		$('#r1').removeClass('reveal');
		$('#main').removeClass('reveal');
	}
	if ($(this).scrollTop() > 0 && $(this).scrollTop() < 400) {
		$('#r1').addClass('reveal');
	} else $('#r1').removeClass('reveal');

	if ($(this).scrollTop() > 470) {
		$('#r1').removeClass('reveal');
		$('#r1').addClass('navbar-bg');
		$('#main').addClass('reveal');
	} else $('#r1').removeClass('navbar-bg');
});
jQuery(document).ready(function(jQuery) {
	var topMenu = jQuery('#r1'),
		offset = 40,
		topMenuHeight = topMenu.outerHeight() + offset,
		// All list items
		menuItems = topMenu.find('a[href*="#"]'),
		// Anchors corresponding to menu items
		scrollItems = menuItems.map(function() {
			var href = jQuery(this).attr('href'),
				id = href.substring(href.indexOf('#')),
				item = jQuery(id);
			//console.log(item)
			if (item.length) {
				return item;
			}
		});

	// so we can get a fancy scroll animation
	menuItems.click(function(e) {
		var href = jQuery(this).attr('href'),
			id = href.substring(href.indexOf('#'));
		offsetTop = href === '#' ? 0 : jQuery(id).offset().top - topMenuHeight + 1;
		jQuery('html, body')
			.stop()
			.animate(
				{
					scrollTop: offsetTop
				},
				300
			);
		e.preventDefault();
	});

	// Bind to scroll
	jQuery(window).scroll(function() {
		// Get container scroll position
		var fromTop = jQuery(this).scrollTop() + topMenuHeight;

		// Get id of current scroll item
		var cur = scrollItems.map(function() {
			if (jQuery(this).offset().top < fromTop) return this;
		});

		// Get the id of the current element
		cur = cur[cur.length - 1];
		var id = cur && cur.length ? cur[0].id : '';

		menuItems.parent().removeClass('active');
		if (id) {
			menuItems
				.parent()
				.end()
				.filter("[href*='#" + id + "']")
				.parent()
				.addClass('active');
		}
	});
});
$(function() {
	$('#gallery-slider').owlCarousel({
		// items: 4,
		// merge: true,
		loop: true,
		nav: true,
		margin: 10,
		video: true,
		lazyLoad: true,
		center: true,
		responsive: {
			0: {
				items: 2
			},
			600: {
				items: 4
			},
			1000: {
				items: 6
			}
		}
	});
});

$(document).ready(function() {
	$('#collapse-toggler').click(function() {
		console.log(this);
		$('#target-nav').toggle();
	});
});
