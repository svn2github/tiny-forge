<?php
/**
 * Template Name: Links
 *
 * Plugin required @link http://wordpress.org/plugins/link-manager/
 *
 * @since Tiny Forge 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div id="content" role="main">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
		<header class="entry-header">
			<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
		</header>

		<div class="entry-content" itemprop="articleBody">
			<ul id="links-main">
				<?php wp_list_bookmarks('orderby=name&order=ASC&title_before=<h3>&title_after=</h3>'); ?>
			</ul>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'tinyforge' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
	
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
