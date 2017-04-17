<?php

/*
Template Name: Posts Events
*/

get_header(); ?>
    <div class="col-12">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="row">
                    <?php $posts = get_posts ("post_type=post-event&category=8&orderby=date"); ?>
                    <?php if ($posts) : ?>
                        <?php foreach ($posts as $post) : setup_postdata ($post);
                            get_template_part( 'template-parts/content', 'events');
                        endforeach; endif; ?>
                    <h2 class="header-center col-12">Анонсы</h2>
                    <?php $posts = get_posts ("post_type=post-event&category=9&orderby=date&numberposts=3"); ?>
                    <?php if ($posts) : ?>
                        <?php foreach ($posts as $post) : setup_postdata ($post);
                            get_template_part( 'template-parts/content');
                        endforeach; endif; ?>
                    <h2 class="header-center col-12">Отчеты</h2>
                    <?php $posts = get_posts ("post_type=post-event&category=10&orderby=date&numberposts=3"); ?>
                    <?php if ($posts) : ?>
                        <?php foreach ($posts as $post) : setup_postdata ($post);
                            get_template_part( 'template-parts/content');
                        endforeach; endif; ?>
                </div><!-- .row -->
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
<?php
get_footer();
