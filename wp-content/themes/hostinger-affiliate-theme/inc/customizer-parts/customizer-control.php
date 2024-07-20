<?php

$orbital_customizer_defaults = array(
    'orbital_link_color' => '#2196f3',
    'orbital_navbar_background' => '#ffffff',
    'orbital_navbar_link_color' => '#000000',
    'orbital_layout_container' => 52,
    'orbital_layout_relation' => 30,
    'orbital_layout_sidebar_order' => 0,
    'orbital_layout_sidebar_sticky' => false,
    'orbital_layout_menu_orbital' => false,
    'orbital_layout_search_navbar' => false,
    'orbital_seo_analytics' => '',
    'orbital_seo_adsense' => '',
    'orbital_typo_logo' => false,
    'orbital_typo_headings' => false,
    'orbital_typo_body' => false,
    'orbital_loop_columns' => 'column-third',
    'orbital_loop_thumbnail' => true,
    'orbital_loop_excerpt' => true,
    'orbital_loop_excerpt_lenght' => 12,
    'orbital_loop_read_more' => esc_html__('Read more', 'hostinger-affiliate-theme'),
    'orbital_loop_date' => true,
    'orbital_loop_category' => true,
    'orbital_loop_author' => false,
    'orbital_loop_cluster_img_width' => 390,
    'orbital_loop_cluster_img_height' => 200,
    'orbital_advertisment_device' => 'all',
    'orbital_cluster_columns' => 'column-third',
    'orbital_posts_default_thumbnail' => true,
    'orbital_posts_default_related' => true,
    'orbital_posts_show_category' => true,
    'orbital_performance_preload_fonts' => '',
    'orbital_performance_preload_styles' => '',
    'orbital_performance_preload_scripts' => '',
    'orbital_performance_preload_images' => '',
    'orbital_performance_preload_embed' => '',
    'orbital_performance_preconnect' => '',
    'orbital_performance_prefetch' => '',
    'orbital_performance_render_blocking_css' => false,
    'orbital_performance_render_blocking_js' => false,
    'orbital_performance_render_blocking_jquery' => false,
    'orbital_performance_lazy_load' => false,
    'orbital_quicklink_active' => false,
    'orbital_quicklink_default_urls' => '',
    'orbital_gdpr_general_popup_btn' => __('Save settings', 'hostinger-affiliate-theme'),
    'orbital_gdpr_general_popup_title' => __('Cookie settings', 'hostinger-affiliate-theme'),
    'orbital_gdpr_general_link' => '#',
    'orbital_gdpr_general_text_link' => __('Read Our Cookie Policy', 'hostinger-affiliate-theme'),
    'orbital_gdpr_general_btn_settings' => __('Settings', 'hostinger-affiliate-theme'),
    'orbital_gdpr_general_btn_accept' => __('Accept', 'hostinger-affiliate-theme'),
    'orbital_gdpr_general_message' => __('We use cookies and other tracking techniques to improve your browsing experience on our website, to show you customized content and appropriate advertisements, to analyze traffic on our website and to understand where our visitors are coming from.', 'hostinger-affiliate-theme'),
    'orbital_gdpr_general_active' => false,
    'orbital_gdpr_general_mandatory' => true,
    'orbital_gdpr_functional_code' => '',
    'orbital_gdpr_functional_desc' => __('These cookies are used to provide you with a more personalized experience and to remember your choices on our website, for example, we may use functionality cookies to remember your language preferences or your login details.', 'hostinger-affiliate-theme'),
    'orbital_gdpr_functional_text' => __('Functionality Cookies', 'hostinger-affiliate-theme'),
    'orbital_gdpr_functional_active' => true,
    'orbital_gdpr_performance_code' => '',
    'orbital_gdpr_performance_desc' => __('These cookies are used to collect information to analyze traffic and how users use our website. For example, these cookies may collect data such as how long you have been browsing our website or which pages you visit, which helps us to understand how we can improve our website for you. The information collected with these tracking and performance cookies does not identify any individual visitor.', 'hostinger-affiliate-theme'),
    'orbital_gdpr_performance_text' => __('Traceability and performance cookies', 'hostinger-affiliate-theme'),
    'orbital_gdpr_performance_active' => true,
    'orbital_gdpr_analytics_ads_code' => '',
    'orbital_gdpr_analytics_ads_desc' => __('These cookies are used to show you advertisements that may be of interest based on your browsing habits. These cookies, served by our content and/or advertising providers, may combine the information they collected from our website with other information collected by them in connection with your browser activities across their network of websites. If you choose to opt-out or disable tracking and advertising cookies, you will still see advertisements but these may not be of interest to you.', 'hostinger-affiliate-theme'),
    'orbital_gdpr_analytics_ads_text' => __('Tracking and advertising cookies', 'hostinger-affiliate-theme'),
    'orbital_gdpr_analytics_ads_active' => true,
    'orbital_gdpr_other_code' => '',
    'orbital_gdpr_other_desc' => __('Other cookies not covered in the previous points.', 'hostinger-affiliate-theme'),
    'orbital_gdpr_other_text' => __('Other cookies', 'hostinger-affiliate-theme'),
    'orbital_gdpr_other_active' => true,
    'orbital_gdpr_strictly_necessary_code' => '',
    'orbital_gdpr_strictly_necessary_desc' => __('These cookies are essential to provide you with the services available on our website and to enable you to use some features of our website. Without these cookies, we cannot provide some services on our website.', 'hostinger-affiliate-theme'),
    'orbital_gdpr_strictly_necessary_text' => __('Strictly necessary cookies', 'hostinger-affiliate-theme'),
    'orbital_gdpr_strictly_necessary_active' => true,
    'orbital_gdpr_general_position' => 'middle',
    'orbital_gdpr_general_change_position' => 'right',
    'orbital_accessibility_links' => false,
    'orbital_accessibility_menu' => false
);

