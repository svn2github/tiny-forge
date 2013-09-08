<?php
/**
 * Tiny Forge Theme Customizer
 *
 * @since Tiny Forge 1.2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tinyforge_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Add custom header logo. By Kirk Wight: http://kwight.ca/2012/12/02/adding-a-logo-uploader-to-your-wordpress-site-with-the-theme-customizer/
	// Create a new section for our logo upload.
	$wp_customize->add_section( 'tinyforge_logo_section' , array(
    'title'       => __( 'Logo', 'tinyforge' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	
	// Register our new setting.
	$wp_customize->add_setting( 'tinyforge_logo' );
	
	// Tell the Theme Customizer to let us use an image uploader for setting our logo.
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tinyforge_logo', array(
    'label'    => __( 'Logo', 'tinyforge' ),
    'section'  => 'tinyforge_logo_section',
    'settings' => 'tinyforge_logo',
	) ) );
}
add_action( 'customize_register', 'tinyforge_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tinyforge_customize_preview_js() {
	wp_enqueue_script( 'tinyforge_customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'tinyforge_customize_preview_js' );
