<?php

function my_custom_wc_theme_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );

function initTheme(){
    add_filter('use_block_editor_for_post', '__return_false');
}
add_action('init','initTheme');

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Menu chính' ));
    register_nav_menu('footer-menu',__( 'Menu footer' ));
}
add_action( 'init', 'register_my_menu' );
///////

///
function slider_post_type(){
$label = array(
    'name' => 'Ảnh sliders',
    'singular_name' => 'Ảnh slider'
);
$args = array(
    'labels' => $label,
    'description' => 'Ảnh slider',
    'supports' => array(
        'title',
        'thumbnail'
    ),
    'hierarchical' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-image-flip-horizontal',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'post'
);

register_post_type('slider', $args);
}
add_action('init', 'slider_post_type');

/////////////////////////////
function service_post_type(){
    $label = array(
        'name' => 'Services',
        'singular_name' => 'Service'
    );
    $args = array(
        'labels' => $label,
        'description' => 'Dịch vụ',
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-chat',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post'
    );

    register_post_type('service', $args);

    }
    add_action('init', 'service_post_type');
/////////////////////////////////////////////////////////

?>