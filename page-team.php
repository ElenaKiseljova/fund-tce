<?php
/**
 * Template Name: Team Page
 **/
?>

<?php get_header(); ?>

<main class="main">
  <?php 
    get_template_part( 'templates/promo' );

    get_template_part( 'templates/founder' );

    get_template_part( 'templates/gallery' );

    get_template_part( 'templates/team/team' );
  ?>
</main>

<?php get_footer();?>