function orbital_customizer_sections() {

    $sections = array(
        //Sections
        array(
            'name' => 'orbital_layout',
            'title' => __('Layout Settings', 'hostinger-affiliate-theme'),
            'description' => __('', 'hostinger-affiliate-theme'),
            'priority' => 1001,
        ),
        array(
            'name' => 'orbital_posts',
            'title' => __('Posts Settings', 'hostinger-affiliate-theme'),
            'description' => __('', 'hostinger-affiliate-theme'),
            'priority' => 1001,
        ),
        array(
            'name' => 'orbital_typo',
            'title' => __('Typography Settings', 'hostinger-affiliate-theme'),
            'description' => __('', 'hostinger-affiliate-theme'),
            'priority' => 1001,
        ),
        array(
            'name' => 'orbital_loop',
            'title' => __('Loops Settings', 'hostinger-affiliate-theme'),
            'description' => __('', 'hostinger-affiliate-theme'),
            'priority' => 1002,
        ),
        array(
            'name' => 'orbital_seo',
            'title' => __('SEO Settings', 'hostinger-affiliate-theme'),
            'description' => __('', 'hostinger-affiliate-theme'),
            'priority' => 1003,
        ),
        array(
            'name' => 'orbital_accessibility',
            'title' => __('Accessibility Options', 'hostinger-affiliate-theme'),
            'description' => __('', 'hostinger-affiliate-theme'),
            'priority' => 1003,
        )
    );

    return $sections;
}

