<?php 
  $gal = get_field('gal_imgs');
  $gal_title = get_field( 'gal_title' );
  $gal_btn_to = get_field( 'gal_btn_to' );
?>

<section class="gallery <?= (!$gal_btn_to || $gal_btn_to === '') && (!$gal_title || $gal_title === '')  ? 'pt-0' : ''; ?>" id="gallery">
  <div class="container swiper swiperGallery">
    <?php if ( ($gal_title && $gal_title !== '') || ($gal_btn_to && $gal_btn_to !== '') ) : ?>
      <div class="gallery__head">
          <h2 
            class="title js-transition-title"
            data-scroll data-scroll-class="show" 
            data-scroll-repeat="true"
          >
            <?php the_field('gal_title'); ?>
          </h2>

          <?php if ($gal_btn_to && $gal_btn_to !== '') : ?>
            <a href="<?= $gal_btn_to; ?>" class="btn gallery__btn"><?php the_field('gal_btn_text'); ?></a>
          <?php endif; ?>          
      </div>
    <?php endif; ?>
      

    <div class="swiper-wrapper gallery__slider">
      <?php
        if ( $gal && is_array($gal) && !is_wp_error($gal) ) {
          foreach ($gal as $item) {
          ?>
            <div class="swiper-slide gallery__slide">
              <div class="gallery__photo"><img src="<?php echo $item['image'] ?>" alt="gallery photo" /></div>              
            </div>
          <?php
          }
        }
      ?>
    </div>

    <div class="scrollbar">
        <div class="scrollbar__drag"></div>
    </div>
  </div>
</section>