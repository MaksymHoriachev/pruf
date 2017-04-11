<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pruf
 */

?>

<div class="col-md-12 col-lg-4 entry-post">

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/600x400.png" alt="img">
                <?php }; ?>
            </a>
        </div>

        <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );; ?>

        <header class="entry-header">


            <?php


            if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php pruf_posted_on(); ?>
                </div><!-- .entry-meta -->
                <?php
            endif; ?>
        </header>

        <div class="entry-content">
            <?php
            the_content( sprintf(
            /* translators: %s: Name of current post. */
                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pruf' ), array( 'span' => array( 'class' => array() ) ) ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pruf' ),
                'after'  => '</div>',
            ) );
            ?>
        </div>

        <footer class="entry-footer">
            <?php pruf_entry_footer(); ?>
        </footer>

    </article><!-- #post-## -->

</div>

