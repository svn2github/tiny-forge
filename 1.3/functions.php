<?php
/* Tiny Forge functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * Learn how to set up a solid functions.php file
 * @link http://justintadlock.com/archives/2010/12/30/wordpress-theme-function-files
 *
 * @since Tiny Forge 1.0
 */

/* Table of Contents:
 *
 *  1.0 - Set up the content width value based on the theme's design and stylesheet.
 *  2.0 - Add support for a custom header image.
 *  3.0 - Set up theme defaults and register the various WordPress features that Tiny Forge supports.
 *    3.1 - Make Tiny Forge available for translation.
 *    3.2 - This theme styles the visual editor with editor-style.css to match the theme style.
 *    3.3 - Add RSS feed links to <head> for posts and comments.
 *    3.4 - Switches default core markup for search form, comment form, and comments to output valid HTML5.
 *    3.5 - This theme supports a variety of post formats.
 *    3.6 - This theme uses wp_nav_menu() in one location.
 *    3.7 - This theme supports custom background color and image, and here we also set up the default background color.
 *    3.8 - This theme uses a custom image size for featured images, displayed on "standard" posts (also see Tip06 in style.css).
 *    3.9 - Tip07 - Add new image size for custom post/page headers and select default header image (also see Tip06 in style.css).
 *    3.10 - Register our main widget area, footer widget areas and the front page widget areas.
 *    3.11 - Allow Schema.org attributes to be added to HTML tags in the editor (but not for comments).
 *    3.12 - Add Theme Customizer components.
 *  4.0 - Return the Google font stylesheet URL if available.
 *  5.0 - Enqueue scripts and styles for front-end.
 *    5.1 - Add JavaScript to pages with the comment form to support sites with threaded comments (when in use).
 *    5.2 - Add JavaScript for handling the navigation menu hide-and-show behavior.
 *    5.3 - Load our main stylesheet.
 *    5.4 - Load the Internet Explorer specific stylesheet.
 *    5.5 - Add CSS file of the Elusive-icon font.
 *    5.6 - Add additional stylesheets to the TinyMCE editor if needed.
 *    5.7 - Add optional meta tags, scripts to head.
 *  6.0 - Extend the default WordPress body class.
 *  7.0 - Create a nicely formatted and more specific title element text for output in head of document, based on current view.
 *  8.0 - Navigation settings.
 *    8.1 - Make our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *    8.2 - Tip05 - Mark main navigation menu items, containing children with special css class .dropdown
 *    8.3 - Display navigation to next/previous pages when applicable.
 *  9.0 - Adjust content_width value for full-width and single image attachment templates, and when there are no active widgets in the sidebar.
 *  10.0 - Content meta information.
 *    10.1 - Tip26 - Print HTML bellow post title with meta information for the current post date/time and author.
 *    10.2 - Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *  11.0 - Comments and pingbacks.
 *    11.1 - Template for comments and pingbacks.
 *    11.2 - Add Schema.org author markup to comment author links.
 *  12.0 - Other functions.
 *    12.1 - Tip82 - No more jumping for read more link - disabled by default.
 *    12.2 - Tip28 - Remove curly quotes in WordPress.
 *    12.3 - Tip23 - Properly resize videos, inserted with oembed.
 *    12.4 - Tip81 - Completely disable the Post Formats UI in the post editor screen - disabled by default.
 *    12.5 - Tip08 - Remove junk from head - disabled by default.
 *    12.6 - Tip09 - Remove WordPress version info from head and feeds - disabled by default.
 *    
 * ----------------------------------------------------------------------------
 */

// 1.0 - Set up the content width value based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = 625;

// 2.0 - Add support for a custom header image.
require( get_template_directory() . '/inc/custom-header.php' );

/* 3.0 - Set up theme defaults and register the various WordPress features that Tiny Forge supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Tiny Forge 1.0
 */
