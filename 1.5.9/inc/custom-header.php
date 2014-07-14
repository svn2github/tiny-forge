<?php
/**
 * Implement an optional custom header for Tiny Forge.
 * @link http://codex.wordpress.org/Custom_Headers
 *
 * @since Tiny Forge 1.0
 */

/**
 * Set up the WordPress core custom header arguments and settings.
 *
 * @uses add_theme_support() to register support for 3.4 and up.
 * @uses tinyforge_header_style() to style front-end.
 * @uses tinyforge_admin_header_style() to style wp-admin form.
 * @uses tinyforge_admin_header_image() to add custom markup to wp-admin form.
 *
 * @since Tiny Forge 1.0
 */
function tinyforge_custom_header_setup() {
	$args = array(
		// Text color and image (empty to use none).
		'default-text-color'     => '515151',
		'default-image'          => '%2$s/images/headers/TinyForge-header.jpg',

		// Set height and width, with a maximum value for the width.
		'height'                 => 350,
		'width'                  => 960,
		'max-width'              => 2000,

		// Support flexible height and width.
		'flex-height'            => true,
		'flex-width'             => true,

		// Random image rotation off by default.
		'random-default'         => false,

		// Callbacks for styling the header and the admin preview.
		'wp-head-callback'       => 'tinyforge_header_style',
		'admin-head-callback'    => 'tinyforge_admin_header_style',
		'admin-preview-callback' => 'tinyforge_admin_header_image',
	);

	add_theme_support( 'custom-header', $args );

	/**
	 * Default custom headers packaged with the theme.
	 * %s is a placeholder for the theme template directory URI.
	 * %2$s is a placeholder for the (child) theme stylesheet directory URI.
	 * I'm using %2$s to make it easy for the user to replace default header images in a child theme.
	 * @link http://codex.wordpress.org/Function_Reference/register_default_headers
	 */
	register_default_headers( array(
		'First' => array(
			'url'           => '%2$s/images/headers/TinyForge-header.jpg',
			'thumbnail_url' => '%2$s/images/headers/TinyForge-header-thumbnail.jpg',
			'description'   => _x( 'First', 'header image description', 'tinyforge' )
		),
		'Second' => array(
			'url'           => '%2$s/images/headers/TinyForge-header-02.jpg',
			'thumbnail_url' => '%2$s/images/headers/TinyForge-header-02-thumbnail.jpg',
			'description'   => _x( 'Second', 'header image description', 'tinyforge' )
		),
		'Third' => array(
			'url'           => '%2$s/images/headers/TinyForge-header-03.jpg',
			'thumbnail_url' => '%2$s/images/headers/TinyForge-header-03-thumbnail.jpg',
			'description'   => _x( 'Third', 'header image description', 'tinyforge' )
		),
	) );
}
add_action( 'after_setup_theme', 'tinyforge_custom_header_setup' );

/**
 * Load our special font CSS file.
 *
 * @since Tiny Forge 1.2
 */
function tinyforge_custom_header_fonts() {
	$font_url = tinyforge_get_font_url();
	if ( ! empty( $font_url ) )
		wp_enqueue_style( 'tinyforge-fonts', esc_url_raw( $font_url ), array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'tinyforge_custom_header_fonts' );

/**
 * Style the header text displayed on the blog.
 *
 * get_header_textcolor() options: 515151 is default, hide text (returns 'blank'), or any hex value.
 *
 * @since Tiny Forge 1.0
 */
function tinyforge_header_style() {
	$text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail
	if ( $text_color == get_theme_support( 'custom-header', 'default-text-color' ) )
		return;

	// If we get this far, we have custom styles.
	?>
	<style type="text/css" id="tinyforge-header-css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px 1px 1px 1px); /* IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text, use that.
		else :
	?>
		.site-header h1 a,
		.site-header h2 {
			color: #<?php echo $text_color; ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}

/**
 * Style the header image displayed on the Appearance > Header admin panel.
 *
 * @since Tiny Forge 1.0
 */
function tinyforge_admin_header_style() {
?>
	<style type="text/css" id="tinyforge-admin-header-css">
	.appearance_page_custom-header #headimg {
		border: none;
		font-family: "Open Sans", Helvetica, Arial, sans-serif;
	}
	#headimg h1,
	#headimg h2 {
		line-height: 1.84615;
		margin: 0;
		padding: 0;
	}
	#headimg h1 {
		font-size: 26px;
	}
	#headimg h1 a {
		color: #515151;
		text-decoration: none;
	}
	#headimg h1 a:hover {
		color: #21759b !important; /* Has to override custom inline style. */
	}
	#headimg h2 {
		color: #757575;
		font-size: 13px;
		margin-bottom: 24px;
	}
	#headimg img {
		max-width: <?php echo get_theme_support( 'custom-header', 'max-width' ); ?>px;
	}
	</style>
<?php
}

/**
 * Output markup to be displayed on the Appearance > Header admin panel.
 * This callback overrides the default markup displayed there.
 *
 * @since Tiny Forge 1.0
 */
function tinyforge_admin_header_image() {
	?>
	<div id="headimg">
		<?php
		if ( ! display_header_text() )
			$style = ' style="display:none;"';
		else
			$style = ' style="color:#' . get_header_textcolor() . ';"';
		?>
		<h1 class="displaying-header-text"><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<h2 id="desc" class="displaying-header-text"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></h2>
		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
		<?php endif; ?>
	</div>
<?php }