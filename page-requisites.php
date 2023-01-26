<?php
/**
 * Template Name: Requisites Page
 **/
?>

<?php get_header(); ?>

<?php 
  get_template_part( 'templates/promo' );

  get_template_part( 'templates/fund' );

  get_template_part( 'templates/requisites/requisites' );
?>

<?php get_footer();?>