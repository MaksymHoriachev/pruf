<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pruf
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Ничего не найдено', 'pruf' ); ?></h1>
	</header><!-- .page-header -->

    <div class="page-content">
        <p><?php esc_html_e( 'Похоже, в этом месте ничего не найдено. Может быть, попробуйте одну из ссылок ниже или поиск.', 'pruf' ); ?></p>

        <?php get_search_form(); ?>

        <?php the_widget( 'WP_Widget_Recent_Posts', 'title=Недавние посты&number=10' ); ?>

    </div><!-- .page-content -->

	</div><!-- .page-content -->
</section><!-- .no-results -->
