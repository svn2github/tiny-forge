<?php
/**
 * A non-disruptive admin notice to inform users about additional resources.
 *
 * @since Tiny Forge 1.5.6
 *
 * Big thanks to Konstantin Kovshenin for the code! http://kovshenin.com
 */

// Don't nag users who can't switch themes.
if ( ! is_admin() || ! current_user_can( 'switch_themes' ) )
	return;

function tinyforge_admin_notice() {
	if ( isset( $_GET['tinyforge-notice-dismiss'] ) )
		set_theme_mod( 'notice-dismiss', true );

	$dismiss = get_theme_mod( 'notice-dismiss', false );
	if ( $dismiss )
		return;
	?>
	<div class="updated tinyforge-notice">
		<p><?php printf( __( 'Thank you for using Tiny Forge! IMPORTANT: Tiny Forge was succeeded by Tiny Framework theme, <a target="_blank" href="%s">please use Tiny Framework theme</a> for all new projects. Happy coding! <a href="%s">(hide this message)</a>', 'tinyforge' ), 'https://wordpress.org/support/topic/important-use-tiny-framework-theme-for-all-new-projects', esc_url( add_query_arg( 'tinyforge-notice-dismiss', 1 ) ) ); ?></p>
	</div>
	<?php
}
add_action( 'admin_notices', 'tinyforge_admin_notice' );