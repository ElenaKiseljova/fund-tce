<?php 
  $docs = get_field( 'documents' );
  $documents_btn_to = get_field( 'documents_btn_to' );
?>

<section class="docs <?= is_front_page(  ) ? '' : 'docs--inner'; ?>" id="docs">
  <div class="container docs__container swiper swiperDocs">
      <div class="docs__head">
          <h2 
            class="title js-transition-title"
            data-scroll data-scroll-class="show" 
            data-scroll-repeat="true"
          >
            <?php the_field('documents_title'); ?>
          </h2>

          <?php if ( $documents_btn_to && $documents_btn_to !== '' ) : ?>
            <a href="<?= $documents_btn_to; ?>" class="btn docs__btn">
              <?php the_field('documents_btn_text'); ?>
            </a>
          <?php endif; ?>          
      </div>
      <div 
        class="swiper-wrapper docs__grid js-paralax"
        data-scroll data-scroll-class="show" 
        data-scroll-repeat="true"
      >
          <?php if ( $docs && is_array($docs) && !is_wp_error( $docs ) ) : ?>
            <?php foreach ($docs as $key => $item) : ?>
              <?php 
                $fancybox_src = $item['file'] ? $item['file'] :  $item['image'];
              ?>
              <div class="swiper-slide docs__img js-paralax-item"  style="--delay: <?= 4 + $key / 10; ?>s;">
                <a data-fancybox data-src="<?= $fancybox_src; ?>" href="#">
                  <img src="<?= $item['image']; ?>" alt="document"/>
                </a>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>          
      </div>
      <div class="scrollbar">
          <div class="scrollbar__drag"></div>
      </div>

      <?php if ( $documents_btn_to && $documents_btn_to !== '' ) : ?>
        <a href="<?= $documents_btn_to; ?>" class="btn docs__btn docs__btn--mobile">
          <?php the_field('documents_btn_text'); ?>
        </a>
      <?php endif; ?>      
  </div>
</section>