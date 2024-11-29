<?php 

add_action( 'init', function () {

        register_post_type( 'slider', array(
            'labels'       => array(
                'name'          => __( 'Slider', 'wooeshop' ),
                'singular_name' => __( 'Slider', 'wooeshop' ),
                'add_new'       => __( 'Add new slide', 'wooeshop' ),
                'add_new_item'  => __( 'New slide', 'wooeshop' ),
                'edit_item'     => __( 'Edit', 'wooeshop' ),
                'new_item'      => __( 'New slide', 'wooeshop' ),
                'view_item'     => __( 'View', 'wooeshop' ),
                'menu_name'     => __( 'Slider', 'wooeshop' ),
                'all_items'     => __( 'All slides', 'wooeshop' ),
            ),
            'public'       => true,
            'supports'     => array( 'title', 'editor', 'thumbnail', ),
            'menu_icon'    => 'dashicons-format-gallery',
            'show_in_rest' => true,
            ) 
        );

        register_post_type( 'customerPhotoSlider', array(
            'labels'       => array(
                'name'          => __( 'Customer Photo Slider', 'wooeshop' ),
                'singular_name' => __( 'Customer Photo Slide', 'wooeshop' ),
                'add_new'       => __( 'Add new slide', 'wooeshop' ),
                'add_new_item'  => __( 'New slide', 'wooeshop' ),
                'edit_item'     => __( 'Edit', 'wooeshop' ),
                'new_item'      => __( 'New slide', 'wooeshop' ),
                'view_item'     => __( 'View', 'wooeshop' ),
                'menu_name'     => __( 'Customer Photo Slider', 'wooeshop' ),
                'all_items'     => __( 'All slides', 'wooeshop' ),
            ),
            'public'       => true,
            'supports'     => array( 'title', 'editor', 'thumbnail', ),
            'menu_icon'    => 'dashicons-format-gallery',
            'show_in_rest' => true,)
        );

        register_post_type( 'reviewSlider', array(
            'labels'       => array(
                'name'          => __( 'Review Slider', 'wooeshop' ),
                'singular_name' => __( 'Review Slide', 'wooeshop' ),
                'add_new'       => __( 'Add new review slide', 'wooeshop' ),
                'add_new_item'  => __( 'New review slide', 'wooeshop' ),
                'edit_item'     => __( 'Edit', 'wooeshop' ),
                'new_item'      => __( 'New review slide', 'wooeshop' ),
                'view_item'     => __( 'View', 'wooeshop' ),
                'menu_name'     => __( 'Review Slider', 'wooeshop' ),
                'all_items'     => __( 'All slides', 'wooeshop' ),
            ),
            'public'       => true,
            'supports'     => array( 'title', 'editor', 'thumbnail', ),
            'menu_icon'    => 'dashicons-format-gallery',
            'show_in_rest' => true,)
        );
    },
);

?>