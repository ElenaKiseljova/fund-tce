<?php 
  $ptns = get_field('partners');
?>
<section class="partner" id="partners">
  <div class="container partner__container">
      <div class="partner__head">
          <h2 class="title"><?php the_field('partners_title'); ?></h2>
          <a href="<?php the_field('partners_btn_to'); ?>" class="btn partner__btn">
              <?php the_field('partners_btn_text'); ?>
          </a>
      </div>
      <div class="partner__grid">
        <?php if ( $ptns && is_array($ptns) && !is_wp_error( $ptns ) ) : ?>
          <?php          
          foreach ($ptns as $item) : ?>
              <div class="partner__img">
                  <img src="<?php echo $item['image'] ?>" alt="partner logo"/>
              </div>
          <?php endforeach; ?>
        <?php endif; ?>  
      </div>
      <a href="<?php the_field('partners_btn_to'); ?>" class="btn partner__btn partner__btn--mobile">
          <?php the_field('partners_btn_text'); ?>
      </a>
      <div class="partner__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo"/>
      </div>
  </div>
</section>