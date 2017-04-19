<?php
/**
 * pruf functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pruf
 */

if ( ! function_exists( 'pruf_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pruf_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on pruf, use a find and replace
	 * to change 'pruf' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'pruf', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'blog-thumbnails', 600, 400, true );
    add_image_size( 'sidebar-thumbnails', 300, 300, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'pruf' ),
        'footer' => __( 'Footer Menu'),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'pruf_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'pruf_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pruf_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pruf_content_width', 640 );
}
add_action( 'after_setup_theme', 'pruf_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pruf_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pruf' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'pruf' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pruf_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pruf_scripts() {
	wp_enqueue_style( 'pruf-style', get_stylesheet_uri() );

    wp_enqueue_style( 'pruf-bootstrap', get_template_directory_uri() . '/libs/bootstrap/dist/css/bootstrap.min.css' );

    wp_enqueue_style( 'pruf-font-awesome', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.min.css' );

    wp_enqueue_style( 'pruf-main', get_template_directory_uri() . '/css/main.min.css' );

    wp_enqueue_script( 'pruf-jquery-slim-js', get_template_directory_uri() . '/libs/jquery/dist/jquery.slim.min.js', array(), '', true );

    wp_enqueue_script( 'pruf-tether-js', get_template_directory_uri() . '/libs/tether/dist/js/tether.min.js', array(), '', true );

    wp_enqueue_script( 'pruf-bootstraps-js', get_template_directory_uri() . '/libs/bootstrap/dist/js/bootstrap.min.js', array(), '', true );

	wp_enqueue_script( 'pruf-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'pruf-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pruf_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * -------------------------------- Excerpt count length -------------------------------
 */
function blog_home_excerpt_length() {
    return 10;
};
add_filter( 'excerpt_length', 'blog_home_excerpt_length' );

function blog_home_excerpt_more(){
    return ' ...';
};
add_filter( 'excerpt_more', 'blog_home_excerpt_more' );

/**
 * -------------------------------- the custom post type -------------------------------
 */
