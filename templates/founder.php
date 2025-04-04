<?php 
  $founder_btn_link = get_field( 'founder_btn_link' );
?>
<section 
  class="founder js-paralax" id="founder"
  data-scroll data-scroll-class="show" 
  data-scroll-repeat="true"
>
    <div class="founder__wrapper <?= is_front_page(  ) ? '' : 'founder__wrapper--inner'?>">
        <div class="container founder__container">
            <div class="founder__info">
                <h2 
                  class="title founder__title js-transition-title"
                  data-scroll data-scroll-class="show" 
                  data-scroll-repeat="true"
                >
                  <?php the_field('founder_title'); ?>
                </h2>
                <div class="founder__img founder__img--mobile">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/neroba.jpg" alt="Andriy Neroba"/>
                </div>
                <p 
                  class="text-1 founder__text js-transition-text" 
                  data-scroll data-scroll-class="show" 
                  data-scroll-repeat="true"
                >
                    <?php the_field('founder_text'); ?>
                </p>
                <div class="founder__bottom <?= is_front_page(  ) ? 'founder__bottom--end' : ''; ?>">
                  <?php if ( is_front_page(  ) && $founder_btn_link && $founder_btn_link !== '' ) : ?>
                    <a href="<?= $founder_btn_link; ?>" class="btn founder__btn"><?php the_field('founder_btn_text'); ?></a>
                  <?php endif; ?>
                    
                  <div class="founder__about <?= is_front_page(  ) ? '' : 'founder__about--inner'; ?>">
                      <h3 
                        class="title-2 founder__name js-transition-title"
                        data-scroll data-scroll-class="show" 
                        data-scroll-repeat="true"
                      >
                        <?php the_field('founder_name'); ?>
                      </h3>
                      <p class="text-2 text--grey">
                          <span class="founder__special"><?php the_field('founder_special'); ?></span>
                      </p>
                  </div>
                </div>
            </div>
            <div class="founder__img js-paralax-inner" style="--delay: 0.4s">
                <img src="<?php the_field('founder_img'); ?>" alt="Andriy Neroba"/>
            </div>
            
            <div 
              class="founder__logo <?= is_front_page(  ) ? '' : 'founder__logo--inner'; ?>"
              data-scroll data-scroll-speed="5"
            >
              <img src="<?= get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo"/>
            </div>         
        </div>
    </div>
</section>