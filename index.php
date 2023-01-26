<?php
/**
 * Template Name: Other Page
 **/
?>

<?php get_header(); ?>

<?php 
  get_template_part( 'templates/promo' );
?>

<section class="page">
  <div class="page__container container">
    <div class="page__content">
      <?php the_content(  ); ?>
    </div>
  </div>
</section>

<?php get_footer();?>
