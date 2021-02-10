<?php

/**
     * The main template file
     *
     * This is the most generic template file in a WordPress theme
     * and one of the two required files for a theme (the other being style.css).
     * It is used to display a page when nothing more specific matches a query.
     * E.g., it puts together the home page when no home.php file exists.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Tema Juliano
     */


function tema_juliano_scripts() {

    //bootstrap enqueue
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.6.0', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.6.0', 'all'  );
    
    //theme's mais stylesheet
    wp_enqueue_style( 'tema-juliano-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all'  );
}

add_action( 'wp_enqueue_scripts', 'tema_juliano_scripts' );

function tema_juliano_config(){
    register_nav_menus(
        array(
            'tema_juliano_main_menu'    => 'Tema do Juliano main menu',
            'tema_juliano_footer_menu'    => 'Tema do Juliano footer menu',
                
        )
    );
}

add_theme_support( 'woocommerce', 
    array(
        'thumbnail_image_width' => 255,
        'single_image_width'    => 255,
        'product_grid'          => 
        array(
            'default_rows'          => 10,
            'min_rows'              => 5,
            'default_columns'       => 1,
            'min_columns'           => 1,
            'max_columns'           => 1,
        )
    ) 
);

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

if( ! isset( $content_width ) ) {
    $content_width = 600;
}

add_action( 'after_setup_theme', 'tema_juliano_config', 0 );

require get_template_directory() . '/inc/wc-modifications.php';