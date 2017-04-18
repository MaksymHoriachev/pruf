<?php

/*
Template Name: Posts Events - Reports
*/

get_header(); ?>

    <div class="col-12">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <h2 class="loop-title">Отчеты</h2>

                <div class="row">

                    <?php

                    $args = array(
                        'post_type' => 'post-event',
                        'category_name' => 'reports',
                        'orderby' => 'date'
                    );

                    $posts = get_posts( $args );

                    if ( $posts ) :
                        foreach ($posts as $post) : setup_postdata ($post);

                            get_template_part( 'template-parts/content', get_post_format() );

                        endforeach; ?>

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

                </div><!-- .row -->

            </main><!-- #main -->
        </div><!-- #primary -->

    </div>

<?php
get_footer();