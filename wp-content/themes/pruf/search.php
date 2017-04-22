<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package pruf
 */

get_header(); ?>

    <div class="col-12">

        <section id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                if ( have_posts() ) : ?>

                    <?php get_search_form(); ?>

                    <header class="page-header">
                        <h1 class="page-title loop-title"><?php printf( esc_html__( 'Результаты поиска для: %s', 'pruf' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header><!-- .page-header -->

                <div class="row">

                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'search' );

                    endwhile; ?>

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

                </div>

            </main><!-- #main -->
        </section><!-- #primary -->

    </div>



<?php
get_footer();
