<?php
/**
 * Template Name: Contacts Page
 **/
?>

<?php get_header(); ?>

<main class="main">
  <?php 
    get_template_part( 'templates/promo' );

    get_template_part( 'templates/contacts/contacts' );
    get_template_part( 'templates/contacts/map' );
    get_template_part( 'templates/contacts/need-help' );

    get_template_part( 'templates/fund' );
  ?>
</main>

<?php get_footer();?>