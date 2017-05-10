<?php
get_header(); ?>

    <div class="col-md-12 col-lg-8">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <div class="row">

                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'single' ); ?>

                        <?php

//                        if ( comments_open() || get_comments_number() ) :
//                            comments_template();
//                        endif;

                    endwhile; // End of the loop.
                    ?>

                </div>

            </main><!-- #main -->
        </div><!-- #primary -->

    </div>

<?php
get_sidebar();
get_footer();
