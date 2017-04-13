<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pruf
 */

?>

<div class="col-12 entry-post">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <h2 class="entry-title-single"><?php the_title(); ?></h2>

        <div class="entry-meta">
            <span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author(); ?></a></span>
            <span><?php the_time('d.m.Y'); ?></span>
            <span>
                <?php

                $categories_list = get_the_category_list( esc_html__( ', ', 'pruf' ) );

                echo $categories_list;

                ; ?>
            </span>
        </div>

        <div class="entry-thumbnail">
            <div class="entry-thumbnail-link">
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'blog-thumbnails' );
                } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/600x400.png" alt="img">
                <?php }; ?>
            </div>
        </div>

        <div class="entry-excerpt-single">
            <?php the_content(); ?>
        </div>

    </article><!-- #post-## -->
</div>