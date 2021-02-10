<?php

    /*
    Template name: Home Page
    */

get_header();
?>
    <div class="content-area">
        <main>
            <section class="slider">
                <div class="div container">
                    <div class="div row">Slider</div>
                </div>
            </section>
            <section class="popular-products">
                <div class="div container">
                    <div class="div row">Produtos Populares</div>
                </div>
            </section>
            <section class="new-arrivals">
                <div class="div container">
                    <div class="div row">Lançamentos</div>
                </div>
            </section>
            <section class="deal-of-the-week">
                <div class="div container">
                    <div class="div row">Promoções da Semana</div>
                </div>
            </section>
            <section class="lab-blog">
                <div class="div container">
                    <div class="div row">
                        <?php
                            if( have_posts() ):
                                while( have_posts() ): the_post();
                                ?>
                                    <article>
                                        <h2><?php the_title(); ?></h2>
                                        <div><?php the_content(); ?></div>
                                    </article>
                                <?php
                                endwhile;
                            else:
                                ?>
                                    <p>Nothing to display.</p>
                                <?php
                            endif
                        ?>
                    </div>
                </div>
            </section>
        <main>
    </div>
<?php get_footer(); ?>