<?php

/*
Template Name: Posts Partners
*/

get_header(); ?>
    <div class="col-12">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <div class="row">

                    <div class="col-12 pages-section">
                        <div class="row">
                            <h2 class="header-center col-12"><?php the_title(); ?></h2>
                            <?php $posts = get_posts ("post_type=posts-partners&category=14&orderby=date&numberposts=3"); ?>
                            <?php if ($posts) : ?>
                                <?php
                                foreach ($posts as $post) : setup_postdata ($post);
                                    get_template_part( 'template-parts/content');
                                endforeach;
                            endif; ?>
                            <?php wp_reset_postdata(); ?>
                            <div class="col-12 page-btn-link">
                                <a href="<?php echo get_page_link( 171 ); ?>" class="">Просмотреть все проекты &rarr;</a>
                            </div>
                        </div>
                    </div>

                    <?php

                    $posts = get_posts( array(
                        'post_type' => 'posts-partners',
                        'category' => 13,
                        'orderby' => 'date'
                    ));

                    if ($posts) :
                        foreach ($posts as $post) : setup_postdata ($post);

                            get_template_part( 'template-parts/content', 'partners');

                        endforeach;
                    endif;

                    wp_reset_postdata();

                    ?>

                </div><!-- .row -->

            </main><!-- #main -->
        </div><!-- #primary -->

    </div>
<?php
get_footer();
