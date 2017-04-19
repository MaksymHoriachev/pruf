<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pruf
 */

get_header(); ?>

    <div class="col-12">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Ой! Эта страница не найдена.', 'pruf' ); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php esc_html_e( 'Похоже, в этом месте ничего не найдено. Может быть, попробуйте одну из ссылок ниже или поиск.', 'pruf' ); ?></p>

                        <?php get_search_form(); ?>

                        <?php the_widget( 'WP_Widget_Recent_Posts', 'title=Недавние посты&number=10' ); ?>

                    </div><!-- .page-content -->
                </section><!-- .error-404 -->

            </main><!-- #main -->
        </div><!-- #primary -->

    </div>



<?php
get_footer();
