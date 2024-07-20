<?php

// Activar/Desactivar
// Redes Sociales
// Posts, Pages, Archives, Home, WooCommerce


function orbital_social_customizer($wp_customize)
{

	$social_networks = array(
		'facebook' => 'Facebook',
		'twitter' => 'Twitter',
		'google' => 'Google Plus',
		'tumblr' => 'Tumblr',
		'whatsapp' => 'WhatsApp',
		'email' => 'Email',
		'linkedin' => 'LinkedIn',
		'pinterest' => 'Pinterest',
		'vk' => 'Vk',
		'telegram' => 'Telegram',
	);

	$post_types = array(
		'post' => __('Posts', 'hostinger-affiliate-theme'),
		'page' => __('Page', 'hostinger-affiliate-theme'),
		'archive' => __('Archives', 'hostinger-affiliate-theme'),
		'home' => __('Home', 'hostinger-affiliate-theme'),
		'woocommerce' => __('WooCommerce', 'hostinger-affiliate-theme'),
	);

    //SOCIAL PANEL

	$wp_customize->add_panel('social_panel', array(
		'title' => __('Social Settings', 'hostinger-affiliate-theme'),
		'description' => __('Twitter counts need connect to <a target="_blank" href="http://newsharecounts.com/">http://newsharecounts.com/</a>', 'hostinger-affiliate-theme'),
		'priority' => 1006,
	));

    //SOCIAL SECTIONS

	$wp_customize->add_section('orbital_social_fixed_bottom', array(
		'title' =>  __('Fixed Bottom', 'hostinger-affiliate-theme'),
		'description' => __('Twitter counts need connect to <a target="_blank" href="http://newsharecounts.com/">http://newsharecounts.com/</a>', 'hostinger-affiliate-theme'),
		'panel' => 'social_panel',
	));

	$wp_customize->add_section('orbital_social_fixed_side', array(
		'title' =>  __('Fixed Side', 'hostinger-affiliate-theme'),
		'description' => __('Twitter counts need connect to <a target="_blank" href="http://newsharecounts.com/">http://newsharecounts.com/</a>', 'hostinger-affiliate-theme'),
		'panel' => 'social_panel',
	));

	$wp_customize->add_section('orbital_social_before_content', array(
		'title' =>  __('Before Content', 'hostinger-affiliate-theme'),
		'description' => __('Twitter counts need connect to <a target="_blank" href="http://newsharecounts.com/">http://newsharecounts.com/</a>', 'hostinger-affiliate-theme'),
		'panel' => 'social_panel',
	));

	$wp_customize->add_section('orbital_social_after_content', array(
		'title' =>  __('After Content', 'hostinger-affiliate-theme'),
		'description' => __('', 'hostinger-affiliate-theme'),
		'panel' => 'social_panel',
	));


    // SOCIAL BOTTOM FIXED SETTINGS

	$wp_customize->add_setting('orbital_social_fixed_bottom_enable', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_fixed_bottom_social', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_fixed_bottom_post_types', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_fixed_bottom_count', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_fixed_bottom_devices', array(
		'default' => 'mobile',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

    // SOCIAL SIDE FIXED SETTINGS

	$wp_customize->add_setting('orbital_social_fixed_side_enable', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_fixed_side_social', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_fixed_side_post_types', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_fixed_side_count', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_fixed_side_devices', array(
		'default' => 'desktop',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

    // SOCIAL BEFORE CONTENT SETTINGS

	$wp_customize->add_setting('orbital_social_before_content_enable', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_before_content_social', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_before_content_post_types', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_before_content_count', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_before_content_devices', array(
		'default' => 'all',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

    // SOCIAL AFTER CONTENT SETTINGS

	$wp_customize->add_setting('orbital_social_after_content_enable', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_after_content_social', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_after_content_post_types', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_after_content_count', array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));

	$wp_customize->add_setting('orbital_social_after_content_devices', array(
		'default' => 'all',
		'transport' => 'refresh',
		'sanitize_callback' => '',
	));


    // SOCIAL BOTTOM FIXED CONTROLS

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_social_fixed_bottom_enable', array(
		'section' => 'orbital_social_fixed_bottom',
		'label' => __('Enable Fixed Bottom Social', 'hostinger-affiliate-theme'),
		'settings' => 'orbital_social_fixed_bottom_enable',
		'type' => 'checkbox',
	)));


	$wp_customize->add_control(new orbital_Customize_Misc_Control($wp_customize, 'orbital_social_fixed_bottom_social', array(
		'section'     => 'orbital_social_fixed_bottom',
		'type'        => 'multiselect',
		'label' => __('Select Social Networks', 'hostinger-affiliate-theme'),
		'choices' => $social_networks,
	)));

	$wp_customize->add_control(new orbital_Customize_Misc_Control($wp_customize, 'orbital_social_fixed_bottom_post_types', array(
		'section'     => 'orbital_social_fixed_bottom',
		'type'        => 'multiselect',
		'label' => __('Post Types', 'hostinger-affiliate-theme'),
		'choices' => $post_types,
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_social_fixed_bottom_count', array(
		'section' => 'orbital_social_fixed_bottom',
		'label' => __('Enable Count', 'hostinger-affiliate-theme'),
		'settings' => 'orbital_social_fixed_bottom_count',
		'type' => 'checkbox',
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_social_fixed_bottom_devices', array(
		'section' => 'orbital_social_fixed_bottom',
		'label' => __('Device Selector', 'hostinger-affiliate-theme'),
		'description' => __('If you have a cache plugin, maybe you should refresh cache.', 'hostinger-affiliate-theme'),
		'settings' => 'orbital_social_fixed_bottom_devices',
		'type' => 'select',
		'choices' => array(
			'all' => __('All devices', 'hostinger-affiliate-theme'),
			'mobile' => __('Only Mobile', 'hostinger-affiliate-theme'),
			'desktop' => __('Only Desktop', 'hostinger-affiliate-theme'),
		),

	)));

    // SOCIAL SIDE FIXED CONTROLS

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_social_fixed_side_enable', array(
		'section' => 'orbital_social_fixed_side',
		'label' => __('Enable Fixed Side Social', 'hostinger-affiliate-theme'),
		'settings' => 'orbital_social_fixed_side_enable',
		'type' => 'checkbox',
	)));

	$wp_customize->add_control(new orbital_Customize_Misc_Control($wp_customize, 'orbital_social_fixed_side_social', array(
		'section'     => 'orbital_social_fixed_side',
		'type'        => 'multiselect',
		'label' => __('Select Social Networks', 'hostinger-affiliate-theme'),
		'choices' => $social_networks,
	)));

	$wp_customize->add_control(new orbital_Customize_Misc_Control($wp_customize, 'orbital_social_fixed_side_post_types', array(
		'section'     => 'orbital_social_fixed_side',
		'type'        => 'multiselect',
		'label' => __('Post Types', 'hostinger-affiliate-theme'),
		'choices' => $post_types,
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_social_fixed_side_count', array(
		'section' => 'orbital_social_fixed_side',
		'label' => __('Enable Count', 'hostinger-affiliate-theme'),
		'settings' => 'orbital_social_fixed_side_count',
		'type' => 'checkbox',
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_social_fixed_side_devices', array(
		'section' => 'orbital_social_fixed_side',
		'label' => __('Device Selector', 'hostinger-affiliate-theme'),
		'description' => __('If you have a cache plugin, maybe you should refresh cache.', 'hostinger-affiliate-theme'),
		'settings' => 'orbital_social_fixed_side_devices',
		'type' => 'select',
		'choices' => array(
			'all' => __('All devices', 'hostinger-affiliate-theme'),
			'mobile' => __('Only Mobile', 'hostinger-affiliate-theme'),
			'desktop' => __('Only Desktop', 'hostinger-affiliate-theme'),
		),

	)));

    // SOCIAL BEFORE CONTENT CONTROLS

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_social_before_content_enable', array(
		'section' => 'orbital_social_before_content',
		'label' => __('Enable Before Content Social', 'hostinger-affiliate-theme'),
		'settings' => 'orbital_social_before_content_enable',
		'type' => 'checkbox',
	)));


	$wp_customize->add_control(new orbital_Customize_Misc_Control($wp_customize, 'orbital_social_before_content_social', array(
		'section'     => 'orbital_social_before_content',
		'type'        => 'multiselect',
		'label' => __('Select Social Networks', 'hostinger-affiliate-theme'),
		'choices' => $social_networks,
	)));

	$wp_customize->add_control(new orbital_Customize_Misc_Control($wp_customize, 'orbital_social_before_content_post_types', array(
		'section'     => 'orbital_social_before_content',
		'type'        => 'multiselect',
		'label' => __('Post Types', 'hostinger-affiliate-theme'),
		'choices' => $post_types,
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_social_before_content_count', array(
		'section' => 'orbital_social_before_content',
		'label' => __('Enable Count', 'hostinger-affiliate-theme'),
		'settings' => 'orbital_social_before_content_count',
		'type' => 'checkbox',
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_social_before_content_devices', array(
		'section' => 'orbital_social_before_content',
		'label' => __('Device Selector', 'hostinger-affiliate-theme'),
		'description' => __('If you have a cache plugin, maybe you should refresh cache.', 'hostinger-affiliate-theme'),
		'settings' => 'orbital_social_before_content_devices',
		'type' => 'select',
		'choices' => array(
			'all' => __('All devices', 'hostinger-affiliate-theme'),
			'mobile' => __('Only Mobile', 'hostinger-affiliate-theme'),
			'desktop' => __('Only Desktop', 'hostinger-affiliate-theme'),
		),

	)));

    // SOCIAL AFTER CONTENT CONTROLS

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_social_after_content_enable', array(
		'section' => 'orbital_social_after_content',
		'label' => __('Enable After Content Social', 'hostinger-affiliate-theme'),
		'settings' => 'orbital_social_after_content_enable',
		'type' => 'checkbox',
	)));


	$wp_customize->add_control(new orbital_Customize_Misc_Control($wp_customize, 'orbital_social_after_content_social', array(
		'section'     => 'orbital_social_after_content',
		'type'        => 'multiselect',
		'label' => __('Select Social Networks', 'hostinger-affiliate-theme'),
		'choices' => $social_networks,
	)));

	$wp_customize->add_control(new orbital_Customize_Misc_Control($wp_customize, 'orbital_social_after_content_post_types', array(
		'section'     => 'orbital_social_after_content',
		'type'        => 'multiselect',
		'label' => __('Post Types', 'hostinger-affiliate-theme'),
		'choices' => $post_types,
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_social_after_content_count', array(
		'section' => 'orbital_social_after_content',
		'label' => __('Enable Count', 'hostinger-affiliate-theme'),
		'settings' => 'orbital_social_after_content_count',
		'type' => 'checkbox',
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_social_after_content_devices', array(
		'section' => 'orbital_social_after_content',
		'label' => __('Device Selector', 'hostinger-affiliate-theme'),
		'description' => __('If you have a cache plugin, maybe you should refresh cache.', 'hostinger-affiliate-theme'),
		'settings' => 'orbital_social_after_content_devices',
		'type' => 'select',
		'choices' => array(
			'all' => __('All devices', 'hostinger-affiliate-theme'),
			'mobile' => __('Only Mobile', 'hostinger-affiliate-theme'),
			'desktop' => __('Only Desktop', 'hostinger-affiliate-theme'),
		),

	)));
}
