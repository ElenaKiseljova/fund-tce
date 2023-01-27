<?php 
  $items = get_field('items');
?>
<section class="scope" id="scope">
  <div 
    class="container scope__container js-paralax"
    data-scroll data-scroll-class="show" 
    data-scroll-repeat="true"
  >
      <h2 
        class="title scope__title js-transition-title"
        data-scroll data-scroll-class="show" 
        data-scroll-repeat="true"
      >
          <?php the_field('scope_title'); ?>
      </h2>
      <div class="scope__body">
          <ul class="scope__list">
            <?php if ( $items && is_array($items) && !is_wp_error( $items ) ) : ?>
              <?php              
              $i = 0;
              foreach ($items as $key => $item) : ?>
                  <li class="scope__item js-paralax-item <?= $i === 0 ? 'active' : ''; ?>" style="--delay: <?= 4 + $key / 10; ?>s;">          
                      <div class="scope__head">
                          <p class="text-1 scope__name"><?php echo $item['scope_name']?></p>
                          <svg width="20" height="21">
                              <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                          </svg>
                      </div>
                      <div class="card card--scope scope__card scope__card--mobile">
                          <div class="card__img">
                              <img src="<?php echo $item['card_img']?>" alt="scope image"/>
                          </div>
                          <div class="card__text">
                              <h3><?php echo $item['scope_name']?></h3>
                              <p>
                                  <?php echo $item['card_text']?>
                              </p>
                          </div>
                          <a href="<?php echo $item['card_btn']?>" class="btn btn--black card__btn"><?php the_field('scope_btn_text'); ?></a>
                      </div>
                  </li>
              <?php
              $i++;
              endforeach; ?>
            <?php endif; ?>              
          </ul>

          <ul class="scope__right">
            <?php if ( $items && is_array($items) && !is_wp_error( $items ) ) : ?>
              <?php
              $a = 0;
              foreach ($items as $item) : ?>
              <li 
                class="card card--scope scope__card  js-paralax-inner <?= $a === 0 ? 'active' : ''; ?>"
                style="--delay: 0.4s"
              >
                  <div class="card__img">
                      <img src="<?php echo $item['card_img']?>" alt="scope image"/>
                  </div>
                  <div class="card__text">
                      <h3><?php echo $item['scope_name']?></h3>
                      <p>
                          <?php echo $item['card_text']?>
                      </p>
                  </div>
                  <a href="<?php echo $item['card_btn']?>" class="btn btn--black card__btn"><?php the_field('scope_btn_text'); ?></a>
              </li>
                  <?php
                  $a++;
              endforeach; ?>
            <?php endif; ?>   
          </ul>
      </div>
  </div>
</section>