function tinyforge_setup() {
	/* 3.1 - Make Tiny Forge available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Tiny Forge, use a find and replace
	 * to change 'tinyforge' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'tinyforge', get_template_directory() . '/languages' );

	// 3.2 - This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// 3.3 - Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// 3.4 - Switches default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

	// 3.5 - This theme supports a variety of post formats. See http://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) ); // other possible formats: 'audio', 'chat', 'gallery', 'video'

	// 3.6 - This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'tinyforge' ) );

	// 3.7 - This theme supports custom background color and image, and here we also set up the default background color.
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );

	// 3.8 - This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
	
	// 3.9 - Tip07 - Add new image size for custom post/page headers and select default header image (also see Tip39 in style.css).
	add_image_size( 'custom-header-image', 960, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'tinyforge_setup' );

/* 3.10 - Register our main widget area, footer widget areas and the front page widget areas.
 *
 * @since Tiny Forge 1.0
 */
function tinyforge_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'tinyforge' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'tinyforge' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'First Front Page Widget Area', 'tinyforge' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'tinyforge' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Second Front Page Widget Area', 'tinyforge' ),
		'id' => 'sidebar-3',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'tinyforge' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'tinyforge' ),
		'id' => 'sidebar-4',
		'description' => __( 'Found at the bottom of every page (except 404s) as the footer. Left Side.', 'tinyforge' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'tinyforge' ),
		'id' => 'sidebar-5',
		'description' => __( 'Found at the bottom of every page (except 404s) as the footer. Center.', 'tinyforge' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'tinyforge' ),
		'id' => 'sidebar-6',
		'description' => __( 'Found at the bottom of every page (except 404s) as the footer. Right Side.', 'tinyforge' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Copyright Widget Area', 'tinyforge' ),
		'id' => 'sidebar-7',
		'description' => __( 'Found at the bottom of every page as the footer. Left Side.', 'tinyforge' ),
	) );
}
add_action( 'widgets_init', 'tinyforge_widgets_init' );

// 3.11 - Allow Schema.org attributes to be added to HTML tags in the editor (but not for comments).
if ( ! function_exists( 'tinyforge_allow_schema_markup' ) ) :

function tinyforge_allow_schema_markup() {
	global $allowedposttags;
	foreach( $allowedposttags as $tag => $attr ) {
		$attr[ 'itemscope' ] = array();
		$attr[ 'itemtype' ] = array();
		$attr[ 'itemprop' ] = array();
		$allowedposttags[ $tag ] = $attr;
	}
	return $allowedposttags;
}
add_action( 'init', 'tinyforge_allow_schema_markup' );
endif;

/* 3.12 - Add Theme Customizer components.
 *
 * @since Tiny Forge 1.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @return void
 */
require get_template_directory() . '/inc/theme-customizer.php';

/* 4.0 - Return the Google font stylesheet URL if available.
 *
 * The use of Open Sans by default is localized. For languages that use
 * characters not supported by the font, the font can be disabled.
 *
 * @since Tiny Forge 1.2
 *
 * @return string Font stylesheet or empty string if disabled.
 */
function tinyforge_get_font_url() {
	$font_url = '';

	/* translators: If there are characters in your language that are not supported
	 by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'tinyforge' ) ) {
		$subsets = 'latin,latin-ext';

		/* translators: To add an additional Open Sans character subset specific to your language, translate
		 this to 'greek', 'cyrillic' or 'vietnamese'. Do not translate into your own language. */
		$subset = _x( 'no-subset', 'Open Sans font: add new subset (greek, cyrillic, vietnamese)', 'tinyforge' );

		if ( 'cyrillic' == $subset )
			$subsets .= ',cyrillic,cyrillic-ext';
		elseif ( 'greek' == $subset )
			$subsets .= ',greek,greek-ext';
		elseif ( 'vietnamese' == $subset )
			$subsets .= ',vietnamese';

		$protocol = is_ssl() ? 'https' : 'http';
		$query_args = array(
			'family' => 'Open+Sans:400italic,700italic,400,700',
			'subset' => $subsets,
		);
		$font_url = add_query_arg( $query_args, "$protocol://fonts.googleapis.com/css" );
	}

	return $font_url;
}

/* 5.0 - Enqueue scripts and styles for front-end.
 *
 * @since Tiny Forge 1.0
 */
function tinyforge_scripts_styles() {
	global $wp_styles;

	// 5.1 - Add JavaScript to pages with the comment form to support sites with threaded comments (when in use).
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	// 5.2 - Add JavaScript for handling the navigation menu hide-and-show behavior.
	wp_enqueue_script( 'tinyforge-navigation', get_template_directory_uri() . '/js/navigation.js',
	array(), 
	'1.0', 
	true );

	$font_url = tinyforge_get_font_url();
	if ( ! empty( $font_url ) )
		wp_enqueue_style( 'tinyforge-fonts', esc_url_raw( $font_url ), 
		array(), 
		null );

	// 5.3 - Load our main stylesheet.
	wp_enqueue_style( 'tinyforge-style', get_stylesheet_uri() );

	// 5.4 - Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'tinyforge-ie', get_template_directory_uri() . '/css/ie.css', 
	array( 'tinyforge-style' ), 
	'20121010' );
	$wp_styles->add_data( 'tinyforge-ie', 'conditional', 'lt IE 9' );

	// 5.5 - Add CSS file of the Elusive-icon font.
	wp_enqueue_style( 'elusive-iconfont-style', get_template_directory_uri() . '/css/elusive-webfont.css', 
	array(), 
	'1.0', 
	'all' );
}
add_action( 'wp_enqueue_scripts', 'tinyforge_scripts_styles' );

