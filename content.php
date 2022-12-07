<?php
/**
 * Template Name: Content Page
 **/
get_header();?>

<main class="main">
    <section class="promo">
        <div class="promo__wrapper">
            <div class="container promo__container">
                <h1>
                    <?php the_field('baner_title'); ?>
                </h1>
                <p>
                    <?php the_field('baner_subtitle'); ?>
                </p>
            </div>
            <div class="promo__img">
                <img src="<?php the_field('baner_img'); ?>" alt="banner" />
            </div>
            <div class="fund">
                <div class="fund__top">
                    <ul class="fund__head">
                        <li class="text-1 fund__tab active">Разова допомога</li>
                        <li class="text-1 fund__tab">Щомісячна допомога</li>
                    </ul>
                    <div class="fund__tip">
                        <svg width="30" height="26">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#heart"></use>
                        </svg>
                        <p class="text-2 fund__desc">
                            Ваші пожертвування допоможуть українцям вийти зі скрутної
                            ситуації в житті
                        </p>
                    </div>
                </div>
                <div class="fund__bottom">
                    <div class="fund__donations">
                        <button class="btn fund__sum">50 &#8372;</button>
                        <button class="btn fund__sum">100 &#8372;</button>
                        <button class="btn fund__sum">200 &#8372;</button>
                        <button class="btn fund__sum">500 &#8372;</button>
                        <button class="btn fund__sum">1000 &#8372;</button>
                        <button class="btn fund__sum">інша сума</button>
                    </div>
                    <button class="btn btn--black fund__btn">Підтримати фонд</button>
                </div>
            </div>
        </div>
    </section>

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

    <section class="gallery">
        <div class="container swiper swiperGallery">
            <div class="gallery__head">
                <h2 class="title"><?php the_field('gal_title'); ?></h2>
                <a href="<?php the_field('gal_btn_to'); ?>" class="btn gallery__btn"><?php the_field('gal_btn_text'); ?></a>
            </div>

            <div class="swiper-wrapper gallery__slider">
                <?php
                $gal = get_field('gal_imgs');
                foreach ($gal as $item) : ?>

                    <div class="swiper-slide gallery__photo">
                        <img src="<?php echo $item['image'] ?>" alt="gallery photo" />
                    </div>
                <?php endforeach; ?>

            </div>

            <div class="gallery__scrollbar">
                <div class="gallery__scrolldrag"></div>
            </div>
        </div>
    </section>

    <section class="partner">
        <div class="container partner__container">
            <div class="partner__head">
                <h2 class="title"><?php the_field('ptn_title'); ?></h2>
                <a href="<?php the_field('ptn_btn_to'); ?>" class="btn partner__btn"><?php the_field('ptn_btn_text'); ?></a>
            </div>
            <div class="partner__grid">
                <?php
                $ptns = get_field('ptn_imgs');
                foreach ($ptns as $item) : ?>

                    <div class="partner__img">
                        <img src="<?php echo $item['image'] ?>" alt="partner" />
                    </div>
                <?php endforeach; ?>

            </div>
            <a href="<?php the_field('ptn_btn_to'); ?>" class="btn partner__btn partner__btn--mobile"
            ><?php the_field('ptn_btn_text'); ?></a
            >
            <div class="partner__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo" />
            </div>
        </div>
    </section>
</main>

<?php get_footer();?>
