<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="social-network fixed">
    <ul>
        <li>
            <?php if ( get_theme_mod( 'facebook_display' ) == 'Yes' ) { ?>
                <a href="https://<?php echo get_theme_mod( 'facebook_link' ); ?>" target="_blank" rel="nofollow noopener" class="icon-facebook"></a>
            <?php }; ?>
        </li>
        <li>
            <?php if ( get_theme_mod( 'instagram_display' ) == 'Yes' ) { ?>
                <a href="https://<?php echo get_theme_mod( 'instagram_link' ); ?>" target="_blank" rel="nofollow noopener" class="icon-instagram"></a>
            <?php }; ?>
        </li>
        <li>
            <?php if ( get_theme_mod( 'vk_display' ) == 'Yes' ) { ?>
                <a href="https://<?php echo get_theme_mod( 'vk_link' ); ?>" target="_blank" rel="nofollow noopener" class="icon-vkontakte"></a>
            <?php }; ?>
        </li>
        <li>
            <?php if ( get_theme_mod( 'youtube_display' ) == 'Yes' ) { ?>
                <a href="https://<?php echo get_theme_mod( 'youtube_link' ); ?>" target="_blank" rel="nofollow noopener" class="icon-youtube"></a>
            <?php }; ?>
        </li>
    </ul>
</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pruf' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-12">

                    <div class="site-header-inner">

                        <div class="site-branding">
                            <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title-link" rel="home"><?php echo get_theme_mod( 'header_logo_text1' ); ?><span><?php echo get_theme_mod( 'header_logo_text2' ); ?></span></a>
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
