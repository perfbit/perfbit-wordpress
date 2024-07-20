<?php

/**
 * Orbital functions and definitions
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage Orbital
 * @since 1.0
 */

if ( file_exists( $autoloadFile = __DIR__ . '/vendor/autoload.php' ) ) {
	require_once $autoloadFile;
}

/**
 * Define theme version
 */

if ( ! defined( 'THEME_VERSION' ) ) {
	define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );
}
/**
 * Define theme updater URI
 */

if ( ! defined( 'HOSTINGER_AFFILIATES_WP_CONFIG_PATH' ) ) {
	define( 'HOSTINGER_AFFILIATES_WP_CONFIG_PATH', ABSPATH . '/.private/config.json' );
}

if ( file_exists( $config = get_template_directory() . '/inc/config.php' ) ) {
	require_once $config;
	$hostingerWpConfig = new HostingerAffiliatesWpConfig( HOSTINGER_AFFILIATES_WP_CONFIG_PATH );
	$themeUpdaterURI = $hostingerWpConfig->getThemeUpdaterURI();
	define('THEME_UPDATER', $themeUpdaterURI);
}



/**
 *
 * Check for theme updates
 *
 */

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

if ( class_exists( PucFactory::class ) && defined( 'THEME_UPDATER' ) ) {
	$htsUpdateChecker = PucFactory::buildUpdateChecker(
		THEME_UPDATER,
		__FILE__,
		'hostinger-affiliate-theme'
	);
}

/*
 * Compability System
 */

if (version_compare($GLOBALS['wp_version'], '4.7', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}

/*
 * Theme Setup
 */

if (!function_exists('orbital_setup')) :

    function orbital_setup() {

        load_theme_textdomain('hostinger-affiliate-theme', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('align-wide');
        add_theme_support('customize-selective-refresh-widgets');
        register_nav_menus(array('primary' => esc_html__('Primary Menu', 'hostinger-affiliate-theme')));

        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('custom-logo', array(
            'height' => 90,
            'width' => 450,
            'flex-height' => true,
            'flex-width' => true,
        ));

        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'audio',
        ));

        $defaults = array(
            'default-image' => '',
            'width' => 1920,
            'height' => 400,
            'flex-height' => true,
            'flex-width' => true,
            'uploads' => true,
            'random-default' => false,
            'header-text' => true,
        );

        add_theme_support('custom-header', $defaults);
        add_theme_support('custom-background');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');


        add_image_size(
                'thumbnail-center',
                orbital_customize_option('orbital_loop_cluster_img_width', 390),
                orbital_customize_option('orbital_loop_cluster_img_height', 200),
                array('top', 'center')
        );

        add_image_size('thumbnail-featured', 333, 360, array('center', 'center'));

        add_theme_support('starter-content', array(
            'widgets' => array(
                'posts' => array(
                    'recent-posts-orbital' => array('recent-posts-orbital', array(
                            'title' => esc_html__('Lasts Posts', 'hostinger-affiliate-theme'),
                            'thumbnail' => true,
                        )),
                ),
            ),
        ));
    }

endif;
add_action('after_setup_theme', 'orbital_setup');


/*
 * Content Width Definition
 */

if (!function_exists('orbital_content_width')) :

    function orbital_content_width() {

        if (orbital_customize_option('orbital_layout_container')) {
            $container = orbital_customize_option('orbital_layout_container') * 16;
        } else {
            $container = 768;
        }

        $GLOBALS['content_width'] = apply_filters('orbital_content_width', $container);
    }

endif;
add_action('after_setup_theme', 'orbital_content_width', 0);


/*
 * Widget Area Register
 */

