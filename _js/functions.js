function mobileToggle () {
	jQuery('.menu-toggle').click(function() {
		if(jQuery( '.mobile-links' ).hasClass( 'expanded' )) {
			jQuery( '.mobile-links' ).slideUp( 'slow' , function() {
				jQuery( '.mobile-links' ).removeClass( 'expanded' );
			});
		} else {
			jQuery( '.mobile-links' ).addClass( 'expanded' );
			jQuery( '.mobile-links' ).slideDown( 'slow' );
		}
		return false;
	});
}

jQuery(document).ready(function() {
	
	var vw = jQuery(window).width();
	if (vw < 800) {
		mobileToggle();
	}
});

jQuery(window).load(function() {
	/*var vw = jQuery(window).width();
	if (vw > 800) {

	}
	if (vw < 800) {
		
	}*/
});	

jQuery(window).resize(function() {
});