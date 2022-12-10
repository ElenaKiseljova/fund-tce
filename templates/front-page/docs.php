<?php 
  $docs = get_field('documents');
?>

<section class="docs" id="docs">
  <div class="container docs__container swiper swiperDocs">
      <div class="docs__head">
          <h2 class="title"><?php the_field('documents_title'); ?></h2>
          <a href="<?php the_field('documents_btn_to'); ?>" class="btn docs__btn">
              <?php the_field('documents_btn_text'); ?>
          </a>
      </div>
      <div class="swiper-wrapper docs__grid">
          

          <?php if ( $docs && is_array($docs) && !is_wp_error( $docs ) ) : ?>
            <?php foreach ($docs as $item) : ?>
              <div class="swiper-slide docs__img">
                  <img src="<?php echo $item['image'] ?>" alt="document"/>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>          
      </div>
      <div class="scrollbar">
          <div class="scrollbar__drag"></div>
      </div>
      <a href="<?php the_field('documents_btn_to'); ?>" class="btn docs__btn docs__btn--mobile">
          <?php the_field('documents_btn_text'); ?>
      </a>
  </div>
</section>