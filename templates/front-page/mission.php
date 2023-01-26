<section class="mission" id="mission">
  <div class="container mission__container">
      <div class="mission__left">
          <h2 
            class="title mission__title transition-title-line"
            data-text="<?php the_field('mission_title'); ?>"
            data-scroll data-scroll-class="show" 
            data-scroll-repeat="true"
          >
            <?php the_field('mission_title'); ?>
          </h2>
          <p class="text-1 mission__text">
              <?php the_field('mission_text'); ?>
          </p>
          <a href="<?php the_field('mission_btn'); ?>" class="btn mission__btn"><?php the_field('mission_btn_text'); ?></a>
      </div>
      <div class="mission__right">
          <div class="mission__img mission__img--small">
              <img src="<?php the_field('mission_img-small'); ?>" alt="people"/>
          </div>
          <div class="mission__img">
              <img src="<?php the_field('mission_img'); ?>" alt="people"/>
          </div>
      </div>
      <div class="mission__logo">
          <img src="<?php the_field('mission_logo'); ?>" alt="logo"/>
      </div>
  </div>
</section>