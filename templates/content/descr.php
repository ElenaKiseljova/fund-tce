<section class="content">
  <div class="container">
    <h2
      class="transition-title-line"
      data-text="<?php the_field('descr_title'); ?>"
      data-scroll data-scroll-class="show" 
      data-scroll-repeat="true"
    >
      <?php the_field('descr_title'); ?>
    </h2>
    <div class="content__body">
        <div class="content__block">
            <?php the_field('descr_text_1'); ?>
            <div class="content__img">
                <img src="<?php the_field('descr_image_1'); ?>" alt="content" />
            </div>
        </div>
        <div class="content__block">
            <div class="content__img">
                <img src="<?php the_field('descr_image_2'); ?>" alt="content" />
            </div>
            <?php the_field('descr_text_2'); ?>
        </div>
    </div>
  </div>
</section>