<?php 
  $gal_title = get_field( 'gal_title' );
  $gal_btn_text = get_field( 'gal_btn_text' );
?>

<section class="gallery" id="gallery">
  <div class="container swiper swiperGallery">
    <?php if ( $gal_title || $gal_btn_text ) : ?>
      <div class="gallery__head">
          <h2 class="title"><?php the_field('gal_title'); ?></h2>
          <a href="<?php the_field('gal_btn_to'); ?>" class="btn gallery__btn"><?php the_field('gal_btn_text'); ?></a>
      </div>
    <?php endif; ?>
      

    <div class="swiper-wrapper gallery__slider">
      <?php
        $gal = get_field('gal_imgs');

        if ( $gal && is_array($gal) && !is_wp_error($gal) ) {
            foreach ($gal as $item) {
            ?>
              <div class="swiper-slide gallery__photo">
                <img src="<?php echo $item['image'] ?>" alt="gallery photo" />
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