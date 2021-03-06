<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Tiny_Forge
 * @since Tiny Forge 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" class="clear" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
	
		<?php
			/* Three footer widget areas */
			if ( ! is_404() ) : ?>
				<div id="footer-widgets" class="widget-area three" itemscope itemtype="http://schema.org/WPSideBar">
					<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-5' ); ?>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar-6' ); ?>
					<?php endif; ?>
				</div><!-- #footer-widgets -->
		<?php endif; ?>
	
		<div id="site-info">
			<!-- Footer copyright widget area - use standard WordPress text widget with something like this: &copy; 2013 Your Name. All rights reserved -->
			<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?><ul id="copyright-widget">
				<?php dynamic_sidebar( 'sidebar-7' ); ?> 
			</ul> <span class="meta-separator">&bull;</span> <?php endif; ?>
			<!--<a href="http://your-site.com" title="Web design & programing by your credentials" rel="designer">Web development by your credentials</a> <span class="meta-separator">&bull;</span> -->
			<!-- Tip61 - Discreet link to WordPress Admin panel in the footer -->
			<span id="site-admin-link"><?php wp_register('', ''); ?> <?php wp_loginout(); ?></span>
		</div><!-- #site-info -->
		
		<div id="site-generator">
			<?php do_action( 'tinyforge_credits' ); ?>
			<!-- Tip31 - Icon webfont support implementation and examples -->
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'tinyforge' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'tinyforge' ); ?>"><?php printf( __( 'Powered by %s', 'tinyforge' ), 'WordPress' ); ?> <div class="icon-webfont icon-wordpress"></div></a>
		</div><!-- #site-generator -->		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>