<?php
get_header(); ?>

    <div class="col-12">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <div class="container">
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
                </div><!-- .container -->

            </main><!-- #main -->
        </div><!-- #primary -->

    </div>

<?php
get_footer();
