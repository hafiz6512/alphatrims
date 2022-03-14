<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>

	<section class="section-block">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="contact-left">
					<div class="address-box flex-center bgCover" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/our-office.jpg);">
						<div class="address-text">
							<h3 class="bdr-title bdr-center">Our Office</h3>
							<p><a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a> 218 Dr. Kudrat-E-khuda road, shahera tropical, Dhaka 1205</p>
							<p>Phone: (880) 1313978877</p>
						</div>
					</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="contact-form">
						<h2 class="bdr-title">Contact Form</h2>
						<?php echo do_shortcode( '[contact-form-7 id="16" title="Contact form"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();