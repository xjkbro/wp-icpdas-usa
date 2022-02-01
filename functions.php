<?php

/**
 * Theme setup.
 */
function tailpress_setup()
{
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'tailpress'),
            'footer' => "Footer Menu Items"
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
    $theme = wp_get_theme();

    wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
    wp_enqueue_script('tailpress', tailpress_asset('js/app.js'), array(), $theme->get('Version'));

    wp_enqueue_script('main-style', get_template_directory_uri() . "/resources/js/main.js", array('jquery'), $theme->get('Version'), true);
    wp_enqueue_script('product-page-style', get_template_directory_uri() . "/resources/js/product-page.js", array('jquery'), $theme->get('Version'), true);
    wp_enqueue_script('collapsible', get_template_directory_uri() . "/resources/js/collapsible.js", array('jquery'), $theme->get('Version'), true);

    // ===============================
    // Thirdparty css and script files
    // ===============================

    // jQuery
    // wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0');
    // Font Awesome
    wp_enqueue_style("icpdas-fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css", array(), "6.0.0", "all");
    wp_enqueue_script('icpdas-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js", array(), "6.0.0", true);
}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');


/**
 * Adds woocommerce support in theme.
 */
function tailpress_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'tailpress_add_woocommerce_support');


/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
    if (wp_get_environment_type() === 'production') {
        return get_stylesheet_directory_uri() . '/' . $path;
    }

    return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }

    if (isset($args->{"li_class_$depth"})) {
        $classes[] = $args->{"li_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
    if (isset($args->submenu_class)) {
        $classes[] = $args->submenu_class;
    }

    if (isset($args->{"submenu_class_$depth"})) {
        $classes[] = $args->{"submenu_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);


// /**
//  * 
//  * Removes WooCommerce Product Page Tabs
//  * 
//  */
// function wc_remove_all_product_tabs($tabs)
// {
//     unset($tabs['description']);        // Remove the description tab
//     unset($tabs['reviews']);       // Remove the reviews tab
//     unset($tabs['additional_information']);    // Remove the additional information tab
//     return $tabs;
// }

// add_filter('woocommerce_product_tabs', 'wc_remove_all_product_tabs', 98);

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 6; // 6 products per row
	}
}