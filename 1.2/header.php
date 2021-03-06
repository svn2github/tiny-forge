<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Tiny_Forge
 * @since Tiny Forge 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!-- Tip03 - We are people, not machines. Read more at: humanstxt.org. Put this file to the root folder of your website e.g. /public_html -->
<link rel="author" type="text/plain" href="<?php echo esc_url( home_url( '/' ) ); ?>humans.txt" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Tip04 - Reminder to turn ON JavaScript -->
<noscript>
	<div id="no-javascript">
		This website is best viewed with JavaScript enabled. The advanced features of this website require that you enable JavaScript in your browser.
	</div>
</noscript>

<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding" itemscope itemtype="http://schema.org/WPHeader">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		
		<nav id="site-navigation" class="main-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'tinyforge' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'tinyforge' ); ?>"><?php _e( 'Skip to content', 'tinyforge' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<!-- Tip06 - Custom headers for posts and pages -->
		<!-- Custom Header - Start -->
		<?php
			// Check to see if the header image has been removed
			$header_image = get_header_image();
			if ( ! empty( $header_image ) ) :
				if ( function_exists( 'get_custom_header' ) ) {
					// We need to figure out what the minimum width should be for our featured image
					// This result would be the suggested width if the theme were to implement flexible widths
					$header_image_width = get_theme_support( 'custom-header', 'width' );
				}
				?>
			<?php
				// The header image
				// Check if this is a post or page, if it has a thumbnail, and if it's a big one
				if ( is_singular() && has_post_thumbnail( $post->ID ) &&
						( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_width ) ) ) &&
						$image[1] >= $header_image_width ) :
					// Houston, we have a new header image!
					echo get_the_post_thumbnail( $post->ID, 'custom-header-image' );
				else :
					if ( function_exists( 'get_custom_header' ) ) {
						$header_image_width  = get_custom_header()->width;
						$header_image_height = get_custom_header()->height;
					}
					?>
				<img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
			<?php endif; // end check for featured image or standard header ?>
		<?php endif; // end check for removed header image ?>
		<!-- Custom Header - End -->

	</header><!-- #masthead -->

	<div id="main" class="wrapper">