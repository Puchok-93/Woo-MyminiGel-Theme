<?php

// Декларируем поддержку woocommerce
	function mytheme_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnail' );

		register_nav_menus( 
			array(
				'header-menu' => __('Header Menu'),
				'footer-menu' => __('Footer Menu'),
			)
			);
	}

    add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// Подключаем стили 

	// function theme_name_scripts() {
	// 	wp_enqueue_style( 'woocommyshop_style', get_stylesheet_directory_uri() . '/assets/css/style.css' );
	// }

	add_action( 'wp_enqueue_scripts', function() {
		wp_enqueue_style( 'woo-myminigel-google-font', 'https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap' );

		wp_enqueue_style( 'woo-myminigel-swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
		wp_enqueue_style( 'woo-myminigel-main-style', get_template_directory_uri() . '/assets/css/style.css');
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'woo-myminigel-swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true);
		wp_enqueue_script( 'woo-myminigel-app-script', get_template_directory_uri() . '/assets/js/script.js', array(), false, true);
	} );

	function wooeshop_dump( $data ) {
		echo "<pre>" . print_r( $data, 1 ) . "</pre>";
	}

	require_once get_template_directory() . '/incs/woocommerce-hooks.php';
	require_once get_template_directory() . '/incs/customizer.php';
	require_once get_template_directory() . '/incs/cpt.php';
