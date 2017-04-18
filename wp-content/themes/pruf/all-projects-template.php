<?php

/*
Template Name: All Projects
*/

get_header(); ?>

    <div class="col-12">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <h2 class="loop-title"><?php the_title(); ?></h2>

                <div class="row">

                    <?php

                    $args = array(
                        'post_type' => 'posts-projects',
                        'category_name' => 'projects',
                        'orderby' => 'date',
                        'paged' => get_query_var( 'paged' )
                    );

                    query_posts( $args );

                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', get_post_format() );

                        endwhile; ?>

                        <div class="col-12 blog-navigation">

                            <?php the_posts_navigation( array(
                                'prev_text'          => '&larr; Предыдущие статьи',
                                'next_text'          => 'Следующие статьи &rarr;',
                                'screen_reader_text' => 'Навигация'
                            ) ); ?>

                        </div>

                        <?php wp_reset_query(); ?>

                    <?php else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif; ?>

                </div><!-- .row -->

            </main><!-- #main -->
        </div><!-- #primary -->

    </div>

<?php
get_footer();