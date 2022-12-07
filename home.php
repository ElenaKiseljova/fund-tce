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

                <div class="fund">
                    <div class="fund__top">
                        <ul class="fund__head">
                            <li class="text-1 fund__tab active">Разова допомога</li>
                            <li class="text-1 fund__tab">Щомісячна допомога</li>
                        </ul>
                        <div class="fund__tip">
                            <svg width="30" height="26">
                                <use xlink:href="/wp-content/themes/fundtce/assets/img/sprite.svg#heart"></use>
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
                        <button class="btn btn--black fund__btn">
                            Підтримати фонд
                        </button>
                    </div>
                </div>

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

    <section class="founder">
        <div class="founder__wrapper">
            <div class="container founder__container">
                <div class="founder__info">
                    <h2 class="title founder__title"><?php the_field('founder_title'); ?></h2>
                    <div class="founder__img founder__img--mobile">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/neroba.jpg" alt="Andriy Neroba"/>
                    </div>
                    <p class="text-1 founder__text">
                        <?php the_field('founder_text'); ?>
                    </p>
                    <div class="founder__bottom">
                        <a href="<?php the_field('founder_btn_link'); ?>" class="btn founder__btn"><?php the_field('founder_btn_text'); ?></a>
                        <div class="founder__about">
                            <h3 class="title-2 founder__name"><?php the_field('founder_name'); ?></h3>
                            <p class="text-2 text--grey">
                                <span class="founder__special"><?php the_field('founder_special'); ?></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="founder__img">
                    <img src="<?php the_field('founder_img'); ?>" alt="Andriy Neroba"/>
                </div>
                <div class="founder__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo"/>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="container swiper swiperGallery">
            <div class="gallery__head">
                <h2 class="title"><?php the_field('gallery_title'); ?></h2>
                <a href="<?php the_field('gallery_btn_to'); ?>" class="btn gallery__btn"><?php the_field('gallery_btn_text'); ?></a>
            </div>

            <div class="swiper-wrapper gallery__slider">
                <?php
                $gal = get_field('galery');
                foreach ($gal as $item) : ?>
                <div class="swiper-slide gallery__photo">
                    <img src="<?php echo $item['image'] ?>" alt="gallery photo"/>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="scrollbar">
                <div class="scrollbar__drag"></div>
            </div>
        </div>
    </section>

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
