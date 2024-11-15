<?php

add_action( 'customize_register', function ( WP_Customize_Manager $wp_customize ) {

	$wp_customize->add_section( 'woo_myminigel_theme_options', array(
		'title' => __( 'Theme options', 'woo-myminigel' ),
		'priority' => 10,
	) );

	// Support Email
	$wp_customize->add_setting( 'woo_myminigel_support_email' );
	$wp_customize->add_control( 'woo_myminigel_support_email', array(
		'label' => __( 'Support email in footer', 'woo-myminigel' ),
		'section' => 'woo_myminigel_theme_options',
	) );

    // Shedule
    $wp_customize->add_setting( 'woo_myminigel_shedule' );
	$wp_customize->add_control( 'woo_myminigel_shedule', array(
		'label' => __( 'Shop schedule in footer', 'woo-myminigel' ),
		'section' => 'woo_myminigel_theme_options',
	) );

} );

function woo_myminigel_theme_options() {
	return array(
		'support_email' => get_theme_mod( 'woo_myminigel_support_email' ),
        'shop_schedule' => get_theme_mod( 'woo_myminigel_shedule' ),
	);
}