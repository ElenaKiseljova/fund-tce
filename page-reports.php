<?php
/**
 * Template Name: Reports Page
 **/
?>

<?php get_header(); ?>

<main class="main">
  <?php 
    get_template_part( 'templates/promo' );

    get_template_part( 'templates/reports/reports' );
  ?>
</main>

<?php get_footer();?>