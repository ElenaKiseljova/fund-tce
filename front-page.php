<?php
/**
 * Template Name: Home Page
 **/
get_header();?>

<main class="main">

    <section class="start">
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

    <section class="mission">
        <div class="container mission__container">
            <div class="mission__left">
                <h2 class="title mission__title"><?php the_field('mission_title'); ?></h2>
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

    <section class="scope">
        <div class="container scope__container">
            <h2 class="title scope__title"><?php the_field('scope_title'); ?></h2>
            <div class="scope__body">
                <ul class="scope__list">
                    <?php
                    $items = get_field('items');
                    $i = 0;
                    foreach ($items as $item) : ?>
                        <li class="scope__item <?php if($i === 0){?>active<?php }?>">
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
                </ul>

                <ul class="scope__right">
                    <?php
                    $items = get_field('items');
                    $a = 0;
                    foreach ($items as $item) : ?>
                    <li class="card card--scope scope__card <?php if($a === 0){?>active<?php }?>">
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
                </ul>
            </div>
        </div>
    </section>

    <?php 
      get_template_part( 'templates/founder' );

      get_template_part( 'templates/gallery' );
    ?>

    <section class="partner">
        <div class="container partner__container">
            <div class="partner__head">
                <h2 class="title"><?php the_field('partners_title'); ?></h2>
                <a href="<?php the_field('partners_btn_to'); ?>" class="btn partner__btn">
                    <?php the_field('partners_btn_text'); ?>
                </a>
            </div>
            <div class="partner__grid">
                <?php
                $ptns = get_field('partners');
                foreach ($ptns as $item) : ?>
                    <div class="partner__img">
                        <img src="<?php echo $item['image'] ?>" alt="partner logo"/>
                    </div>
                <?php endforeach; ?>
            </div>
            <a href="<?php the_field('partners_btn_to'); ?>" class="btn partner__btn partner__btn--mobile">
                <?php the_field('partners_btn_text'); ?>
            </a>
            <div class="partner__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo"/>
            </div>
        </div>
    </section>

    <section class="docs">
        <div class="container docs__container swiper swiperDocs">
            <div class="docs__head">
                <h2 class="title"><?php the_field('documents_title'); ?></h2>
                <a href="<?php the_field('documents_btn_to'); ?>" class="btn docs__btn">
                    <?php the_field('documents_btn_text'); ?>
                </a>
            </div>
            <div class="swiper-wrapper docs__grid">
                <?php
                $docs = get_field('documents');
                foreach ($docs as $item) : ?>
                    <div class="swiper-slide docs__img">
                        <img src="<?php echo $item['image'] ?>" alt="document"/>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="scrollbar">
                <div class="scrollbar__drag"></div>
            </div>
            <a href="<?php the_field('documents_btn_to'); ?>" class="btn docs__btn docs__btn--mobile">
                <?php the_field('documents_btn_text'); ?>
            </a>
        </div>
    </section>
</main>

<?php get_footer();?>
