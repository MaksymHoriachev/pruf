<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pruf
 */

get_header(); ?>

    <div class="container">
        <h3 class="loop-title"><?php the_title(); ?></h3>
        <div class="text-contacts">
            <?php
            while ( have_posts() ) : the_post();

                the_content( );

                // If comments are open or we have at least one comment, load up the comment template.


            endwhile; // End of the loop.
            ?>
        </div>
    </div>
<?php
get_footer();
