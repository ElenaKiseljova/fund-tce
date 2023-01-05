<?php
/* fundtce */

// Styles theme
add_action('wp_enqueue_scripts', 'fundtce_styles', 3);
function fundtce_styles () {    
  if ( is_page_template( 'page-appeal.php' ) ) {
    wp_enqueue_style('custom-select', get_template_directory_uri() . '/assets/css/libs/custom-select.css');
  }

  wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/libs/swiper-bundle.min.css');

  if ( is_front_page(  ) || is_page_template( 'page-reports.php' ) ) {
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/libs/fancybox.css');
  }

  wp_enqueue_style('fundtce-style', get_stylesheet_uri());
}

// Scripts theme
add_action('wp_enqueue_scripts', 'fundtce_scripts', 5);
function fundtce_scripts () {    
  wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/libs/swiper-bundle.min.js', $deps = array(), $ver = null, $in_footer = true );
  
  if ( is_page_template( 'page-contacts.php' ) ) {
      $map = get_field( 'map' ) ?? [];
      $key = $map['key'] ?? '';
      $lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'uk';

      wp_enqueue_script('map-script', get_template_directory_uri() . '/assets/js/map.js', $deps = array(), $ver = null, $in_footer = true );
      wp_enqueue_script('g-maps-script', 'https://maps.googleapis.com/maps/api/js?key=' . $key . '&region=' . $lang . '&language=' . $lang . '&callback=initMap', $deps = array(), $ver = null, $in_footer = true );
  }

  if ( is_page_template( 'page-appeal.php' ) ) {
    wp_enqueue_script('custom-select', get_template_directory_uri() . '/assets/js/libs/custom-select.min.js', $deps = array(), $ver = null, $in_footer = true );
  }

  if ( is_page_template( 'page-requisites.php' ) ) {
    wp_enqueue_script('message', get_template_directory_uri() . '/assets/js/message.js', $deps = array(), $ver = null, $in_footer = true );
  }

  if ( is_front_page(  ) || is_page_template( 'page-reports.php' ) ) {
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/libs/fancybox.umd.js', $deps = array(), $ver = null, $in_footer = true );
  }

  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', $deps = array(), $ver = null, $in_footer = true);
}

// After setup
add_action( 'after_setup_theme', 'fundtce_after_setup_theme_function' );

if (!function_exists('fundtce_after_setup_theme_function')) :
  function fundtce_after_setup_theme_function () {
    load_theme_textdomain('fundtce', get_template_directory() . '/languages');

    /* ==============================================
    ********  //Меню
    =============================================== */
    register_nav_menu( 'header_menu_left', 'Header menu (Left)' );
    register_nav_menu( 'header_menu', 'Header menu (Right)' );  
    register_nav_menu( 'header_menu_additional', 'Header menu (Additional)' );    

    register_nav_menu( 'footer_menu_left', 'Footer menu (Left)' );
    register_nav_menu( 'footer_menu', 'Footer menu (Right)' );
}
endif;

add_action('acf/init', 'fundtce_acf_op_init');
function fundtce_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Налаштування теми FundTCE'),
            'menu_title'    => __('Налаштування теми FundTCE'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

/**
 * $mode : 'desktop', 'mobile'
 */
function fundtce_draw_menu($name = '', $mode = 'desktop')
{
  global $menu_name, $menu_items, $menu_mode;

  $menu_name = $name;
  $menu_mode = $mode;

  $locations = get_nav_menu_locations();
  
  if( $locations && isset( $locations[ $menu_name ] ) ){
  
    // получаем элементы меню
    $menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );
  }

  if ( str_contains($name, 'footer') ) {
    get_template_part( 'templates/nav', 'footer' );
  } else {
    get_template_part( 'templates/nav' );
  }  
}

/* ==============================================
  ********  //Получение ссылок на спецстраницы
  =============================================== */
  /**
   * $type: requisites
   */
  function fundtce_get_special_page( $type = 'requisites', $format = 'url' )
  {
    $page_name = $type . '_page_id';

    $page_id = get_field( $page_name, 'options' ) ?? null;
    
    if ( function_exists( 'pll_get_post' ) ) {
      $page_id = pll_get_post( $page_id ) ?? $page_id;
    }

    if ( $format === 'id') {
      return $page_id;
    }

    if ( $format === 'url') {
      $page_url = get_permalink( $page_id );
    
      return $page_url;
    }
  
    return;
  }
?>