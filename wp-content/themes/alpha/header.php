<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alpha
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<style type="text/css">
	.site-banner:after{content: "";width: 100%;position: absolute;left: 0;bottom: 0;right: 0;z-index: 10;display: block;}
	.site-banner:after{background: url(<?php echo get_stylesheet_directory_uri() ?>/images/bottom_cover_gray_3.png) no-repeat top center;background-size: 100% 100%;height: 80px;}
	</style>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php $stickyPad = ( is_front_page() ) ? '76px' : '100px' ; ?>

<div class="site-main" style="padding-top: <?php echo $stickyPad; ?>;">
	<header id="mainHeader" class="site-header">
		<div class="header-container">
			<div class="site-logo navbar-brand">
				<?php
				if( get_custom_logo() ) {
					the_custom_logo();
				} else { ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Alpha</a>
				<?php } ?>
			</div>

			<nav class="navbar main-navbar navbar-expand-lg">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbarContent" aria-controls="mainNavbarContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</button>

				<div class="collapse navbar-collapse" id="mainNavbarContent">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'menu_class'     => 'navbar-nav ml-auto',
								'container'      => 'ul'
							)
						);
					?>
				</div>
			</nav>
		</div>
	</header><!-- #Header -->

	<?php if ( is_front_page() ) { ?>
		<section class="home-slider">
			<div id="homeBannerSlider" class="carousel carousel-fade slide">
				<ol class="carousel-indicators">
					<li data-target="#homeBannerSlider" data-slide-to="0" class="active"></li>
					<li data-target="#homeBannerSlider" data-slide-to="1"></li>
					<li data-target="#homeBannerSlider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active imgCover" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/slide-img-1.jpg);">
						<div class="slider-caption">
							<div class="caption-content">
								<span class="mask animation-delay-1" data-animation="animated fadeInLeft"></span>
								<div class="icon-circle animation-delay-3" data-animation="animated bounceInDown"><i class="fa fa-dashcube" aria-hidden="true"></i></div>
								<h5 class="animation-delay-4" data-animation="animated fadeInDown">Best price, best selection</h5>
								<h1 class="animation-delay-2 bdr-title bdr-center" data-animation="animated bounceInDown">BIG SALE!</h1>
								<p class="animation-delay-4 lead" data-animation="animated fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolor sequi ea possimus soluta dicta.</p>
							</div>
						</div>
					</div>

					<div class="carousel-item imgCover" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/slide-img-4.jpg);">
						<div class="slider-caption">
							<div class="caption-content">
								<span class="mask animation-delay-1" data-animation="animated fadeInRight"></span>
								<div class="icon-circle animation-delay-3" data-animation="animated bounceInDown"><i class="fa fa-superpowers" aria-hidden="true"></i></div>
								<h5 class="animation-delay-4" data-animation="animated fadeInDown">Style, Match, Mix!</h5>
								<h1 class="animation-delay-2 bdr-title bdr-center" data-animation="animated zoomIn">Street style</h1>
								<p class="animation-delay-4 lead" data-animation="animated fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolor sequi ea possimus soluta dicta.</p>
							</div>
						</div>
					</div>

					<div class="carousel-item imgCover" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/slide-img-2.jpg);">
						<div class="slider-caption">
							<div class="caption-content">
								<span class="mask animation-delay-1" data-animation="animated fadeInLeft"></span>
								<div class="icon-circle animation-delay-3" data-animation="animated bounceInDown"><i class="fa fa-connectdevelop" aria-hidden="true"></i></div>
								<h5 class="animation-delay-4" data-animation="animated fadeInDown">Best T-Shirts you could ever imagine</h5>
								<h1 class="animation-delay-2 bdr-title bdr-center" data-animation="animated rollIn">Be Trendy</h1>
								<p class="animation-delay-4 lead" data-animation="animated fadeInUp">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,</p>
							</div>
						</div>
					</div>
				</div>

				<a class="carousel-control-prev" href="#homeBannerSlider" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#homeBannerSlider" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
	    </section>
	<?php } else { ?>

		<?php
			$featureImgDefult = get_stylesheet_directory_uri() . '/images/slide-img-4.jpg';
			$featureImg = ( get_the_post_thumbnail_url() ) ? get_the_post_thumbnail_url() : $featureImgDefult;
		?>

		<section class="site-banner">
			<span id="bnrParallax" class="dhc-parallax-bg" style="background-image: url(<?php echo $featureImg; ?>);"><span class="mask-wrapper"></span></span>
			<div class="banner-caption flex-center">
				<?php
					if ( is_404() ) { ?>
						<h1 class="bdr-title bdr-center">404 Page</h1>
					<?php } else if ( is_home() ) { ?>
						<h1 class="bdr-title bdr-center">Blog</h1>
					<?php } else {
						the_title( '<h1 class="page-title bdr-title bdr-center">', '</h1>' );
					}
				?>
			</div>
		</section>

	<?php } ?>
