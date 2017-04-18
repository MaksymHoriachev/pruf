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

    <div class="sidebar-latest-posts">
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

                            <div class="row align-items-center">
                                <div class="col-3 col-lg-4 col-xl-3">
                                    <?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'sidebar-thumbnails' );
                                    } else { ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/300x300.png" alt="img">
                                    <?php }; ?>
                                </div>
                                <p class="col-9 col-lg-8 col-xl-9 latest-posts-item-title">
                                    <?php the_title(); ?>
                                </p>
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
    </div>



</aside><!-- #secondary -->
