<section class="founder">
    <div class="founder__wrapper <?= is_front_page(  ) ? '' : 'founder__wrapper--inner'?>">
        <div class="container founder__container">
            <div class="founder__info">
                <h2 class="title founder__title"><?php the_field('founder_title'); ?></h2>
                <div class="founder__img founder__img--mobile">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neroba.jpg" alt="Andriy Neroba"/>
                </div>
                <p class="text-1 founder__text">
                    <?php the_field('founder_text'); ?>
                </p>
                <div class="founder__bottom">
                  <?php if ( is_front_page(  ) ) : ?>
                    <a href="<?php the_field('founder_btn_link'); ?>" class="btn founder__btn"><?php the_field('founder_btn_text'); ?></a>
                  <?php endif; ?>
                    
                  <div class="founder__about <?= is_front_page(  ) ? '' : 'founder__about--inner'; ?>">
                      <h3 class="title-2 founder__name"><?php the_field('founder_name'); ?></h3>
                      <p class="text-2 text--grey">
                          <span class="founder__special"><?php the_field('founder_special'); ?></span>
                      </p>
                  </div>
                </div>
            </div>
            <div class="founder__img">
                <img src="<?php the_field('founder_img'); ?>" alt="Andriy Neroba"/>
            </div>
            
            <div class="founder__logo <?= is_front_page(  ) ? '' : 'founder__logo--inner'; ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo"/>
            </div>         
        </div>
    </div>
</section>