jQuery(document).ready(function () {
	new WOW({
		mobile: true,
	}).init();
});

function toggleMenu() {
	jQuery("body").toggleClass("if-menu-active");
}

jQuery(document).ready(function () {
	if (jQuery(".brands_slider").length) {
		let brandsSlider = jQuery(".brands_slider");

		brandsSlider.owlCarousel({
			loop: true,
			autoplay: true,
			autoplayTimeout: 4000,
			nav: false,
			dots: false,
			autoWidth: true,
			margin: 80,
		});

		if (jQuery(".brands_prev").length) {
			let prev = jQuery(".brands_prev");
			prev.on("click", function () {
				brandsSlider.trigger("prev.owl.carousel");
			});
		}

		if (jQuery(".brands_next").length) {
			let next = jQuery(".brands_next");
			next.on("click", function () {
				brandsSlider.trigger("next.owl.carousel");
			});
		}
	}
});

jQuery(document).ready(function () {
	if (jQuery(".testimonials_slider").length) {
		let testimonialsSlider = jQuery(".testimonials_slider");

		testimonialsSlider.owlCarousel({
			loop: false,
			autoplay: false,
			autoplayTimeout: 4000,
			nav: false,
			dots: false,
			autoWidth: true,
			margin: 0,
		});

		if (jQuery(".testimonials_prev").length) {
			let prev = jQuery(".testimonials_prev");
			prev.on("click", function () {
				testimonialsSlider.trigger("prev.owl.carousel");
			});
		}

		if (jQuery(".testimonials_next").length) {
			let next = jQuery(".testimonials_next");
			next.on("click", function () {
				testimonialsSlider.trigger("next.owl.carousel");
			});
		}
	}
});
