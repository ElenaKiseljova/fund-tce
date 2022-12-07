<?php 
  $baner_img = get_field('baner_img');
  $baner_subtitle = get_field('baner_subtitle');
?>

<section class="promo">
  <div class="promo__wrapper">
      <div class="container promo__container">
          <h1>
              <?php the_field('baner_title') ?>
          </h1>

          <?php if ( $baner_subtitle ) : ?>
            <p>
              <?php the_field('baner_subtitle'); ?>
            </p>
          <?php endif; ?>          
      </div>

      <?php if ( $baner_img ) : ?>
        <div class="promo__img">
          <img src="<?php the_field('baner_img'); ?>" alt="banner" />
        </div>
      <?php endif; ?>        
      
      <?php 
        if ( 
          !is_page_template( 'page-team.php' ) && 
          !is_page_template( 'page-contacts.php' ) && 
          !is_page_template( 'page-appeal.php' ) 
        ) {
          get_template_part( 'templates/fund' );
        }          
      ?>
  </div>
</section>