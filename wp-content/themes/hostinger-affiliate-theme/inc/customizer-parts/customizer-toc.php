<?php
/* Custom Separator */
if (class_exists('WP_Customize_Control')) {
	class Separator_Custom_control extends WP_Customize_Control{
	   public $type = 'separator';
 
	   // Render the control's content.
	   public function render_content(){
		 echo "<hr>";
	   } 
	}
	class Heading_Custom_control extends WP_Customize_Control{
		public $type = 'heading';
  
		// Render the control's content.
		public function render_content(){
		  echo "<h3>$this->label</h3>";
		  if($this->description){
			echo "<p>$this->description</p>";
		  }
		} 
	 }
}

function orbital_content_table($wp_customize)
{
	
	global $orbital_customizer_defaults;

    $wp_customize->add_section('orbital_content_index', array(
		'title' => __('Table of Content', 'hostinger-affiliate-theme') ,
		'priority' => 1008,
		'capability' => 'edit_theme_options'
	));
	
	$wp_customize->add_setting('heading_setting');
	$wp_customize->add_control(new Heading_Custom_control($wp_customize, 'heading_setting', array(
		'settings' => 'heading_setting',
		'section' => 'orbital_content_index',
		'label' => __('TOC Shortcode <code>[orbital_toc]</code>', 'hostinger-affiliate-theme'),
		'description' => __('If you would like to fully customise the position of the table of contents, you can use the <code>[orbital_toc]</code> shortcode by placing it at the desired position of your post, page or custom post type. This method allows you to generate the table of contents overwriting the selected option in <code>Position</code>.', 'hostinger-affiliate-theme')
	)));

	$wp_customize->add_setting('separator_setting_1');
	$wp_customize->add_control(new Separator_Custom_control($wp_customize, 
	'separator_setting_1', array(
	'settings' => 'separator_setting_1',
	'section' => 'orbital_content_index'
	)));

	$wp_customize->add_setting('heading_setting_1');
	$wp_customize->add_control(new Heading_Custom_control($wp_customize, 'heading_setting_1', array(
		'settings' => 'heading_setting_1',
		'section' => 'orbital_content_index',
		'label' => __('Auto insert for the following content types', 'hostinger-affiliate-theme')
	)));

	$post_types = get_post_types();
	foreach ($post_types as $value) {
		$wp_customize->add_setting("orbital_enable_$value", array(
			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'sanitize_callback'      => 'orbital_sanitize_checkbox'
		));
	
		$wp_customize->add_control("orbital_enable_$value", array(
			'type' => 'checkbox',
			'section' => 'orbital_content_index',
			'label' =>  __('Activate on', 'hostinger-affiliate-theme') . " \"". $value . "\""
		));
	}


	$wp_customize->add_setting('separator_setting');
	$wp_customize->add_control(new Separator_Custom_control($wp_customize, 
	'separator_setting', array(
	'settings' => 'separator_setting',
	'section' => 'orbital_content_index'
	)));

	$wp_customize->add_setting('heading_setting_2');
	$wp_customize->add_control(new Heading_Custom_control($wp_customize, 'heading_setting_2', array(
		'settings' => 'heading_setting_2',
		'section' => 'orbital_content_index',
		'label' => __('Customize the Table of Content', 'hostinger-affiliate-theme')
	)));

	$wp_customize->add_setting('orbital_user_hide_index', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback'      => 'orbital_sanitize_checkbox'
	));

	$wp_customize->add_control('orbital_user_hide_index', array(
		'type' => 'checkbox',
		'section' => 'orbital_content_index',
		'label' => __('Allow user to change visibility', 'hostinger-affiliate-theme')
	));

	$wp_customize->add_setting('orbital_hide_index', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'sanitize_callback'      => 'orbital_sanitize_checkbox'
	));

	$wp_customize->add_control('orbital_hide_index', array(
		'type' => 'checkbox',
		'section' => 'orbital_content_index',
		'label' => __('Hide initially', 'hostinger-affiliate-theme')
	));

	$wp_customize->add_setting('orbital_index_position', array(
		'type'      => 'theme_mod',
		'capability'      => 'edit_theme_options',
		'sanitize_callback'      => 'orbital_sanitize_select',
		'default'      => '1'
	));

	$cats = array(
		'1' => __('Before First "h2"', 'hostinger-affiliate-theme') ,
		'2' => __('After First "h2"', 'hostinger-affiliate-theme') ,
		'3' => __('Before Content', 'hostinger-affiliate-theme') ,
		'4' => __('After Content', 'hostinger-affiliate-theme')
	);

	$wp_customize->add_control('orbital_index_position', array(
		'type' => 'select',
		'section' => 'orbital_content_index',
		'label' => __('Position', 'hostinger-affiliate-theme') ,
		'choices' => $cats
	));

	$wp_customize->add_setting('orbital_index_list', array(
		'type'      => 'theme_mod',
		'capability'      => 'edit_theme_options',
		'sanitize_callback'      => 'orbital_sanitize_select',
		'default'      => '1'
	));

	$cats = array(
		'1' => __('Numbered list', 'hostinger-affiliate-theme') ,
		'2' => __('Bulleted list', 'hostinger-affiliate-theme') ,
		'3' => __('No numbers or bullet point', 'hostinger-affiliate-theme')
	);

	$wp_customize->add_control('orbital_index_list', array(
		'type' => 'select',
		'section' => 'orbital_content_index',
		'label' => __('Format', 'hostinger-affiliate-theme') ,
		'choices' => $cats
	));

	$wp_customize->add_setting('orbital_index_options', array(
		'type'      => 'theme_mod',
		'capability'      => 'edit_theme_options',
		'sanitize_callback'      => 'orbital_sanitize_select',
		'default'      => '1'
	));

	$cats = array(
		'1' => __('Show only H2', 'hostinger-affiliate-theme'),
		'2' => __('Show H2 / H3', 'hostinger-affiliate-theme'),
		'3' => __('Show H2 / H3 / H4', 'hostinger-affiliate-theme'),
		'4' => __('Show H2 / H3 / H4 / H5', 'hostinger-affiliate-theme'),
		'5' => __('Show H2 / H3 / H4 / H5 / H6', 'hostinger-affiliate-theme')
	);
	

	$wp_customize->add_control('orbital_index_options', array(
		'type' => 'select',
		'section' => 'orbital_content_index',
		'label' => __('Headers', 'hostinger-affiliate-theme') ,
		'choices' => $cats
	));

	$wp_customize->add_setting('orbital_index_text', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default' => __('Index', 'hostinger-affiliate-theme'),
		'sanitize_callback' => 'wp_filter_nohtml_kses'
	));

	$wp_customize->add_control('orbital_index_text', array(
		'label' => __('Title', 'hostinger-affiliate-theme') ,
		'section' => 'orbital_content_index',
		'type' => 'text'
	));
	
}
