<section class="help">
  <div class="help__wrapper">
    <div class="container help__container">
        <h2 
          class="title help__title js-transition-title"
          data-scroll data-scroll-class="show" 
          data-scroll-repeat="true"
        >
          <?php the_field('help_title'); ?>
        </h2>
        <div 
          class="help__body js-paralax"
          data-scroll data-scroll-class="show" 
          data-scroll-repeat="true"
        >
            <div class="help__img js-paralax-inner" style="--delay: 0.4s">
                <img src="<?php the_field('help_img'); ?>" alt="Ukraine flag" />
            </div>
            <div class="help__block js-paralax-inner" style="--delay: 0.6s">
                <div class="help__info">
                    <p class="text-2 help__text">
                        <?php the_field('help_text_1'); ?>
                        <br />
                        <br />
                        <?php the_field('help_text_2'); ?>
                    </p>
                    <p class="text-2 help__text">
                        <?php the_field('help_text_3'); ?>
                        <br />
                        <br />
                        <span class="help__text--width"><?php the_field('help_phone_text'); ?></span>
                        <span class="help__phone"><?php the_field('help_phone'); ?></span>
                    </p>
                </div>
                <a href="<?php the_field('help_btn_to'); ?>" class="btn btn--black help__btn">
                    <?php the_field('help_btn_text'); ?>
                </a>
            </div>
        </div>
    </div>
    <div class="help__logo" data-scroll data-scroll-speed="5">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo" />
    </div>
  </div>
</section>