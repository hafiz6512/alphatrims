<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alpha
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-item">

		<?php if ( has_post_thumbnail() ) { ?>
			<div class="post-thumb mr-0"><?php alpha_post_thumbnail(); ?></div>
		<?php } ?>

		<header class="entry-header">
			<?php
			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta mb-3">
					<?php
					alpha_posted_on();
					alpha_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif;

			if ( is_singular() ) :
				the_title( '<h2 class="entry-title bdr-title">', '</h2>' );
			else :
				the_title( '<h2 class="entry-title bdr-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'alpha' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alpha' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php alpha_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
