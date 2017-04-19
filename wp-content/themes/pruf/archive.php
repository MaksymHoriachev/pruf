<?php
get_header(); ?>

    <div class="col-12">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

            <?php
            if ( have_posts() ) : ?>


                <h2 class="loop-title">
                    <?php

                    if ( is_category() ) {
                        single_cat_title();
                    }
                    elseif ( is_tag() ) {
                        single_tag_title();
                    }
                    elseif ( is_author() ) {
                        the_post();
                        echo get_the_author();
                        rewind_posts();
                    }
                    elseif ( is_day() ) {
                        echo 'Архив за ' . get_the_date( 'd.m' );
                    }
                    elseif ( is_month() ) {
                        echo 'Архив за ' . get_the_date( 'm.Y' );
                    }
                    elseif ( is_year() ) {
                        echo 'Архив за ' . get_the_date( 'Y' ) . ' год';
                    }
                    else {
                        echo 'Архивы:';
                    };

                    ?>
                </h2><!-- archive -->

                <div class="row">

                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile; ?>

                </div>

                <div class="col-12 blog-navigation">

                    <?php the_posts_navigation( array(
                        'prev_text'          => '&larr; Предыдущие статьи',
                        'next_text'          => 'Следующие статьи &rarr;',
                        'screen_reader_text' => 'Навигация'
                    ) ); ?>

                </div>

            <?php else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

<?php
get_footer();
