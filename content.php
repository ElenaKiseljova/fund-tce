<?php
/**
 * Template Name: Content Page
 **/
get_header();?>

<main class="main">
  <?php 
    get_template_part( 'templates/promo' );

    get_template_part( 'templates/fund' );
  ?>

  <section class="content">
      <div class="container">
          <h2><?php the_field('post_title'); ?></h2>
          <div class="content__body">

              <?php
              $posts1 =  get_field('posts');
              foreach ($posts1 as $post1) : ?>

              <a href="<?php echo $post1['post_link']?>" class="card content__card">
                  <div class="card__img">
                      <img src="<?php echo $post1['image']?>" alt="content" />
                  </div>
                  <div class="card__body">
                      <div class="card__text">
                          <h3><?php echo $post1['title']?></h3>
                          <?php echo $post1['description']?>
                      </div>
                      <div class="card__box">
                          <p class="text-2 card__details"><?php the_field('post_btn_text') ?></p>
                          <button class="card__arrow">
                              <svg width="15" height="13">
                                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrowRight"></use>
                              </svg>
                          </button>
                      </div>
                  </div>
              </a>

              <?php endforeach; ?>

          </div>
      </div>
      <div class="content__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo" />
      </div>
  </section>

  <section class="content">
      <div class="container">
          <h2><?php the_field('descr_title'); ?></h2>
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

  <section class="help">
      <div class="help__wrapper">
          <div class="container help__container">
              <h2 class="title help__title"><?php the_field('help_title'); ?></h2>
              <div class="help__body">
                  <div class="help__img">
                      <img src="<?php the_field('help_img'); ?>" alt="Ukraine flag" />
                  </div>
                  <div class="help__block">
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
          <div class="help__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo" />
          </div>
      </div>
  </section>
  
  <?php 
    get_template_part( 'templates/gallery' );

    get_template_part( 'templates/partner' );
  ?>
</main>

<?php get_footer();?>
