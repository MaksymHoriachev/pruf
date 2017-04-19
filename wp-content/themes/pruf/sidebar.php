<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pruf
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="col-md-12 col-lg-4 widget-area" role="complementary">

    <section class="sidebar-latest-posts">
        <h2 class="latest-posts-title">Последние записи</h2>
        <ul class="latest-posts-list">

            <?php ;

            $sidebarPost = new WP_query( array(
                'posts_per_page' => 5,
                'orderby' => 'date'
            ) );

            if ( $sidebarPost->have_posts() ) :
                while ( $sidebarPost->have_posts() ) : $sidebarPost->the_post(); ?>

                    <li class="latest-posts-item">
                        <a href="<?php the_permalink(); ?>">

                            <div class="row">
                                <div class="col-3 col-md-2 col-lg-5 col-xl-4">
                                    <?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'sidebar-thumbnails' );
                                    } else { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/300x300.png" alt="img">
                                    <?php }; ?>
                                </div>
                                <div class="col-9 col-md-10 col-lg-7 col-xl-8 latest-posts-item-content">
                                    <h4 class="latest-posts-item-title"><?php the_title(); ?></h4>
                                    <?php the_excerpt(); ?>
                                </div>

                            </div>
                        </a>
                    </li>

                <?php endwhile; ?>

            <?php else :

                echo '<p class="post-not-found">post not found</p>';

            endif;

            wp_reset_postdata();

            ?>

        </ul>
    </section>

    <section class="sidebar-links-pages">
        <ul class="links-pages-list">
            <li class="links-pages-item sidebar-preview">
                <a href="<?php echo get_permalink( get_theme_mod( 'sidebar_page_preview' ) ); ?>">
                    <span><?php echo get_theme_mod( 'sidebar_link_preview' ); ?></span>
                </a>
            </li>
            <li class="links-pages-item sidebar-reports">
                <a href="<?php echo get_permalink( get_theme_mod( 'sidebar_page_reports' ) ); ?>">
                    <span><?php echo get_theme_mod( 'sidebar_link_reports' ); ?></span>
                </a>
            </li>
            <li class="links-pages-item sidebar-projects">
                <a href="<?php echo get_permalink( get_theme_mod( 'sidebar_page_projects' ) ); ?>">
                    <span><?php echo get_theme_mod( 'sidebar_link_projects' ); ?></span>
                </a>
            </li>
            <li class="links-pages-item sidebar-partners">
                <a href="<?php echo get_permalink( get_theme_mod( 'sidebar_page_partners' ) ); ?>">
                    <span><?php echo get_theme_mod( 'sidebar_link_partners' ); ?></span>
                </a>
            </li>
        </ul>
    </section>

    <?php get_search_form(); ?>

</aside><!-- #secondary -->
