<?php
/**
 * The template used for displaying page content in page.php
 *
 * @since Tiny Forge 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
		<header class="entry-header">
			<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
			<?php // the_post_thumbnail(); ?><?php // Disable featured image before post title ?>
			<?php endif; ?>
			<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
		</header>

		<div class="entry-content" itemprop="articleBody">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'tinyforge' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'tinyforge' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
