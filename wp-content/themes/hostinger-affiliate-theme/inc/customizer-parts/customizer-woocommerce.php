<?php
function orbital_woocommerce_customizer($wp_customize)
{
	if (!orbital_check_woocommerce()) {
		return;
	}


	$wp_customize->add_section('orbital_home_shop', array(
		'title' => __('Woocommerce Home', 'hostinger-affiliate-theme'),
		'description' => __('Shop configuration ', 'hostinger-affiliate-theme'). get_permalink(wc_get_page_id('shop')),
		'priority' => 1000,
	));

	$wp_customize->add_section('orbital_woocommerce_breadcrumb', array(
		'title' => __('Woocommerce Breadcrumbs', 'hostinger-affiliate-theme'),
		'priority' => 1000,
		'panel' => 'woocommerce'
	));


	$wp_customize->add_setting('orbital_woocommerce_breadcrumb_active', array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'orbital_sanitize_hex_color',

	));

	$wp_customize->add_setting('orbital_woocommerce_breadcrumb_align', array(
		'default' => 'left',
		'transport' => 'refresh',
		'sanitize_callback' => 'orbital_sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_woocommerce_breadcrumb_active', array(
		'setting' => 'orbital_woocommerce_breadcrumb_active',
		'label' => __('Woocommerce Breadcrumb Active', 'hostinger-affiliate-theme'),
		'section' => 'orbital_woocommerce_breadcrumb',
		'type' => 'checkbox',
	)));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_woocommerce_breadcrumb_align', array(
		'setting' => 'orbital_woocommerce_breadcrumb_align',
		'label' => __('Woocommerce Breadcrumb Align', 'hostinger-affiliate-theme'),
		'section' => 'orbital_woocommerce_breadcrumb',
		'type' => 'select',
		'choices' => array(
			'left' => 'Left',
			'right' => 'Right',
		),
	)));





	$number_home_shop_sections = 2;
	$product_cats = get_terms('product_cat');
	$product_cat_options = array( 0 => 'Choose category');
	foreach ($product_cats as $product_cat) {
		$product_cat_options[$product_cat->term_id] =  $product_cat->name;
	}
	$order_options = array(
		'rand' => __('Random', 'hostinger-affiliate-theme'),
		'date' => __("What's new?", 'hostinger-affiliate-theme'),
		'price' => __('Price', 'hostinger-affiliate-theme')
	);
	for ($i=1; $i <= $number_home_shop_sections; $i++) {
		$wp_customize->add_setting('orbital_home_section_category_' . $i, array(
			'default' => 0,
			'transport' => 'refresh',
			'sanitize_callback' => '',
		));
		$wp_customize->add_setting('orbital_home_section_order_' . $i, array(
			'default' => 'date',
			'transport' => 'refresh',
			'sanitize_callback' => '',
		));
		$wp_customize->add_setting('orbital_home_section_number_products_' . $i, array(
			'default' => 5,
			'transport' => 'refresh',
			'sanitize_callback' => '',
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_home_section_category_' . $i, array(
			'label' => __('Home Section', 'hostinger-affiliate-theme') . ' ' . $i,
			'section' => 'orbital_home_shop',
			'settings' => 'orbital_home_section_category_' . $i,
			'type' => 'select',
			'choices' => $product_cat_options,
		)));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_home_section_order_' . $i, array(
			'section' => 'orbital_home_shop',
			'label' => __('Order by', 'hostinger-affiliate-theme'),
			'settings' => 'orbital_home_section_order_' . $i,
			'type' => 'select',
			'choices' => $order_options,
			'input_attrs' => array(
				'placeholder' => __('Sort by…', 'hostinger-affiliate-theme'),
			),
		)));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'orbital_home_section_number_products_' . $i, array(
			'label' => __('Number of products', 'hostinger-affiliate-theme'),
			'section' => 'orbital_home_shop',
			'settings' => 'orbital_home_section_number_products_' . $i,
			'type' => 'number',
			'input_attrs' => array(
				'min' => 4,
				'max' => 12,
				'placeholder' => __('Product Quantity', 'hostinger-affiliate-theme'),
			),
		)));
		$wp_customize->add_control(new orbital_Customize_Misc_Control($wp_customize, 'orbital_home_line_' . $i, array(
			'section'     => 'orbital_home_shop',
			'description' => __('', 'hostinger-affiliate-theme'),
			'type'        => 'line',
		)));
	}
}
