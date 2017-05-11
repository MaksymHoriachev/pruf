<?php

/*
Template Name: Template About-us
*/

get_header(); ?>

    <div class="col-12">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <div class="row">

                    <?php
                    if ( have_posts() ) :

                        $args = array(
                            'post_type' => 'posts-about-us',
                            'publish' => true,
                            'paged' => get_query_var('paged'),
                        );

                        query_posts($args);

                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'about-us' );

                        endwhile; ?>
                    <?php else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif; ?>

                </div><!-- .row -->

            </main><!-- #main -->
        </div><!-- #primary -->

    </div>

<?php
get_footer();
