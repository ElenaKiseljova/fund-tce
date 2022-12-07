<?php

function fundtce_assets()
{
    wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');

    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');

    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js');
}

add_action('wp_enqueue_scripts', 'fundtce_assets');

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme Menu Settings'),
            'menu_title'    => __('Menu Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}
?>