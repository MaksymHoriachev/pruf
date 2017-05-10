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

    <div class="col-12 front-section">
        <div class="front-container">
            <h2 class="heading"><?php echo get_theme_mod( 'home_page_title' ); ?></h2>
            <p class="text-main-page">
<!--                <span>PR не ради PR</span> Свежее образование в мaтерии паблик рилейшнз-->
                <?php echo get_theme_mod( 'home_page_text' ); ?>
            </p>
        </div>
    </div>


</div>
</div>
</div><!-- #content -->

<?php wp_footer(); ?>

</body>
</html>
