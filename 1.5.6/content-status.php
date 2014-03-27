<?php
/**
 * The template for displaying posts in the Status post format
 *
 * @since Tiny Forge 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/BlogPosting">
		<div class="entry-header">
			<header>
				<h1><?php the_author(); ?></h1>
				<h2 itemprop="headline"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'tinyforge' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark" itemprop="url"><?php echo get_the_date(); ?></a></h2>
			</header>
			<?php
			/**
			 * Filter the status avatar size.
			 *
			 * @since Tiny Forge 1.0
			 *
			 * @param int $size The height and width of the avatar in pixels.
			 */
			$status_avatar = apply_filters( 'tinyforge_status_avatar', 48 );
			echo get_avatar( get_the_author_meta( 'ID' ), $status_avatar );
			?>
		</div><!-- .entry-header -->

		<div class="entry-content" itemprop="articleBody">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'tinyforge' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'tinyforge' ) . '</span>', __( '1 Reply', 'tinyforge' ), __( '% Replies', 'tinyforge' ) ); ?>
			</div><!-- .comments-link -->
			<?php endif; // have comments ?>
			<?php edit_post_link( __( 'Edit', 'tinyforge' ), ' <span class="meta-separator">&bull;</span> <span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
