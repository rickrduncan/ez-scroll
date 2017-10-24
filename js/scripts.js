jQuery(document).ready(function() {	
	var offset = 220;
	var duration = 500;
	
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > offset) {
			jQuery('.smooth-scroll-top').fadeIn(duration);
		} else {
			jQuery('.smooth-scroll-top').fadeOut(duration);
		}			
	});

	jQuery('.smooth-scroll-top').click(function(event) {
		event.preventDefault();
		jQuery('html, body').animate({scrollTop: 0}, duration);
		return false;
	})

	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > offset) {
			jQuery('.smooth-scroll-top').addClass('show');
		} else {
			jQuery('.smooth-scroll-top').removeClass('show');
		}
	});	
});
