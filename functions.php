<?php
/**
 * Starter Theme functions and definitions.
 *
 * @package Starter_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'STARTER_THEME_VERSION', '1.0.0' );

/**
 * Theme setup: textdomain, title tag, thumbnails, HTML5, menus, logo.
 */
function starter_theme_setup() {
	load_theme_textdomain( 'starter-theme', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 240,
		'flex-width'  => true,
		'flex-height' => true,
	) );
	add_theme_support( 'customize-selective-refresh-widgets' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'starter-theme' ),
		'footer'  => __( 'Footer Menu', 'starter-theme' ),
	) );

	// Sensible default image sizes.
	add_image_size( 'starter-card', 640, 360, true );
	add_image_size( 'starter-hero', 1600, 900, true );
}
add_action( 'after_setup_theme', 'starter_theme_setup' );

/**
 * Widget areas.
 */
function starter_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'starter-theme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar, shown beside post and page content.', 'starter-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'starter-theme' ),
		'id'            => 'footer-widgets',
		'description'   => __( 'Footer widget area, shown above the site footer.', 'starter-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'starter_theme_widgets_init' );

/**
 * Front-end assets: one stylesheet, one small script, both versioned.
 */
function starter_theme_assets() {
	wp_enqueue_style(
		'starter-theme-style',
		get_stylesheet_uri(),
		array(),
		STARTER_THEME_VERSION
	);

	wp_enqueue_script(
		'starter-theme-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		STARTER_THEME_VERSION,
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starter_theme_assets' );

/**
 * Emit the accent colour chosen in the Customizer as a CSS variable.
 */
function starter_theme_customizer_css() {
	$accent = get_theme_mod( 'starter_accent_color', '#2563eb' );
	?>
	<style id="starter-theme-customizer">:root { --accent: <?php echo esc_attr( $accent ); ?>; }</style>
	<?php
}
add_action( 'wp_head', 'starter_theme_customizer_css' );

/**
 * Trim excerpts to a fixed word count.
 */
function starter_theme_excerpt_length() {
	return 32;
}
add_filter( 'excerpt_length', 'starter_theme_excerpt_length' );

/**
 * Load the Customizer settings.
 */
require get_template_directory() . '/inc/customizer.php';
