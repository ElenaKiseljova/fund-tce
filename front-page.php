<?php
/**
 * Template Name: Home Page
 **/
get_header();?>

<main class="main">
    <?php 
      get_template_part( 'templates/front-page/start' );

      get_template_part( 'templates/fund' );

      get_template_part( 'templates/front-page/mission' );

      get_template_part( 'templates/front-page/scope' );

      get_template_part( 'templates/founder' );

      get_template_part( 'templates/gallery' );

      get_template_part( 'templates/partner' );

      get_template_part( 'templates/docs' );
    ?>
</main>

<?php get_footer();?>