if (!function_exists('orbital_widgets_init')) :

    function orbital_widgets_init() {
        register_sidebar(array(
            'name' => esc_html__('Posts Sidebar', 'hostinger-affiliate-theme'),
            'id' => 'posts',
            'description' => esc_html__('Add widgets here.', 'hostinger-affiliate-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title n-m-t">',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Pages Sidebar', 'hostinger-affiliate-theme'),
            'id' => 'pages',
            'description' => esc_html__('Add widgets here.', 'hostinger-affiliate-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title n-m-t">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Pilar Pages Sidebar', 'hostinger-affiliate-theme'),
            'id' => 'pilar',
            'description' => esc_html__('Add widgets here.', 'hostinger-affiliate-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title n-m-t">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Page Home Sidebar', 'hostinger-affiliate-theme'),
            'id' => 'page-home',
            'description' => esc_html__('Add widgets here.', 'hostinger-affiliate-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title n-m-t">',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => esc_html__('No advertisment Sidebar', 'hostinger-affiliate-theme'),
            'id' => 'no-ads',
            'description' => esc_html__('Add widgets here.', 'hostinger-affiliate-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title n-m-t">',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Archives Sidebar', 'hostinger-affiliate-theme'),
            'id' => 'archives',
            'description' => esc_html__('Add widgets here.', 'hostinger-affiliate-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title n-m-t">',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer Widget Area 1', 'hostinger-affiliate-theme'),
            'id' => 'widget-footer-1',
            'description' => esc_html__('Add widgets here.', 'hostinger-affiliate-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title n-m-t">',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer Widget Area 2', 'hostinger-affiliate-theme'),
            'id' => 'widget-footer-2',
            'description' => esc_html__('Add widgets here.', 'hostinger-affiliate-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title n-m-t">',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer Widget Area 3', 'hostinger-affiliate-theme'),
            'id' => 'widget-footer-3',
            'description' => esc_html__('Add widgets here.', 'hostinger-affiliate-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title n-m-t">',
            'after_title' => '</h4>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Footer Widget Area 4', 'hostinger-affiliate-theme'),
            'id' => 'widget-footer-4',
            'description' => esc_html__('Add widgets here.', 'hostinger-affiliate-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title n-m-t">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Content 404', 'hostinger-affiliate-theme'),
            'id' => 'sidebar-404',
            'description' => esc_html__('Add widgets here.', 'hostinger-affiliate-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title n-m-t">',
            'after_title' => '</h4>',
        ));

        register_sidebar(array(
            'name' => esc_html__('Shop Sidebar', 'hostinger-affiliate-theme'),
            'id' => 'shop',
            'description' => esc_html__('Add widgets here.', 'hostinger-affiliate-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title n-m-t">',
            'after_title' => '</h4>',
        ));
    }

endif;
add_action('widgets_init', 'orbital_widgets_init');


/*
 * URL Fonts Register
 */

if (!function_exists('orbital_fonts_url')) :

    function orbital_fonts_url() {
        $fonts_url = '';
        $fonts = array();
        $subsets = 'latin,latin-ext';

        if (orbital_customize_option('orbital_typo_headings')) {
            $fonts[] = orbital_customize_option('orbital_typo_headings');
        }
        if (orbital_customize_option('orbital_typo_body')) {
            $fonts[] = orbital_customize_option('orbital_typo_body');
        }
        if (orbital_customize_option('orbital_typo_logo')) {
            $fonts[] = orbital_customize_option('orbital_typo_logo');
        }
        if ($fonts) {
            $fonts_url = add_query_arg(array(
                'family' => urlencode(implode('|', $fonts)),
                'subset' => urlencode($subsets),
                'display' => 'swap'
                    ), 'https://fonts.googleapis.com/css');

            //md5 downaloded file (function download_url wp
            /*
              $tmp_filename = download_url('https://pagespeed.ninja/api/getcss?' . http_build_query($data), 60);
              if (is_string($tmp_filename)) {
              $css = @file_get_contents($tmp_filename);
              @unlink($tmp_filename);
              return $css;
              }
              return '';
             */
        }
        return $fonts_url;
    }

endif;


/*
 * URL Fonts Register
 */

if (!function_exists('orbital_scripts')) :

    function orbital_scripts() {

        wp_enqueue_style('orbital-fonts', orbital_fonts_url(), array(), THEME_VERSION);

        wp_enqueue_style('orbital-style', get_template_directory_uri() . '/assets/css/main.css', array(), THEME_VERSION);

        if (orbital_check_woocommerce()) {
            wp_enqueue_style('orbital-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), THEME_VERSION);
        }
        if(orbital_customize_option('orbital_accessibility_links')){
            $custom_css = "
                a {
                    text-decoration: none;
                }
                a:hover {
                    text-decoration: none;
                }
            ";
            wp_add_inline_style( 'orbital-style', $custom_css );
        }

        if(!orbital_customize_option('orbital_accessibility_menu')){
            $custom_css = "
                .primary-menu li.menu-item-has-children:focus > ul, .primary-menu li.menu-item-has-children.focus > ul {
                    right: 0;
                    opacity: 1;
                    transform: translateY(0);
                    transition: opacity 0.15s linear, transform 0.15s linear;
                }
               
            ";
            wp_add_inline_style( 'orbital-style', $custom_css );
        }

        if (orbital_customize_option('orbital_gdpr_general_active')) {
            wp_enqueue_script('orbital-gdpr-js', get_template_directory_uri() . '/assets/js/gdpr.min.js', array(), THEME_VERSION, false); //changed from bottom
        }

        wp_enqueue_script('orbital-social', get_template_directory_uri() . '/assets/js/social.min.js', false, THEME_VERSION, true); //changed from bottom

        if (orbital_customize_option('orbital_performance_render_blocking_js')) {
            wp_enqueue_script('orbital-main', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), THEME_VERSION, false);
           wp_enqueue_script('orbital-menu', get_template_directory_uri() . '/assets/js/menu.min.js', array('jquery'), THEME_VERSION, false);
           wp_enqueue_script('orbital-search-box', get_template_directory_uri() . '/assets/js/search-box.min.js', array('jquery'), THEME_VERSION, false);
        } else {
            wp_enqueue_script('orbital-main', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), THEME_VERSION, true);
           wp_enqueue_script('orbital-menu', get_template_directory_uri() . '/assets/js/menu.min.js', array('jquery'), THEME_VERSION, true);
           wp_enqueue_script('orbital-search-box', get_template_directory_uri() . '/assets/js/search-box.min.js', array('jquery'), THEME_VERSION, true);
        }


        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

endif;
add_action('wp_enqueue_scripts', 'orbital_scripts');

/** ADDED TAG rel=preload in fonts * */
if (!function_exists('orbital_add_preload_tag_fonts')) :

    function orbital_add_preload_tag_fonts($html, $handle) {
        if (strpos($handle, 'orbital-font') !== false) {
            $preload = str_replace("rel='stylesheet'",
                    " rel='preload' as='style'  ", $html);
            $style = $html;
            return $preload . $style;
        }
        return $html;
    }

endif;
add_filter('style_loader_tag', 'orbital_add_preload_tag_fonts', 10, 2);


/*
 * Add Extra Funcionality
 */
require get_template_directory() . '/inc/orbital-minifier.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/meta-box.php';
require get_template_directory() . '/inc/actions.php';
require get_template_directory() . '/inc/jetpack.php';
require get_template_directory() . '/inc/shortcodes.php';
require get_template_directory() . '/inc/wpgallery.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/woocommerce-filters.php';
require get_template_directory() . '/inc/woocommerce-tags.php';
require get_template_directory() . '/inc/comments-walker.php';
require get_template_directory() . '/inc/json-ld.php';
require get_template_directory() . '/inc/yoast-filters.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/advertisment.php';
require get_template_directory() . '/inc/social.php';
require get_template_directory() . '/inc/toc.php';


if (orbital_customize_option('orbital_performance_lazy_load')) {
    require get_template_directory() . '/inc/lazy-load.php';
}

if (!function_exists('orbital_gutenberg_initialize')) {
    require get_template_directory() . '/inc/gutenberg/gutenberg.php';
}

if (orbital_customize_option('orbital_quicklink_active')) {
    require get_template_directory() . '/inc/quicklink.php';
}


/*
 * Editor Style Register
 */

if (!function_exists('orbital_theme_add_editor_styles')) :

    function orbital_theme_add_editor_styles() {
        add_editor_style('assets/css/editor-style.css');
    }

endif;
add_action('admin_init', 'orbital_theme_add_editor_styles');


/*
 * Orbital Get Template Part
 */

if (!function_exists('orbital_get_template_part')) :

    function orbital_get_template_part($slug, $extension = 'php') {
        do_action("get_template_part_{$slug}", $slug);
        $templates = array();
        $templates[] = "{$slug}.{$extension}";
        locate_template($templates, true, false);
    }
endif;

function hasAttribute($attribute, $array){

    foreach ( $array as $element ) {
        if ( $attribute == $element->$attribute ) {
            return true;
        }
    }

    return false;
}

/*
 * Orbital Menu
 */
require get_template_directory() . '/inc/menu-functions.php';
require get_template_directory() . '/inc/class-orbital-menu-walker.php';

add_action('admin_footer', 'add_custom_script_to_footer');

function add_custom_script_to_footer() {
	?>
	<script>
		jQuery(document).ready(function($) {
			$('#option-page').addClass('closed');
		});
	</script>
	<?php
}