/* 5.6 - Add additional stylesheets to the TinyMCE editor if needed.
 *
 * @uses tinyforge_get_font_url() To get the Google Font stylesheet URL.
 *
 * @since Tiny Forge 1.2
 *
 * @param string $mce_css CSS path to load in TinyMCE.
 * @return string
 */
function tinyforge_mce_css( $mce_css ) {
	$font_url = tinyforge_get_font_url();

	if ( empty( $font_url ) )
		return $mce_css;

	if ( ! empty( $mce_css ) )
		$mce_css .= ',';

	$mce_css .= esc_url_raw( str_replace( ',', '%2C', $font_url ) );

	return $mce_css;
}
add_filter( 'mce_css', 'tinyforge_mce_css' );

// 5.7 - Add optional meta tags, scripts to head.
function tinyforge_add_meta_to_head () {
	// Tip02 - Optional code to enable favicon. Add favicon.ico file to the theme's /images folder.
	// echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/images/favicon.ico" />';

	// Jquery - Google, then wordpress's
	/* if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', false, '1.8.3', true);
		wp_enqueue_script('jquery');
	} */

	// Project's author information
	// echo '<meta name="author" content="Your name here">';
}
add_action('wp_head', 'tinyforge_add_meta_to_head');

/* 6.0 - Extend the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 *
 * @since Tiny Forge 1.0
 *
 * @param array Existing class values.
 * @return array Filtered class values.
 */
function tinyforge_body_class( $classes ) {
	$background_color = get_background_color();
	$background_image = get_background_image();

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) )
		$classes[] = 'full-width';

	if ( is_page_template( 'page-templates/front-page.php' ) ) {
		$classes[] = 'template-front-page';
		if ( has_post_thumbnail() )
			$classes[] = 'has-post-thumbnail';
		if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) )
			$classes[] = 'two-sidebars';
	}

	if ( empty( $background_image ) ) {
		if ( empty( $background_color ) )
			$classes[] = 'custom-background-empty';
		elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) )
			$classes[] = 'custom-background-white';
	}

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'tinyforge-fonts', 'queue' ) )
		$classes[] = 'custom-font-enabled';

	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	return $classes;
}
add_filter( 'body_class', 'tinyforge_body_class' );

/* 7.0 - Create a nicely formatted and more specific title element text for output in head of document, based on current view.
 *
 * @since Tiny Forge 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function tinyforge_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'tinyforge' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'tinyforge_wp_title', 10, 2 );

/* 8.0 - Navigation settings.
 * 
 * 8.1 - Make our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since Tiny Forge 1.0
 */
function tinyforge_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'tinyforge_page_menu_args' );
 
/* 8.2 - Tip05 - Mark main navigation menu items, containing children with special css class .dropdown
 * Main navigation menu items with drop-down children will be marked by a distinct icon (caret down) via style.css
 * http://stackoverflow.com/questions/8448978/wordpress-how-do-i-know-if-a-menu-item-has-children
 */
function tinyforge_menu_set_dropdown( $sorted_menu_items, $args ) {
    $last_top = 0;
    foreach ( $sorted_menu_items as $key => $obj ) {
        // it is a top lv item?
        if ( 0 == $obj->menu_item_parent ) {
            // set the key of the parent
            $last_top = $key;
        } else {
            $sorted_menu_items[$last_top]->classes['dropdown'] = 'dropdown';
        }
    }
    return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'tinyforge_menu_set_dropdown', 10, 2 );

/* 8.3 - Displays navigation to next/previous pages when applicable.
 *
 * @since Tiny Forge 1.0
 */
if ( ! function_exists( 'tinyforge_content_nav' ) ) :

function tinyforge_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'tinyforge' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'tinyforge' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'tinyforge' ) ); ?></div>
		</nav><!-- #<?php echo $html_id; ?> .navigation -->
	<?php endif;
}
endif;

/* 9.0 - Adjust content_width value for full-width and single image attachment templates, and when there are no active widgets in the sidebar.
 *
 * @since Tiny Forge 1.0
 */
function tinyforge_content_width() {
	if ( is_page_template( 'page-templates/full-width.php' ) || is_attachment() || ! is_active_sidebar( 'sidebar-1' ) ) {
		global $content_width;
		$content_width = 960;
	}
}
add_action( 'template_redirect', 'tinyforge_content_width' );

/* 10.0 - Content meta information.
 *
 * 10.1 - Tip26 - Print HTML bellow post title with meta information for the current post date/time and author.
 *
 * Create your own tinyforge_entry_meta_top() to override in a child theme.
 *
 * @since Tiny Forge 1.0
 */
if ( ! function_exists( 'tinyforge_entry_meta_top' ) ) :

