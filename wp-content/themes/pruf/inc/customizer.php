<?php
/**
 * pruf Theme Customizer
 *
 * @package pruf
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pruf_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Sidebar links pages
    $wp_customize->add_section( 'sidebar_section', array(
        'title' => 'Sidebar links',
        'priority' => 30
    ) );

    // link preview
    // text
    $wp_customize->add_setting( 'sidebar_link_preview', array(
        'default' => 'Some text is here...'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_link_preview_control', array(
        'label' => 'Link block 1',
        'section' => 'sidebar_section',
        'settings' => 'sidebar_link_preview',
    ) ) );

    // bg image
    $wp_customize->add_setting( 'sidebar_img_preview', array() );

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'sidebar_img_preview_control', array(
        'label' => 'Image block 1',
        'section' => 'sidebar_section',
        'settings' => 'sidebar_img_preview',
        'width' => 850,
        'height' => 400
    ) ) );

    // link page
    $wp_customize->add_setting( 'sidebar_page_preview', array() );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_page_preview_control', array(
        'label' => 'Link block 1',
        'section' => 'sidebar_section',
        'settings' => 'sidebar_page_preview',
        'type' => 'dropdown-pages',
    ) ) );

    // link reports
    // text
    $wp_customize->add_setting( 'sidebar_link_reports', array(
        'default' => 'Some text is here...'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_link_reports_control', array(
        'label' => 'Link block 2',
        'section' => 'sidebar_section',
        'settings' => 'sidebar_link_reports',
    ) ) );

    // bg image
    $wp_customize->add_setting( 'sidebar_img_reports', array() );

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'sidebar_img_reports_control', array(
        'label' => 'Image block 2',
        'section' => 'sidebar_section',
        'settings' => 'sidebar_img_reports',
        'width' => 850,
        'height' => 400
    ) ) );

    // link page
    $wp_customize->add_setting( 'sidebar_page_reports', array() );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_page_reports_control', array(
        'label' => 'Link block 2',
        'section' => 'sidebar_section',
        'settings' => 'sidebar_page_reports',
        'type' => 'dropdown-pages',
    ) ) );

    // link projects
    // text
    $wp_customize->add_setting( 'sidebar_link_projects', array(
        'default' => 'Some text is here...'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_link_projects_control', array(
        'label' => 'Link block 3',
        'section' => 'sidebar_section',
        'settings' => 'sidebar_link_projects',
    ) ) );

    // bg image
    $wp_customize->add_setting( 'sidebar_img_projects', array() );

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'sidebar_img_projects_control', array(
        'label' => 'Image block 3',
        'section' => 'sidebar_section',
        'settings' => 'sidebar_img_projects',
        'width' => 850,
        'height' => 400
    ) ) );

    // link page
    $wp_customize->add_setting( 'sidebar_page_projects', array() );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_page_projects_control', array(
        'label' => 'Link block 3',
        'section' => 'sidebar_section',
        'settings' => 'sidebar_page_projects',
        'type' => 'dropdown-pages',
    ) ) );

    // link partners
    // text
    $wp_customize->add_setting( 'sidebar_link_partners', array(
        'default' => 'Some text is here...'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_link_partners_control', array(
        'label' => 'Link block 4',
        'section' => 'sidebar_section',
        'settings' => 'sidebar_link_partners',
    ) ) );

    // bg image
    $wp_customize->add_setting( 'sidebar_img_partners', array() );

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, 'sidebar_img_partners_control', array(
        'label' => 'Image block 4',
        'section' => 'sidebar_section',
        'settings' => 'sidebar_img_partners',
        'width' => 850,
        'height' => 400
    ) ) );

    // link page
    $wp_customize->add_setting( 'sidebar_page_partners', array() );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sidebar_page_partners_control', array(
        'label' => 'Link block 4',
        'section' => 'sidebar_section',
        'settings' => 'sidebar_page_partners',
        'type' => 'dropdown-pages',
    ) ) );

}
add_action( 'customize_register', 'pruf_customize_register' );

// Output customize css
function pruf_customize_css() { ?>

    <style type="text/css">

        .sidebar-preview {
            background-image: url(<?php echo wp_get_attachment_url( get_theme_mod( 'sidebar_img_preview' ) ); ?>);
        }

        .sidebar-reports {
            background-image: url(<?php echo wp_get_attachment_url( get_theme_mod( 'sidebar_img_reports' ) ); ?>);
        }

        .sidebar-projects {
            background-image: url(<?php echo wp_get_attachment_url( get_theme_mod( 'sidebar_img_projects' ) ); ?>);
        }

        .sidebar-partners {
            background-image: url(<?php echo wp_get_attachment_url( get_theme_mod( 'sidebar_img_partners' ) ); ?>);
        }

    </style>

<?php };

add_action( 'wp_head', 'pruf_customize_css' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pruf_customize_preview_js() {
	wp_enqueue_script( 'pruf_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'pruf_customize_preview_js' );
