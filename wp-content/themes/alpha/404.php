<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package alpha
 */

get_header();
?>

	<main id="main-content" class="content-area">
		<div class="flex-center content-404">
			<div class="container">
				<section class="error-404 not-found">
					<?php
						$alpha_smilies = '<span class="smiley">' . sprintf(convert_smilies( ':)' )) .'</span>';
					?>
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'alpha' ); echo $alpha_smilies; ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'alpha' ); ?></p>

						<?php
						get_search_form();

						//the_widget( 'WP_Widget_Recent_Posts' );
						?>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