function orbital_customizer_settings() {
    global $orbital_customizer_defaults;
    $settings = array(
        //
        //  COLORS
        //

        array(
            'name' => 'orbital_link_color',
            'default' => $orbital_customizer_defaults['orbital_link_color'],
            'transport' => 'postMessage',
            'sanitize_callback' => 'orbital_sanitize_hex_color',
        ),
        array(
            'name' => 'orbital_navbar_background',
            'default' => $orbital_customizer_defaults['orbital_navbar_background'],
            'transport' => 'postMessage',
            'sanitize_callback' => 'orbital_sanitize_hex_color',
        ),
        array(
            'name' => 'orbital_navbar_link_color',
            'default' => $orbital_customizer_defaults['orbital_navbar_link_color'],
            'transport' => 'postMessage',
            'sanitize_callback' => 'orbital_sanitize_hex_color',
        ),
        //
        //  LAYOUT SETTINGS
        //
        array(
            'name' => 'orbital_layout_container',
            'default' => $orbital_customizer_defaults['orbital_layout_container'],
            'transport' => 'postMessage',
            'sanitize_callback' => 'orbital_sanitize_number_absint',
        ),
        array(
            'name' => 'orbital_layout_relation',
            'default' => $orbital_customizer_defaults['orbital_layout_relation'],
            'transport' => 'postMessage',
            'sanitize_callback' => 'orbital_sanitize_number_absint',
        ),
        array(
            'name' => 'orbital_layout_sidebar_order',
            'default' => $orbital_customizer_defaults['orbital_layout_sidebar_order'],
            'transport' => 'postMessage',
            'sanitize_callback' => 'orbital_sanitize_number_absint',
        ),
        array(
            'name' => 'orbital_layout_sidebar_sticky',
            'default' => $orbital_customizer_defaults['orbital_layout_sidebar_sticky'],
            'transport' => 'refresh',
            'sanitize_callback' => '',
        ),
        array(
            'name' => 'orbital_layout_search_navbar',
            'default' => $orbital_customizer_defaults['orbital_layout_search_navbar'],
            'transport' => 'refresh',
            'sanitize_callback' => '',
        ),
        array(
            'name' => 'orbital_layout_menu_orbital',
            'default' => $orbital_customizer_defaults['orbital_layout_menu_orbital'],
            'transport' => 'refresh',
            'sanitize_callback' => '',
        ),
        //
        // POSTS SETTINGS
        //
        array(
            'name' => 'orbital_posts_default_thumbnail',
            'default' => $orbital_customizer_defaults['orbital_posts_default_thumbnail'],
            'transport' => 'refresh',
            'sanitize_callback' => '',
        ),
        array(
            'name' => 'orbital_posts_default_related',
            'default' => $orbital_customizer_defaults['orbital_posts_default_related'],
            'transport' => 'refresh',
            'sanitize_callback' => '',
        ),
        array(
            'name' => 'orbital_posts_show_category',
            'default' => $orbital_customizer_defaults['orbital_posts_show_category'],
            'transport' => 'refresh',
            'sanitize_callback' => '',
        ),
       
        //
        // SEO SETTINGS
        //
        array(
            'name' => 'orbital_seo_analytics',
            'default' => $orbital_customizer_defaults['orbital_seo_analytics'],
            'transport' => 'refresh',
            'sanitize_callback' => 'orbital_sanitize_scripts',
        ),
        array(
            'name' => 'orbital_seo_adsense',
            'default' => $orbital_customizer_defaults['orbital_seo_adsense'],
            'transport' => 'refresh',
            'sanitize_callback' => 'orbital_sanitize_scripts',
        ),
        //
        //TYPO SETTINGS
        //
        array(
            'name' => 'orbital_typo_logo',
            'default' => $orbital_customizer_defaults['orbital_typo_logo'],
            'transport' => 'postMessage',
            'sanitize_callback' => 'orbital_sanitize_nohtml',
        ),
        array(
            'name' => 'orbital_typo_headings',
            'default' => $orbital_customizer_defaults['orbital_typo_headings'],
            'transport' => 'postMessage',
            'sanitize_callback' => 'orbital_sanitize_nohtml',
        ),
        array(
            'name' => 'orbital_typo_body',
            'default' => $orbital_customizer_defaults['orbital_typo_body'],
            'transport' => 'postMessage',
            'sanitize_callback' => 'orbital_sanitize_nohtml',
        ),
        //
        // LOOP SETTINGS
        //
        array(
            'name' => 'orbital_loop_thumbnail',
            'default' => $orbital_customizer_defaults['orbital_loop_thumbnail'],
            'transport' => 'refresh',
            'sanitize_callback' => 'orbital_sanitize_checkbox',
        ),
        array(
            'name' => 'orbital_loop_excerpt',
            'default' => $orbital_customizer_defaults['orbital_loop_excerpt'],
            'transport' => 'refresh',
            'sanitize_callback' => 'orbital_sanitize_checkbox',
        ),
        array(
            'name' => 'orbital_loop_excerpt_lenght',
            'default' => $orbital_customizer_defaults['orbital_loop_excerpt_lenght'],
            'transport' => 'refresh',
            'sanitize_callback' => 'orbital_sanitize_number_absint',
        ),
        array(
            'name' => 'orbital_loop_read_more',
            'default' => $orbital_customizer_defaults['orbital_loop_read_more'],
            'transport' => 'postMessage',
            'sanitize_callback' => 'orbital_sanitize_checkbox',
        ),
        array(
            'name' => 'orbital_loop_date',
            'default' => $orbital_customizer_defaults['orbital_loop_date'],
            'transport' => 'refresh',
            'sanitize_callback' => 'orbital_sanitize_checkbox',
        ),
        array(
            'name' => 'orbital_loop_category',
            'default' => $orbital_customizer_defaults['orbital_loop_category'],
            'transport' => 'refresh',
            'sanitize_callback' => 'orbital_sanitize_checkbox',
        ),
        array(
            'name' => 'orbital_loop_author',
            'default' => $orbital_customizer_defaults['orbital_loop_author'],
            'transport' => 'refresh',
            'sanitize_callback' => 'orbital_sanitize_checkbox',
        ),
        array(
            'name' => 'orbital_loop_cluster_img_width',
            'default' => $orbital_customizer_defaults['orbital_loop_cluster_img_width'],
            'transport' => 'refresh',
            'sanitize_callback' => 'orbital_sanitize_number_absint',
        ),
        array(
            'name' => 'orbital_loop_cluster_img_height',
            'default' => $orbital_customizer_defaults['orbital_loop_cluster_img_height'],
            'transport' => 'refresh',
            'sanitize_callback' => 'orbital_sanitize_number_absint',
        ),
        array(
            'name' => 'orbital_accessibility_links',
            'default' => $orbital_customizer_defaults['orbital_accessibility_links'],
            'transport' => 'refresh',
            'sanitize_callback' => '',
        ),
        array(
            'name' => 'orbital_accessibility_menu',
            'default' => $orbital_customizer_defaults['orbital_accessibility_menu'],
            'transport' => 'refresh',
            'sanitize_callback' => '',
        )
    );


    return $settings;
}

