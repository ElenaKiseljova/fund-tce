<section class="mission" id="mission">
  <div class="container mission__container">
      <div class="mission__left">
          <h2 
            class="title mission__title js-transition-title"
            data-scroll data-scroll-class="show" 
            data-scroll-repeat="true"
          >
            <?php the_field('mission_title'); ?>
          </h2>
          <p 
            class="text-1 mission__text js-transition-text" 
            data-scroll data-scroll-class="show" 
            data-scroll-repeat="true"
          >
            <?php the_field('mission_text'); ?>
          </p>
          <a href="<?php the_field('mission_btn'); ?>" class="btn mission__btn">
            <?php the_field('mission_btn_text'); ?>
          </a>
      </div>
      <div 
        class="mission__right js-paralax"
        data-scroll data-scroll-class="show" 
        data-scroll-repeat="true"
      >
          <div class="mission__img mission__img--small js-paralax-inner" style="--delay: 0.4s">
              <img src="<?php the_field('mission_img-small'); ?>" alt="people"/>
          </div>
          <div class="mission__img js-paralax-inner" style="--delay: 0.2s">
              <img src="<?php the_field('mission_img'); ?>" alt="people"/>
          </div>
      </div>
      <div class="mission__logo" data-scroll data-scroll-speed="5">
          <img src="<?php the_field('mission_logo'); ?>" alt="logo"/>
      </div>
  </div>
</section>