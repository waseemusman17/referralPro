<?php

// To add Style Sheet
function css_resourses(){
    wp_enqueue_style('style' , get_stylesheet_rui() );
}
add_action('wp_enqueue_script','css_resourses');



// Logo Code
add_theme_support('custom-logo');
add_theme_support('custom-logo' , array(
    'height'      => 100,
    'width'       => 100,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
));

// Menu Bar
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' )
        )
    );
}

add_action( 'init', 'wpb_custom_new_menu' );




/*Custom Service Post type start*/
function cw_post_type_Services() {
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );
    $labels = array(
        'name' => _x('Services', 'plural'),
        'singular_name' => _x('Services', 'singular'),
        'menu_name' => _x('Services', 'admin menu'),
        'name_admin_bar' => _x('Services', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Services'),
        'new_item' => __('New Services'),
        'edit_item' => __('Edit Services'),
        'view_item' => __('View Services'),
        'all_items' => __('All Services'),
        'search_items' => __('Search Services'),
        'not_found' => __('No Services found.'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Services'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-admin-home',
    );

register_post_type('Services', $args);
}

add_action('init', 'cw_post_type_Services');
/*Custom Service Post type end*/



/*Custom Portfolio Post type start*/
function cw_post_type_Portfolio() {
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );
    $labels = array(
        'name' => _x('Portfolio', 'plural'),
        'singular_name' => _x('Portfolio', 'singular'),
        'menu_name' => _x('Portfolio', 'admin menu'),
        'name_admin_bar' => _x('Portfolio', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Portfolio'),
        'new_item' => __('New Portfolio'),
        'edit_item' => __('Edit Portfolio'),
        'view_item' => __('View Portfolio'),
        'all_items' => __('All Portfolio'),
        'search_items' => __('Search Portfolio'),
        'not_found' => __('No Portfolio found.'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Portfolio'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-portfolio',
    );

register_post_type('Portfolio', $args);
}

add_action('init', 'cw_post_type_Portfolio');
/*Custom Portfolio Post type end*/


/*for set featured image*/

add_theme_support( 'post-thumbnails' );