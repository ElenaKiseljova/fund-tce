<?php 
  $baner_img = get_field('baner_img');
  $baner_title = get_field('baner_title');
  $baner_subtitle = get_field('baner_subtitle');
?>

<section class="promo" id="promo">
  <div class="promo__wrapper">
      <div class="container promo__container">
          <h1>
              <?= $baner_title && $baner_title !== '' ? $baner_title : get_the_title(  ); ?>
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
  </div>
</section>