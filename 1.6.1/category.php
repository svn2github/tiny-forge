<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @since Tiny Forge 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<main id="content" role="main" itemscope itemtype="http://schema.org/CollectionPage">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<!-- Tip31 - Icon webfont support implementation and examples -->
				<h1 class="archive-title" itemprop="headline"><span class="icon-webfont el-icon-folder-open"></span> <?php printf( __( '%s', 'tinyforge' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta" itemprop="description"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header><!-- .archive-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			tinyforge_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</main><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>