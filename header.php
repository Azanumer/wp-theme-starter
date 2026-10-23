<?php
/**
 * Theme header.
 *
 * @package Starter_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="site-wrap">
		<div class="site-branding">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php
			}
			?>
		</div>

		<nav class="main-navigation" aria-label="<?php esc_attr_e( 'Primary', 'starter-theme' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class'     => 'primary-menu',
				'fallback_cb'    => 'wp_page_menu',
			) );
			?>
		</nav>
	</div>
</header>

<main id="primary" class="site-content">
	<div class="site-wrap">
