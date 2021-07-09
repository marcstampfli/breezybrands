<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

<div id="menu-overlay">
	<div class="main-menu-mobile wow rotateIn" data-wow-delay="0.7s">
		<a href="javascript:toggleMenu();">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Menu</span>
		</a>
	</div>
	<div class="main-menu">
		<div class="menu-main-menu-container">
			<?php
				wp_nav_menu(
					array(
						'theme_location' 	=> 'primary',
						'fallback_cb' 		=> '',
						'depth' 			=> 1,
						'walker'			=> new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
			?>
		</div>
		<div class="social-icons">
			<a href="https://instagram.com/breezy.brands_ac" title="Instagram" target="_blank" rel="noopener"><i class="fa fa-instagram"></i></a>
		</div>
	</div>
</div>
<header>
	<div class="container">
		<div class="logo<?php if (is_front_page()) { ?> wow fadeInLeft<?php } ?>"<?php if (is_front_page()) { ?> data-wow-delay="0.5s"<?php } ?>>
			<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/bb-logo.svg" alt="Breezy Brands" /></a>
		</div>
		<div class="<?php if (is_front_page()) { ?> wow fadeInRight<?php } ?>"<?php if (is_front_page()) { ?> data-wow-delay="1.5s"<?php } ?>>
			<?php
				wp_nav_menu(
					array(
						'theme_location' 	=> 'primary',
						'fallback_cb' 		=> '',
						'depth' 			=> 1,
						'walker'			=> new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
			?>
			<div class="mobile-menu">
				<a href="javascript:toggleMenu();"><i class="fa fa-bars"></i></a>
			</div>
		</div>
	</div>
</header>