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

                        <?php the_widget( 'WP_Widget_Recent_Posts', 'title=Недавние посты&number=10' );

                        // Only show the widget if site has multiple categories.
                        if ( pruf_categorized_blog() ) :
                            ?>

                            <div class="widget widget_categories">
                                <h2 class="widget-title"><?php esc_html_e( 'Самые популярные категории', 'pruf' ); ?></h2>
                                <ul>
                                    <?php
                                    wp_list_categories( array(
                                        'orderby'    => 'count',
                                        'order'      => 'DESC',
                                        'show_count' => 1,
                                        'title_li'   => '',
                                        'number'     => 10,
                                    ) );
                                    ?>
                                </ul>
                            </div><!-- .widget -->

                            <?php
                        endif; ?>

                    </div><!-- .page-content -->
                </section><!-- .error-404 -->

            </main><!-- #main -->
        </div><!-- #primary -->

    </div>



<?php
get_footer();
