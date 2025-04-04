<section class="content">
  <div class="container">
    <h2
      class="js-transition-title"
      data-scroll data-scroll-class="show" 
      data-scroll-repeat="true"
    >
      <?php the_field('descr_title'); ?>
    </h2>
    <div 
      class="content__body js-paralax"
      data-scroll data-scroll-class="show" 
      data-scroll-repeat="true"
    >
        <div class="content__block js-paralax-inner" style="--delay: 0.4s">
            <?php the_field('descr_text_1'); ?>
            <div class="content__img">
                <img src="<?php the_field('descr_image_1'); ?>" alt="content" />
            </div>
        </div>
        <div class="content__block js-paralax js-paralax-inner" style="--delay: 0.6s">
            <div class="content__img">
                <img src="<?php the_field('descr_image_2'); ?>" alt="content" />
            </div>
            <?php the_field('descr_text_2'); ?>
        </div>
    </div>
  </div>
</section>