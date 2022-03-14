<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package alpha
 */

get_header();
?>

	<main id="main-content" class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="serch-content">
						<?php if ( have_posts() ) : ?>
							<header class="page-header">
								<h1 class="page-title">
									<?php
									printf( esc_html__( 'Search Results for: %s', 'alpha' ), '<span>' . get_search_query() . '</span>' );
									?>
								</h1>
							</header><!-- .page-header -->

							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>

		</div>
	</main><!-- #main -->

<?php
get_footer();
