<section class="start" id="start">
  <div class="start__wrapper">
    <div class="container">
      <h2 
        class="title start__title js-transition-title"
        data-scroll data-scroll-class="show" 
        data-scroll-repeat="true"
      >
        <?php the_field('start_title'); ?>
      </h2>
      <h1 
        class="title start__name js-transition-title" 
        data-scroll data-scroll-class="show" 
        data-scroll-repeat="true"
      >
        <?php the_field('start_name'); ?>
      </h1>
      <div class="start__img">
          <img src="<?php the_field('start_img'); ?>" alt="ukraine flag"/>
      </div>
    </div>
  </div>
</section>