<?php
get_header(); ?>

    <div class="col-12">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <h2 class="blog-title">Блог</h2>

                <div class="row">

                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', get_post_format() );

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif; ?>

                </div><!-- .row -->

            </main><!-- #main -->
        </div><!-- #primary -->

    </div>

<?php
get_footer();
