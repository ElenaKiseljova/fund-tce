<?php
/* fundtce */
// define('MY_THEME_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/fundtce');

// Styles theme
add_action('wp_enqueue_scripts', 'fundtce_styles', 3);
function fundtce_styles () {    
  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');

  wp_enqueue_style('fundtce-style', get_stylesheet_uri());
}

// Scripts theme
add_action('wp_enqueue_scripts', 'fundtce_scripts', 5);
function fundtce_scripts () {    
  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', $deps = array(), $ver = null, $in_footer = true );
  
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', $deps = array(), $ver = null, $in_footer = true);
}

// After setup
add_action( 'after_setup_theme', 'fundtce_after_setup_theme_function' );

if (!function_exists('fundtce_after_setup_theme_function')) :
  function fundtce_after_setup_theme_function () {
    load_theme_textdomain('fundtce', get_template_directory() . '/languages');
  }
endif;

add_action('acf/init', 'fundtce_acf_op_init');
function fundtce_acf_op_init() {

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