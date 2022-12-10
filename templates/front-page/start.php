<section class="start" id="start">
  <div class="start__wrapper">
      <div class="container">
          <h2 class="title start__title"><?php the_field('start_title'); ?></h2>
          <h1 class="title start__name"><?php the_field('start_name'); ?></h1>
          <div class="start__img">
              <img src="<?php the_field('start_img'); ?>" alt="ukraine flag"/>
          </div>

          <?php 
            get_template_part( 'templates/fund' );
          ?>
      </div>
  </div>
</section>