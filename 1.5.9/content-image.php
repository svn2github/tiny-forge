<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @since Tiny Forge 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/ImageObject">
		<div class="entry-content" itemprop="articleBody">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'tinyforge' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="url">
				<h1><?php the_title(); ?></h1>
				<h2><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></h2>
			</a>
			<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'tinyforge' ) . '</span>', __( '1 Reply', 'tinyforge' ), __( '% Replies', 'tinyforge' ) ); ?>
			</div><!-- .comments-link -->
			<?php endif; // have comments ?>
			<?php edit_post_link( __( 'Edit', 'tinyforge' ), ' <span class="meta-separator">&bull;</span> <span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
