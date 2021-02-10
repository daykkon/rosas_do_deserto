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
    <footer>
        <section class="footer-widgets">
            <div class="container">
                <div class="row">Widgets do rodapé</div>
            </div>
        </section>
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="copyright-text col-12 col-md-6">Copyright</div>
                    <div class="footer-menu col-12 col-md-6 text-left text-md-right">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'tema_juliano_footer_menu'
                                )                            
                            );
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>