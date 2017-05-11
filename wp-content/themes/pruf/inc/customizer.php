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

	// header logo --------------------------------------------------------------
    // section
    $wp_customize->add_section( 'header_logo_section', array(
        'title' => 'Header logo',
        'priority' => 20
    ) );

    // logo section 1
    $wp_customize->add_setting( 'header_logo_text1', array(
        'default' => 'text'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_logo_text1_control', array(
        'label' => 'logo text left',
        'section' => 'header_logo_section',
        'settings' => 'header_logo_text1',
    ) ) );

    // logo section 2
    $wp_customize->add_setting( 'header_logo_text2', array(
        'default' => 'text'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_logo_text2_control', array(
        'label' => 'logo text right',
        'section' => 'header_logo_section',
        'settings' => 'header_logo_text2',
    ) ) );

	// home page ---------------------------------------------------------------
    // section
    $wp_customize->add_section( 'home_page_section', array(
        'title' => 'Home page content',
        'priority' => 21
    ) );

    // home title
    $wp_customize->add_setting( 'home_page_title', array(
        'default' => 'text'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_page_title_control', array(
        'label' => 'Title',
        'section' => 'home_page_section',
        'settings' => 'home_page_title',
    ) ) );

    // home text
    $wp_customize->add_setting( 'home_page_text', array(
        'default' => 'text'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home_page_text_control', array(
        'label' => 'Text',
        'section' => 'home_page_section',
        'settings' => 'home_page_text',
        'type' => 'textarea'
    ) ) );

    // social networks --------------------------------------------------------------
    $wp_customize->add_section( 'social_networks_section', array(
        'title' => 'Social networks',
        'priority' => 25
    ) );

    // facebook
    $wp_customize->add_setting( 'facebook_link', array() );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_control', array(
        'label' => 'facebook',
        'section' => 'social_networks_section',
        'settings' => 'facebook_link'
    ) ) );

    // instagram
    $wp_customize->add_setting( 'instagram_link', array() );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_control', array(
        'label' => 'instagram',
        'section' => 'social_networks_section',
        'settings' => 'instagram_link'
    ) ) );

    // vk
    $wp_customize->add_setting( 'vk_link', array() );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vk_control', array(
        'label' => 'vk',
        'section' => 'social_networks_section',
        'settings' => 'vk_link'
    ) ) );

    // youtube
    $wp_customize->add_setting( 'youtube_link', array() );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube_control', array(
        'label' => 'youtube',
        'section' => 'social_networks_section',
        'settings' => 'youtube_link'
    ) ) );

    // facebook display
    $wp_customize->add_setting( 'facebook_display', array(
        'default' => 'No'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_display_control', array(
        'label' => 'Display facebook?',
        'section' => 'social_networks_section',
        'settings' => 'facebook_display',
        'type' => 'select',
        'choices' => array( 'No' => 'No', 'Yes' => 'Yes' )
    ) ) );

    // instagram display
    $wp_customize->add_setting( 'instagram_display', array(
        'default' => 'No'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_display_control', array(
        'label' => 'Display instagram?',
        'section' => 'social_networks_section',
        'settings' => 'instagram_display',
        'type' => 'select',
        'choices' => array( 'No' => 'No', 'Yes' => 'Yes' )
    ) ) );

    // vk display
    $wp_customize->add_setting( 'vk_display', array(
        'default' => 'No'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vk_display_control', array(
        'label' => 'Display vk?',
        'section' => 'social_networks_section',
        'settings' => 'vk_display',
        'type' => 'select',
        'choices' => array( 'No' => 'No', 'Yes' => 'Yes' )
    ) ) );

    // youtube display
    $wp_customize->add_setting( 'youtube_display', array(
        'default' => 'No'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube_display_control', array(
        'label' => 'Display youtube?',
        'section' => 'social_networks_section',
        'settings' => 'youtube_display',
        'type' => 'select',
        'choices' => array( 'No' => 'No', 'Yes' => 'Yes' )
    ) ) );

    // Sidebar links pages -----------------------------------------------------------
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

    // footer content --------------------------------------------------------------------
    $wp_customize->add_section( 'footer_content_section', array(
        'title' => 'Footer content',
        'priority' => 100
    ) );

    // text
    $wp_customize->add_setting( 'footer_content', array(
        'default' => 'Some text is here...'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_content_control', array(
        'label' => 'Footer text',
        'section' => 'footer_content_section',
        'settings' => 'footer_content',
        'type' => 'textarea'
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
