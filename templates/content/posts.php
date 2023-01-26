<section class="content">
  <div class="container">
    <h2
      class="js-transition-title"
      data-scroll data-scroll-class="show" 
      data-scroll-repeat="true"
    >
      <?php the_field('post_title'); ?>
    </h2>
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
                    <p><?php echo $post1['description']?></p>
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