function tinyforge_entry_meta_top() {
	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date updated" datetime="%3$s" itemprop="datePublished">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard" itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><a class="url fn n" href="%1$s" title="%2$s" rel="author" itemprop="url">%3$s</a></span></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'tinyforge' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is the date and 2 is the author's name
		$utility_text = __( '%1$s <span class="meta-separator">&bull;</span> <span class="by-author">%2$s</span> ', 'tinyforge' );

	printf(
		$utility_text,
		$date,
		$author
	);
}
endif;

/* 10.2 - Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own tinyforge_entry_meta() to override in a child theme.
 *
 * @since Tiny Forge 1.0
 */
if ( ! function_exists( 'tinyforge_entry_meta' ) ) :

function tinyforge_entry_meta() {
	// Translators: used between list items, there is a space after the comma
	$categories_list = get_the_category_list( __( '</span>, <span itemprop="articleSection">', 'tinyforge' ) );

	// Translators: used between list items, there is a space after the comma
	$tag_list = get_the_tag_list( '', __( ', ', 'tinyforge' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date updated" datetime="%3$s" itemprop="datePublished">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard" itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><a class="url fn n" href="%1$s" title="%2$s" rel="author" itemprop="url">%3$s</a></span></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'tinyforge' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
	if ( $tag_list ) {
		$utility_text = __( 'Posted in <span itemprop="articleSection">%1$s</span> and tagged <span itemprop="keywords">%2$s</span> on %3$s<span class="by-author"> by %4$s</span>.', 'tinyforge' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'Posted in <span itemprop="articleSection">%1$s</span> on %3$s<span class="by-author"> by %4$s</span>.', 'tinyforge' );
	} else {
		$utility_text = __( 'Posted on %3$s<span class="by-author"> by %4$s</span>.', 'tinyforge' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;

/* 11.0 - Comments and pingbacks.
 *
 * 11.1 - Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own tinyforge_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Tiny Forge 1.0
 */
if ( ! function_exists( 'tinyforge_comment' ) ) :

function tinyforge_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'tinyforge' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'tinyforge' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment" itemprop="comment" itemscope itemtype="http://schema.org/UserComments">
			<header class="comment-meta comment-author vcard" itemprop="creator" itemscope itemtype="http://schema.org/Person">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite class="fn">%1$s %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually
						( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'tinyforge' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s" itemprop="commentTime">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						// translators: 1: date, 2: time
						sprintf( __( '%1$s at %2$s', 'tinyforge' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'tinyforge' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment" itemprop="commentText">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'tinyforge' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'tinyforge' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;

// 11.2 - Add Schema.org author markup to comment author links.
if ( ! function_exists( 'tinyforge_comment_author_hook' ) ) :

function tinyforge_comment_author_hook( $author_code ) {
	if (substr($author_code, 0, 2) == '<a') {
		$author_code = substr($author_code, 0, -1) . ' itemprop="url">';
	}
	return '<p class="comment-author-name" itemprop="name">' . $author_code . '</p>'; // Can't use a span tag because of conflicting styles on .bypostauthor
}
add_filter('get_comment_author_link', 'tinyforge_comment_author_hook');
endif;

/* 12.0 - Other functions.
 *
 * 12.1 - Tip82 - No more jumping for read more link.
 * Clicking on "read more" or "continue reading" sends user to the top of the post, not to the place marked with "more".
 */
/* function tinyforge_remove_more_jump_link($link) { 
$offset = strpos($link, '#more-');
if ($offset) {
$end = strpos($link, '"',$offset);
}
if ($end) {
$link = substr_replace($link, '', $offset, $end-$offset);
}
return $link;
}
add_filter('the_content_more_link', 'tinyforge_remove_more_jump_link'); */

// 12.2 - Tip28 - Remove curly quotes in WordPress.
remove_filter('the_content', 'wptexturize');

/* 12.3 - Tip23 - Properly resize videos, inserted with oembed.
 * By Marty Kokes: http://wordpress.org/support/topic/properly-resizing-videos-possible-code-addition
 */
function tinyforge_css_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="video-wrapper"><figure class="video-container">'.$html.'</figure></div>';
    return $return;
}
add_filter( 'embed_oembed_html', 'tinyforge_css_oembed_filter', 10, 4 ) ;

/* 12.4 - Tip81 - Completely disable the Post Formats UI in the post editor screen.
 * Have a normal/business website and do not really use or need Post Formats? http://www.wptavern.com/post-format-history-and-wordpress-3-6
 * Uncomment next line to completely disable the Post Formats UI in the post editor screen:
 */
// add_filter( 'enable_post_format_ui', '__return_false' );

// 12.5 - Tip08 - Remove junk from head.
/* remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link'); */

// 12.6 - Tip09 - Remove WordPress version info from head and feeds.
/* function tinyforge_complete_version_removal() {
	return '';
}
add_filter('the_generator', 'tinyforge_complete_version_removal'); */