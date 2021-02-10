<?php
    add_action( 'woocommerce_before_main_content', 'tema_juliano_open_container_row', 5 );
    function tema_juliano_open_container_row() {
        echo '<div class="container shop-content"><div class="row">';
    }

    add_action( 'woocommerce_after_main_content', 'tema_juliano_close_container_row', 5 );
    function tema_juliano_close_container_row() {
        echo '</div></div>';
    }

    add_action( 'woocommerce_before_main_content', 'tema_juliano_add_sidebar_tags', 6 );
    function tema_juliano_add_sidebar_tags() {
        echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
    }

    add_action( 'woocommerce_before_main_content', 'tema_juliano_close_sidebar_tags', 8 );
    function tema_juliano_close_sidebar_tags() {
        echo '</div>';    
    }

    add_action( 'woocommerce_before_main_content', 'tema_juliano_add_shop_tags', 9);
    function tema_juliano_add_shop_tags() {
        echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
    }

    add_action( 'woocommerce_after_main_content', 'tema_juliano_close_shop_tags', 4 );
    function tema_juliano_close_shop_tags() {
        echo '</div>';
    }

    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );
    add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

    /*  
    add_filter( 'woocommerce_show_page_title', 'tema_juliano_remove_shop_title' );
    function tema_juliano_remove_shop_title( $val ) {
        $val = false;
        return $val;
    }   
    */

    add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );