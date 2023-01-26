<?php
/**
 * Template Name: Content Page
 **/
get_header();?>

<?php 
  get_template_part( 'templates/promo' );

  get_template_part( 'templates/fund' );

  get_template_part( 'templates/content/posts' );

  get_template_part( 'templates/content/posts' );
  get_template_part( 'templates/content/descr' );
  get_template_part( 'templates/content/help' );

  get_template_part( 'templates/gallery' );

  get_template_part( 'templates/partner' );
?>

<?php get_footer();?>
