<?php

/*
Template Name: Posts Projects
*/

get_header(); ?>
    <div class="col-12">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <div class="row">

                    <?php

                    $posts = get_posts( array(
                        'post_type' => 'posts-projects',
                        'category' => 11,
                        'orderby' => 'date'
                    ));

                    if ($posts) :
                        foreach ($posts as $post) : setup_postdata ($post);

                            get_template_part( 'template-parts/content', 'projects');

                        endforeach;
                    endif;

                    wp_reset_postdata();

                    ?>

                    <div class="col-12 pages-section">
                        <div class="row">
                            <h2 class="header-center col-12">Проекты</h2>
                            <?php $posts = get_posts ("post_type=posts-projects&category=12&orderby=date&numberposts=3"); ?>
                            <?php if ($posts) : ?>
                                <?php
                                foreach ($posts as $post) : setup_postdata ($post);
                                    get_template_part( 'template-parts/content');
                                endforeach;
                            endif; ?>
                            <?php wp_reset_postdata(); ?>
                            <div class="col-12 page-btn-link">
                                <a href="<?php echo get_page_link( 160 ); ?>" class="">Просмотреть все &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div><!-- .row -->

            </main><!-- #main -->
        </div><!-- #primary -->

    </div>
<?php
get_footer();