function orbital_customizer_controls($fonts) {
    $controls = array(
        //
        //  COLOR CONTROLS
        //

        array(
            'setting' => 'orbital_link_color',
            'info' => array(
                'label' => __('Link Color', 'hostinger-affiliate-theme'),
                'section' => 'colors',
                'settings' => 'orbital_link_color',
                'type' => 'color',
            )
        ),
        array(
            'setting' => 'orbital_navbar_background',
            'info' => array(
                'label' => __('Navbar Background Color', 'hostinger-affiliate-theme'),
                'section' => 'colors',
                'settings' => 'orbital_navbar_background',
                'type' => 'color',
            )
        ),
        array(
            'setting' => 'orbital_navbar_link_color',
            'info' => array(
                'label' => __('Navbar Link Color', 'hostinger-affiliate-theme'),
                'section' => 'colors',
                'settings' => 'orbital_navbar_link_color',
                'type' => 'color',
            )
        ),
        //
        //  LAYOUT CONTROLS
        //
        array(
            'setting' => 'orbital_layout_container',
            'info' => array(
                'label' => __('Container Width', 'hostinger-affiliate-theme'),
                'section' => 'orbital_layout',
                'settings' => 'orbital_layout_container',
                'type' => 'range',
                'input_attrs' => array(
                    'min' => 36,
                    'max' => 96,
                    'step' => 0.5,
                ),
            )
        ),
        array(
            'setting' => 'orbital_layout_relation',
            'info' => array(
                'label' => __('Content-Sidebar Relation', 'hostinger-affiliate-theme'),
                'section' => 'orbital_layout',
                'settings' => 'orbital_layout_relation',
                'type' => 'range',
                'input_attrs' => array(
                    'min' => 25,
                    'max' => 50,
                    'step' => 0.5,
                ),
            )
        ),
        array(
            'setting' => 'orbital_layout_sidebar_order',
            'info' => array(
                'type' => 'select',
                'section' => 'orbital_layout',
                'label' => __('Sidebar Order', 'hostinger-affiliate-theme'),
                'settings' => 'orbital_layout_sidebar_order',
                'choices' => array(
                    -1 => 'Left',
                    0 => 'Right',
                ),
            )),
        array(
            'setting' => 'orbital_layout_sidebar_sticky',
            'info' => array(
                'label' => __('Sticky Sidebar', 'hostinger-affiliate-theme'),
                'section' => 'orbital_layout',
                'settings' => 'orbital_layout_sidebar_sticky',
                'type' => 'checkbox',
            )
        ),
        array(
            'setting' => 'orbital_layout_search_navbar',
            'info' => array(
                'label' => __('Navbar Search', 'hostinger-affiliate-theme'),
                'section' => 'orbital_layout',
                'settings' => 'orbital_layout_search_navbar',
                'type' => 'checkbox',
            )
        ),
        array(
            'setting' => 'orbital_layout_menu_orbital',
            'info' => array(
                'label' => __('Orbital Menu', 'hostinger-affiliate-theme'),
                'section' => 'orbital_layout',
                'settings' => 'orbital_layout_menu_orbital',
                'type' => 'checkbox',
            )
        ),
        
        //
        //  POSTS CONTROLS
        //
        array(
            'setting' => 'orbital_posts_default_thumbnail',
            'info' => array(
                'label' => __('Show Thumbnails', 'hostinger-affiliate-theme'),
                'section' => 'orbital_posts',
                'settings' => 'orbital_posts_default_thumbnail',
                'type' => 'checkbox',
            )
        ),
        array(
            'setting' => 'orbital_posts_default_related',
            'info' => array(
                'label' => __('Show Related Posts', 'hostinger-affiliate-theme'),
                'section' => 'orbital_posts',
                'settings' => 'orbital_posts_default_related',
                'type' => 'checkbox',
            )
        ),
        array(
            'setting' => 'orbital_posts_show_category',
            'info' => array(
                'label' => __('Show Category Link', 'hostinger-affiliate-theme'),
                'section' => 'orbital_posts',
                'settings' => 'orbital_posts_show_category',
                'type' => 'checkbox',
            )
        ),
       
        //
        //  SEO CONTROLS
        //
        array(
            'setting' => 'orbital_seo_analytics',
            'info' => array(
                'label' => __('Analytics Code', 'hostinger-affiliate-theme'),
                'section' => 'position_options_analytics',
                'settings' => 'orbital_seo_analytics',
                'type' => 'textarea',
                'input_attrs' => array(
                    'placeholder' => __('Insert Analytics Code with script tag', 'hostinger-affiliate-theme'),
                ),
            )
        ),
        array(
            'setting' => 'orbital_seo_adsense',
            'info' => array(
                'label' => __('Adsense Code', 'hostinger-affiliate-theme'),
                'section' => 'position_options_analytics',
                'settings' => 'orbital_seo_adsense',
                'type' => 'textarea',
                'input_attrs' => array(
                    'placeholder' => __('Insert the Adsense code with the script tag', 'hostinger-affiliate-theme'),
                ),
            )
        ),
        //
        // LOOPS CONTROLS
        //
        array(
            'setting' => 'orbital_loop_thumbnail',
            'info' => array(
                'label' => __('Show Thumbnails', 'hostinger-affiliate-theme'),
                'section' => 'orbital_loop',
                'settings' => 'orbital_loop_thumbnail',
                'type' => 'checkbox',
            )
        ),
        array(
            'setting' => 'orbital_loop_excerpt',
            'info' => array(
                'label' => __('Show Excerpt', 'hostinger-affiliate-theme'),
                'section' => 'orbital_loop',
                'settings' => 'orbital_loop_excerpt',
                'type' => 'checkbox',
            )
        ),
        array(
            'setting' => 'orbital_loop_date',
            'info' => array(
                'label' => __('Show Date', 'hostinger-affiliate-theme'),
                'section' => 'orbital_loop',
                'settings' => 'orbital_loop_date',
                'type' => 'checkbox',
            )
        ),
        array(
            'setting' => 'orbital_loop_category',
            'info' => array(
                'label' => __('Show Category', 'hostinger-affiliate-theme'),
                'section' => 'orbital_loop',
                'settings' => 'orbital_loop_category',
                'type' => 'checkbox',
            )
        ),
        array(
            'setting' => 'orbital_loop_author',
            'info' => array(
                'label' => __('Show Author', 'hostinger-affiliate-theme'),
                'section' => 'orbital_loop',
                'settings' => 'orbital_loop_author',
                'type' => 'checkbox',
            )
        ),
        array(
            'setting' => 'orbital_loop_excerpt_lenght',
            'info' => array(
                'label' => __('Excerpt Length', 'hostinger-affiliate-theme'),
                'section' => 'orbital_loop',
                'settings' => 'orbital_loop_excerpt_lenght',
                'type' => 'number',
                'input_attrs' => array(
                    'min' => 5,
                ),
            )
        ),
        array(
            'setting' => 'orbital_loop_columns',
            'info' => array(
                'type' => 'select',
                'section' => 'orbital_loop',
                'label' => __('Number of columns', 'hostinger-affiliate-theme'),
                'settings' => 'orbital_loop_columns',
                'choices' => array(
                    'column' => 'List Mode',
                    'column-half' => '2 columns',
                    'column-third' => '3 columns',
                    'column-quarter' => '4 columns',
                ),
            )),
        array(
            'setting' => 'orbital_loop_read_more',
            'info' => array(
                'label' => __('Read More Text', 'hostinger-affiliate-theme'),
                'section' => 'orbital_loop',
                'settings' => 'orbital_loop_read_more',
                'type' => 'text',
            )
        ),
        array(
            'setting' => 'orbital_loop_cluster_img_width',
            'info' => array(
                'label' => __('Cluster Image Width', 'hostinger-affiliate-theme'),
                'description' => __('It is necessary to regenerate all miniatures', 'hostinger-affiliate-theme'),
                'section' => 'orbital_loop',
                'settings' => 'orbital_loop_cluster_img_width',
                'type' => 'number',
                'input_attrs' => array(
                    'min' => 1,
                ),
            )
        ),
        array(
            'setting' => 'orbital_loop_cluster_img_height',
            'info' => array(
                'label' => __('Cluster Image Height', 'hostinger-affiliate-theme'),
                'description' => __('It is necessary to regenerate all miniatures', 'hostinger-affiliate-theme'),
                'section' => 'orbital_loop',
                'settings' => 'orbital_loop_cluster_img_height',
                'type' => 'number',
                'input_attrs' => array(
                    'min' => 1,
                ),
            )
        ),
        //
        // TYPO CONTROLS
        //
        array('setting' => 'orbital_typo_logo',
            'info' => array(
                'label' => __('Typo Logo', 'hostinger-affiliate-theme'),
                'description' => __('You can enter a URL. For example from Google Fonts.', 'hostinger-affiliate-theme'),
                'section' => 'orbital_typo',
                'settings' => 'orbital_typo_logo',
                'type' => 'select',
                'choices' => $fonts,
            )
        ),
        array('setting' => 'orbital_typo_headings',
            'info' => array(
                'label' => __('Typo Headings', 'hostinger-affiliate-theme'),
                'description' => __('You can enter a URL. For example from Google Fonts.', 'hostinger-affiliate-theme'),
                'section' => 'orbital_typo',
                'settings' => 'orbital_typo_headings',
                'type' => 'select',
                'choices' => $fonts,
            )
        ),
        array('setting' => 'orbital_typo_body',
            'info' => array(
                'label' => __('Typo Body', 'hostinger-affiliate-theme'),
                'description' => __('You can enter a URL. For example from Google Fonts.', 'hostinger-affiliate-theme'),
                'section' => 'orbital_typo',
                'settings' => 'orbital_typo_body',
                'type' => 'select',
                'choices' => $fonts,
            )
        ),
        array(
            'setting' => 'orbital_accessibility_links',
            'info' => array(
                'label' => __('Disable underline on links', 'hostinger-affiliate-theme'),
                'section' => 'orbital_accessibility',
                'settings' => 'orbital_accessibility_links',
                'type' => 'checkbox',
            )
        ),
        array(
            'setting' => 'orbital_accessibility_menu',
            'info' => array(
                'label' => __('Disable menu navigation by keyboard', 'hostinger-affiliate-theme'),
                'section' => 'orbital_accessibility',
                'settings' => 'orbital_accessibility_menu',
                'type' => 'checkbox',
            )
        )
    );
    return $controls;
}
