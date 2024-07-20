<?php
 
function orbital_gdpr_add_scripts() {
    $sections = array('functional', 'performance', 'other');

    echo orbital_customize_option('orbital_gdpr_strictly_necessary_code');

    foreach ($sections as $section) {
        if (orbital_gdpr_show_cookies($section)) {
            echo orbital_customize_option('orbital_gdpr_' . $section . '_code');
        }
    }
}

add_action('wp_footer', 'orbital_gdpr_add_scripts');

function orbital_gdpr_show_cookies($section) {

    //LATAM
    if (orbital_customize_option('orbital_gdpr_general_active') === false) {
        return true;
    }
    //EU
    if (!isset($_COOKIE['cc_cookie'])) {
        //cookies not accepted
        return false;
    }

    //section active and cookies accepted
    if (orbital_customize_option('orbital_gdpr_' . strtolower($section) . '_active') && strpos($_COOKIE['cc_cookie'], strtolower($section)) !== false) {
        return true;
    }
    return false;
}

function orbital_gdp_has_ads() {
    $arrAds = array(
        'orbital_advertisment_before_home_code',
        'orbital_advertisment_before_home_mobile_code',
        'orbital_advertisment_after_featured_home_code',
        'orbital_advertisment_after_featured_home_mobile_code',
        'orbital_advertisment_after_home_code',
        'orbital_advertisment_after_home_mobile_code',
        'orbital_advertisment_before_single_content_code',
        'orbital_advertisment_before_single_content_mobile_code',
        'orbital_advertisment_middle_single_content_code',
        'orbital_advertisment_middle_single_content_mobile_code',
        'orbital_advertisment_after_single_content_code',
        'orbital_advertisment_after_single_content_mobile_code',
        'orbital_advertisment_before_page_content_code',
        'orbital_advertisment_before_page_content_mobile_code',
        'orbital_advertisment_middle_page_content_code',
        'orbital_advertisment_middle_page_content_mobile_code',
        'orbital_advertisment_after_page_content_code',
        'orbital_advertisment_after_page_content_mobile_code',
        'orbital_advertisment_before_archive_code',
        'orbital_advertisment_before_archive_mobile_code',
        'orbital_advertisment_after_featured_archive_code',
        'orbital_advertisment_after_featured_archive_mobile_code',
        'orbital_advertisment_after_archive_code',
        'orbital_advertisment_after_archive_mobile_code',
        'orbital_advertisment_after_description_archive_code',
        'orbital_advertisment_after_description_archive_mobile_code',
        'orbital_seo_analytics',
        'orbital_seo_adsense'
    );

    foreach ($arrAds as $key) {
        if (!empty(orbital_customize_option($key))) {
            
            return true;
        }
    }
    return false;
}

function orbital_gdpr_customizer_add_cookie_section($wp_customize, $section) {

    global $orbital_customizer_defaults;

    if ((strpos($section, 'strictly_necessary') === false)) {

        $wp_customize->add_setting($section . '_active', array(
            'name' => $orbital_customizer_defaults[$section . '_active'],
            'default' => $orbital_customizer_defaults[$section . '_active'],
            'transport' => 'refresh',
            'sanitize_callback' => 'orbital_sanitize_nohtml',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, $section . '_active', array(
                    'setting' => $section . '_active',
                    'label' => __('Activate', 'hostinger-affiliate-theme'),
                    'section' => $section,
                    'type' => 'checkbox',
                    'input_attrs' => array('disabled' => 'disabled')
        )));
    }

    $wp_customize->add_setting($section . '_text', array(
        'name' => $section . '_text',
        'default' => $orbital_customizer_defaults[$section . '_text'],
        'transport' => 'refresh',
        'sanitize_callback' => 'orbital_sanitize_nohtml',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $section . '_text', array(
                'setting' => $section . '_text',
                'label' => __('Section name', 'hostinger-affiliate-theme'),
                'section' => $section,
                'type' => 'text',
    )));


    $wp_customize->add_setting($section . '_desc', array(
        'name' => $section . '_desc',
        'default' => $orbital_customizer_defaults[$section . '_desc'],
        'transport' => 'refresh',
        'sanitize_callback' => 'orbital_sanitize_nohtml',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, $section . '_desc', array(
                'setting' => $section . '_desc',
                'label' => __('Section description', 'hostinger-affiliate-theme'),
                'section' => $section,
                'type' => 'textarea',
    )));

    if ($section !== 'orbital_gdpr_analytics_ads') {

        $wp_customize->add_setting($section . '_code', array(
            'name' => $section . '_code',
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => '',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, $section . '_code', array(
                    'setting' => $section . '_code',
                    'label' => __('Javascript codes', 'hostinger-affiliate-theme'),
                    'section' => $section,
                    'type' => 'textarea',
        )));
    } else {
        $wp_customize->add_setting($section . '_link', array(
            'default' => '',
            'transport' => '',
        ));

        $wp_customize->add_control(new Orbital_GDPR_Button(
                        $wp_customize,
                        $section . '_link',
                        array(
                    'section' => $section,
                    'priority' => 10
                        )
        ));
    }
}

