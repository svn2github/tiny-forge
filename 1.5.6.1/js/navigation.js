/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and accessibility for submenu items.
 * 
 * v.1.5.6
 */
( function() {
	var container, button, menu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'h1' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
		} else {
			container.className += ' toggled';
		}
	};
} )();

// Ported from Twenty Twelve. Doesn't look like it's working...
// Better focus for hidden submenu items for accessibility.

( function( $ ) {
	$( '.main-navigation' ).find( 'a' ).on( 'focus.tinyforge blur.tinyforge', function() {
		$( this ).parents( '.menu-item, .page_item' ).toggleClass( 'focus' );
	} );
} )( jQuery );