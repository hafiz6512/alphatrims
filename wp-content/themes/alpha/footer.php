<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alpha
 */

?>

	<footer class="main-footer py-5">
		<div class="container">
			<div class="footer-copyright">
				<p>&copy;
					<?php
					echo date_i18n(
						_x( 'Y', 'copyright date format', 'diehardcoder' )
					);
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				</p>
			</div>
		</div>
	</footer><!-- #site-footer -->

	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
