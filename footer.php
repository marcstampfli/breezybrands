<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php echo do_shortcode("[copyrightText]"); ?>

					</div><!-- .site-info -->

					<div class="marc">

						Website by <a href="https://marcstampfli.com" target="_blank">Marc Stämpfli</a>

					</div>

					<div class="get-consultation">

						<a href="<?php echo get_permalink(25); ?>" class="cta-footer">Get a free consultation <i class="fa fa-long-arrow-right"></i></a>
						
					</div>



				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

