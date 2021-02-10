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

  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <header>
                <section class="search">
                    <div class="container">
                        Pesquisa
                    </div>
                </section>
                <section class="top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="brand col-3 col-sm-6">
                                Logo
                            </div>
                            <div class="second-column col-9 col-sm-6">
                                <div class="account">
                                    Conta
                                </div>
                                <nav class="main-menu">
                                    <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location'    => 'tema_juliano_main_menu'    
                                            )
                                        );
                                    ?>
                                </nav>    
                            </div>                    
                        </div>
                    </div>
                </section>
            </header>