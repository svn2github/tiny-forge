<?php
/**
 * The template for displaying Search Results pages
 *
 * @since Tiny Forge 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<main id="content" role="main" itemscope itemtype="http://schema.org/SearchResultsPage">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title" itemprop="headline"><span class="icon-webfont el-icon-search"></span> <?php printf( __( 'Search Results for: %s', 'tinyforge' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<?php tinyforge_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php tinyforge_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'tinyforge' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'tinyforge' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</main><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>