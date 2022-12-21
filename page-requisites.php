<?php
/**
 * Template Name: Requisites Page
 **/
?>

<?php get_header(); ?>

<main class="main">
  <?php 
    get_template_part( 'templates/promo' );

    get_template_part( 'templates/fund' );

    get_template_part( 'templates/requisites/requisites' );
  ?>
</main>

<?php get_footer();?>