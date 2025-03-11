<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage brandium
 * @since brandium 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function brandium_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Brandium_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Brandium Pro', 'brandium' ),
		'button_text'      => __( 'Upgrade Pro', 'brandium' ),
		'url'              => esc_url( BRANDIUM_BUY_NOW ),
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'brandium_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function brandium_custom_control_scripts() {
	wp_enqueue_script( 'brandium-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'brandium_custom_control_scripts' );