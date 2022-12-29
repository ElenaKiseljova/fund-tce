<?php
/**
 * Template Name: Other Page
 **/
?>

<?php get_header(); ?>

<main class="main">
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
</main>

<?php get_footer();?>