function orbital_gdpr_customizer($wp_customize) {
    global $orbital_customizer_defaults;

    $wp_customize->add_panel('orbital_gdpr', array(
        'title' => __('Cookie Options (GDPR)', 'hostinger-affiliate-theme'),
        'description' => __('', 'hostinger-affiliate-theme'),
        'priority' => 1005,
    ));

    $wp_customize->add_section('orbital_gdpr_general', array(
        'title' => __('Appearance editor', 'hostinger-affiliate-theme'),
        'panel' => 'orbital_gdpr',
    ));

    $wp_customize->add_section('orbital_gdpr_strictly_necessary', array(
        'title' => __('Strictly necessary cookies', 'hostinger-affiliate-theme'),
        'panel' => 'orbital_gdpr',
    ));

    $wp_customize->add_section('orbital_gdpr_functional', array(
        'title' => __('Functionality Cookies', 'hostinger-affiliate-theme'),
        'panel' => 'orbital_gdpr',
    ));

    $wp_customize->add_section('orbital_gdpr_performance', array(
        'title' => __('Traceability and performance cookies', 'hostinger-affiliate-theme'),
        'panel' => 'orbital_gdpr',
    ));

    $wp_customize->add_section('orbital_gdpr_analytics_ads', array(
        'title' => __('Tracking and advertising cookies', 'hostinger-affiliate-theme'),
        'panel' => 'orbital_gdpr',
    ));

    $wp_customize->add_section('orbital_gdpr_other', array(
        'title' => __('Other cookies', 'hostinger-affiliate-theme'),
        'panel' => 'orbital_gdpr',
    ));


    /* ADD GENERAL SECTION OPTIONS */
    $wp_customize->add_setting('orbital_gdpr_general_active', array(
        'name' => 'orbital_gdpr_general_active',
        'default' => $orbital_customizer_defaults['orbital_gdpr_general_active'],
        'transport' => 'refresh',
        'sanitize_callback' => 'orbital_sanitize_checkbox',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_gdpr_general_active', array(
                'setting' => 'orbital_gdpr_general_active',
                'label' => __('Enable cookies ', 'hostinger-affiliate-theme'),
                'section' => 'orbital_gdpr_general',
                'type' => 'checkbox',
    )));

    $wp_customize->add_setting('orbital_gdpr_general_mandatory', array(
        'name' => 'orbital_gdpr_general_mandatory',
        'default' => $orbital_customizer_defaults['orbital_gdpr_general_mandatory'],
        'transport' => 'refresh',
        'sanitize_callback' => 'orbital_sanitize_checkbox',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_gdpr_general_mandatory', array(
                'setting' => 'orbital_gdpr_general_mandatory',
                'label' => __('Block browsing', 'hostinger-affiliate-theme'),
                'section' => 'orbital_gdpr_general',
                'type' => 'checkbox',
    )));



    $wp_customize->add_setting('orbital_gdpr_general_position', array(
        'name' => 'orbital_gdpr_general_position',
        'default' => $orbital_customizer_defaults['orbital_gdpr_general_position'],
        'transport' => 'refresh',
        'sanitize_callback' => '',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_gdpr_general_position', array(
                'section' => 'orbital_gdpr_general',
                'label' => __('Widget position', 'hostinger-affiliate-theme'),
                'settings' => 'orbital_gdpr_general_position',
                'type' => 'select',
                'choices' => array(
                    'middle' => __('Centered', 'hostinger-affiliate-theme'),
                    'bottom' => __('Footer', 'hostinger-affiliate-theme'),
                ),
    )));

    $wp_customize->add_setting('orbital_gdpr_general_change_position', array(
        'name' => 'orbital_gdpr_general_change_position',
        'default' => $orbital_customizer_defaults['orbital_gdpr_general_change_position'],
        'transport' => 'refresh',
        'sanitize_callback' => '',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_gdpr_general_change_position', array(
                'section' => 'orbital_gdpr_general',
                'label' => __('Tab position to change preferences', 'hostinger-affiliate-theme'),
                'settings' => 'orbital_gdpr_general_change_position',
                'type' => 'select',
                'choices' => array(
                    'left' => __('Left', 'hostinger-affiliate-theme'),
                    'right' => __('Right', 'hostinger-affiliate-theme'),
                ),
    )));


    $wp_customize->add_setting('orbital_gdpr_general_message', array(
        'name' => 'orbital_gdpr_general_message',
        'default' => $orbital_customizer_defaults['orbital_gdpr_general_active'],
        'transport' => 'refresh',
        'sanitize_callback' => 'orbital_sanitize_nohtml',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_gdpr_general_message', array(
                'setting' => 'orbital_gdpr_general_message',
                'label' => __('Cookie warning message', 'hostinger-affiliate-theme'),
                'section' => 'orbital_gdpr_general',
                'type' => 'textarea',
    )));


    $wp_customize->add_setting('orbital_gdpr_general_btn_accept', array(
        'name' => 'orbital_gdpr_general_btn_accept_all',
        'default' => $orbital_customizer_defaults['orbital_gdpr_general_active'],
        'transport' => 'refresh',
        'sanitize_callback' => 'orbital_sanitize_nohtml',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_gdpr_general_btn_accept', array(
                'setting' => 'orbital_gdpr_general_btn_accept',
                'label' => __('Text of the accept button', 'hostinger-affiliate-theme'),
                'section' => 'orbital_gdpr_general',
                'type' => 'text',
    )));

    $wp_customize->add_setting('orbital_gdpr_general_btn_settings', array(
        'name' => 'orbital_gdpr_general_btn_settings',
        'default' => $orbital_customizer_defaults['orbital_gdpr_general_btn_settings'],
        'transport' => 'refresh',
        'sanitize_callback' => 'orbital_sanitize_nohtml',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_gdpr_general_btn_settings', array(
                'setting' => 'orbital_gdpr_general_btn_settings',
                'label' => __('Text of the configuration button', 'hostinger-affiliate-theme'),
                'section' => 'orbital_gdpr_general',
                'type' => 'text',
    )));

    $wp_customize->add_setting('orbital_gdpr_general_text_link', array(
        'name' => 'orbital_gdpr_general_text_link',
        'default' => $orbital_customizer_defaults['orbital_gdpr_general_text_link'],
        'transport' => 'refresh',
        'sanitize_callback' => 'orbital_sanitize_nohtml',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_gdpr_general_text_link', array(
                'setting' => 'orbital_gdpr_general_text_link',
                'label' => __('Text of the link to the cookies policy', 'hostinger-affiliate-theme'),
                'section' => 'orbital_gdpr_general',
                'type' => 'text',
    )));

    $wp_customize->add_setting('orbital_gdpr_general_link', array(
        'name' => 'orbital_gdpr_general_link',
        'default' => $orbital_customizer_defaults['orbital_gdpr_general_link'],
        'transport' => 'refresh',
        'sanitize_callback' => 'orbital_sanitize_nohtml',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_gdpr_general_link', array(
                'setting' => 'orbital_gdpr_general_link',
                'label' => __('Cookie Policy URL', 'hostinger-affiliate-theme'),
                'section' => 'orbital_gdpr_general',
                'type' => 'text',
    )));


    $wp_customize->add_setting('orbital_gdpr_general_popup_title', array(
        'name' => 'orbital_gdpr_general_popup_title',
        'default' => $orbital_customizer_defaults['orbital_gdpr_general_popup_title'],
        'transport' => 'refresh',
        'sanitize_callback' => 'orbital_sanitize_nohtml',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_gdpr_general_popup_title', array(
                'setting' => 'orbital_gdpr_general_popup_title',
                'label' => __('Title of the cookie settings popup', 'hostinger-affiliate-theme'),
                'section' => 'orbital_gdpr_general',
                'type' => 'text',
    )));

    $wp_customize->add_setting('orbital_gdpr_general_popup_btn', array(
        'name' => 'orbital_gdpr_general_popup_btn',
        'default' => $orbital_customizer_defaults['orbital_gdpr_general_popup_btn'],
        'transport' => 'refresh',
        'sanitize_callback' => 'orbital_sanitize_nohtml',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_gdpr_general_popup_btn', array(
                'setting' => 'orbital_gdpr_general_popup_btn',
                'label' => __('Save settings button', 'hostinger-affiliate-theme'),
                'section' => 'orbital_gdpr_general',
                'type' => 'text',
    )));


    /* ADD panel components* */
    orbital_gdpr_customizer_add_cookie_section($wp_customize, 'orbital_gdpr_strictly_necessary');
    orbital_gdpr_customizer_add_cookie_section($wp_customize, 'orbital_gdpr_functional');
    orbital_gdpr_customizer_add_cookie_section($wp_customize, 'orbital_gdpr_performance');
    orbital_gdpr_customizer_add_cookie_section($wp_customize, 'orbital_gdpr_analytics_ads');
    orbital_gdpr_customizer_add_cookie_section($wp_customize, 'orbital_gdpr_other');
}

function orbital_gdpr_custom_button($wp_customize) {

    final class Orbital_GDPR_Button extends WP_Customize_Control {

        protected function render_content() {
            $query['autofocus[control]'] = 'orbital_seo_analytics';
            $control_link = add_query_arg($query, admin_url('customize.php'));
            ?>
            <hr class="orbital-ei-hr" />
            <span class="customize-control-title">
                <?php _e('Javascript codes', 'hostinger-affiliate-theme'); ?>
            </span>
            <span class="description customize-control-description">
                <?php _e('Tracking and advertising cookies are managed from the "Advertising and Analytics" menu.', 'hostinger-affiliate-theme'); ?>
            </span>
            <input type="button" class="button" name="gdpr_analytics_ads_link_button" value="<?php esc_attr_e('Change codes', 'hostinger-affiliate-theme'); ?>" onclick="window.location = '<?php echo $control_link ?>'" />
            <?php
        }

    }

}

add_action('customize_register', 'orbital_gdpr_custom_button');
