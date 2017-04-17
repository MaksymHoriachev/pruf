<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pruf
 */

get_header(); ?>

    <div class="col-md-12 col-lg-8">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <div class="row">

                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'single' ); ?>

                        <div class="col-12 single-navigation">

                            <?php the_post_navigation( array(
                                'prev_text'          => '&larr; Предыдущая статья',
                                'next_text'          => 'Следующая статья &rarr;',
                                'screen_reader_text' => 'Навигация поста'
                            ) ); ?>

                        </div>

                        <?php

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                </div>

            </main><!-- #main -->
        </div><!-- #primary -->

    </div>

<?php
get_sidebar();
get_footer();
