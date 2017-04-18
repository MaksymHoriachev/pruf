<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pruf
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pruf' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-12">

                    <div class="site-header-inner">

                        <div class="site-branding">
                            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title-link" rel="home">pr<span>uf</span></a>
                        </div><!-- .site-branding -->

                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i></button>
                            <?php wp_nav_menu( array(
                                'theme_location' => 'menu-1',
                                'menu_id' => 'primary-menu',
                                'menu_class' => 'primary-menu'
                            ) ); ?>
                        </nav><!-- #site-navigation -->

                    </div>

				</div><!-- .site-header-inner -->
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content <?php if (is_page('home')) { ?>home-page<?php }?>">
        <div class="container">
            <div class="row">
