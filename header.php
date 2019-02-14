<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="primary">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package camper
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="site-header nav-wrapper">
			<nav class="site-nav container-fluid">
				<div class="site-logo">
					<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$camper_description = get_bloginfo( 'description', 'display' );
						if ( $camper_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $camper_description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
				</div>
				<div class="menu-links">
					<button id="toggle" onclick="openMobileMenu()">&#9776;</button>
					<!-- <div id="toggle" onclick="openMobileMenu()" class="hamburger-menu">
						<div class="stick"></div>
						<div class="stick"></div>
						<div class="stick"></div>
					</div> -->
					<div class="nav-menu">
						<?php
							wp_nav_menu([
								'theme_location'	=> 'primary'
							]);
						?>
					</div>
				</div>
			</nav>
			<div id="mobileNav" class="mobile-view">
				<a href="javascript:void(0)" class="closebtn" onclick="closeMobileMenu()">&times;</a>
				<div class="mobile-nav">
					<?php
						wp_nav_menu([
							'theme_location'	=> 'primary'
						]);
					?>
				</div>
			</div>
		</header>