<?php
/**
 * Customizer: accent colour + footer credit text.
 *
 * @package Starter_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function starter_theme_customize_register( $wp_customize ) {

	$wp_customize->add_setting( 'starter_accent_color', array(
		'default'           => '#2563eb',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'starter_accent_color',
		array(
			'label'   => __( 'Accent Colour', 'starter-theme' ),
			'section' => 'colors',
		)
	) );

	$wp_customize->add_section( 'starter_theme_footer', array(
		'title'    => __( 'Footer', 'starter-theme' ),
		'priority' => 120,
	) );

	$wp_customize->add_setting( 'starter_footer_text', array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	) );

	$wp_customize->add_control( 'starter_footer_text', array(
		'label'       => __( 'Footer Credit Text', 'starter-theme' ),
		'description' => __( 'Leave empty for the default copyright line.', 'starter-theme' ),
		'section'     => 'starter_theme_footer',
		'type'        => 'text',
	) );
}
add_action( 'customize_register', 'starter_theme_customize_register' );
