<?php
/**
 * Custom Theme customizer options for this theme.
 *
 * @package WordPress
 * @subpackage Diehardcoder
 * @since Diehardcoder 1.0
 */
/**
 * My Custom Options
 */

function dhc_theme_customizer( $wp_customize ) {

	$wp_customize->add_panel(
		'my_custom_options',
		array(
			'title'       => __( 'My Custom Options', 'diehardcoder' ),
			'description' => __( '', 'diehardcoder' ),
			'capability'  => 'edit_theme_options',
			'priority'    => 10,
		)
	);

	$wp_customize->add_section(
		'home_banner_options',
		array(
			'title'       => __( 'Home Banner Options', 'diehardcoder' ),
			'description' => __( '', 'diehardcoder' ),
			'panel'       => 'my_custom_options',
			'capability'  => 'edit_theme_options',
			'priority'    => 10,
		)
	);

	//add setting to your section
	$wp_customize->add_setting(
	    'theme_slug_customizer_url',
	    array(
	        'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
	    )
	);
	$wp_customize->add_control(
	    'theme_slug_customizer_url',
	    array(
			'label'   => esc_html__( 'Your Setting with URL input', 'diehardcoder' ),
			'section' => 'home_banner_options',
			'type'    => 'url'
	    )
	);

	// Add Controls
	$wp_customize->add_setting('home_banner_image', array(
		'transport' => 'refresh',
		'height'    => 10,
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control( $wp_customize,
			'home_banner_image_control',
			array(
				'label'    => __('Home Banner Image', 'diehardcoder'),
				'section'  => 'home_banner_options',
				'settings' => 'home_banner_image',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial(
		'home_banner_image',
		array(
			'selector' => '.banner-caption',
			'type'     => 'image',
		)
	);

	$wp_customize->add_setting(
	    'home_banner_title',
	    array(
	        'sanitize_callback' => 'wp_filter_nohtml_kses'
	    )
	);

	$wp_customize->add_control(
	    'home_banner_title',
	    array(
			'label'    => esc_html__( 'Home Banner Title', 'diehardcoder' ),
			'section'  => 'home_banner_options',
			'type'     => 'text',
			'settings' => 'home_banner_title',
	    )
	);

	$wp_customize->add_setting(
	    'home_banner_desc',
	    array(
	        'sanitize_callback' => 'wp_filter_nohtml_kses'
	    )
	);

	$wp_customize->add_control(
	    'home_banner_desc',
	    array(
			'label'    => esc_html__( 'Home Banner Description', 'diehardcoder' ),
			'section'  => 'home_banner_options',
			'type'     => 'textarea',
			'settings' => 'home_banner_desc',
	    )
	);
}

add_action( 'customize_register', 'dhc_theme_customizer' );
