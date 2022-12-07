<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <?php wp_head(); ?>
    <title>
        <?php the_title(); ?>
    </title>
</head>

<body>
<? if (pll_current_language() == 'uk'){ ?>
    <header class="header">
        <div class="container header__container">
            <div class="header__head">
                <a href="/" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo__desktop"
                         alt="logo"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" class="logo__mobile"
                         alt="logo"/>
                </a>

                <div class="dropdown dropdown--lang header__lang">
                    <div class="dropdown__head">
                        <?php echo pll_current_language('flag'); ?>
                        <p> <?php echo pll_current_language('name'); ?></p>
                        <svg width="13" height="13">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                    <div class="dropdown__body">
                        <ul class="dropdown__list">
                            <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 1)); ?>
                        </ul>
                    </div>
                </div>

                <div class="dropdown header__dropdown">
                    <div class="dropdown__head">
                        <p><?php the_field('header_title_1', 'option'); ?></p>
                        <svg width="15" height="15">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                    <div class="dropdown__body">
                        <ul class="dropdown__list">
                            <?php
                            $about_us = get_field('about_us', 'option');
                            foreach ($about_us as $item) : ?>
                                <li>
                                    <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="dropdown header__dropdown">
                    <div class="dropdown__head">
                        <p><?php the_field('header_title_2', 'option'); ?></p>
                        <svg width="15" height="15">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                    <div class="dropdown__body what">
                        <ul class="dropdown__list ">
                            <?php
                            $what = get_field('what_we_do', 'option');
                            foreach ($what as $item) : ?>
                                <?php if(!empty($item['submenu'])){ ?>
                                <li  class="sub">
                                    <div>
                                        <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                                        <svg width="15" height="15">
                                         <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                                        </svg>
                                    </div>
                                    <ul class="submenu">
                                        <?php $sub_item = $item['submenu'];
                                        foreach ($sub_item as $sublink) :?>
                                        <li>
                                            <a href="<?php echo $sublink['submenu_link']; ?>">
                                                <?php echo $sublink['submenu_name']; ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php } else {?>
                            <li class="sub">
                                <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                                <?php }?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <a href="#" class="dropdown__head"><p>Звернутись по допомогу</p></a>

                <a href="<?php the_field('btn_link', 'option'); ?>"
                   class="btn header__btn"><?php the_field('btn_text', 'option'); ?></a>

                <button class="burger">
                    <span class="burger__top"></span>
                    <span class="burger__middle"></span>
                    <span class="burger__bottom"></span>
                </button>
            </div>
            <div class="header__body">
                <a href="index.html" class="header__link">Головна</a>
                <div class="dropdown header__dropdown">
                    <div class="dropdown__head">
                        <p><?php the_field('header_title_1', 'option'); ?></p>
                        <svg width="15" height="15">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                    <div class="dropdown__body">
                        <ul class="dropdown__list">
                            <?php
                            $about_us = get_field('about_us', 'option');
                            foreach ($about_us as $item) : ?>
                                <li>
                                    <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="dropdown header__dropdown">
                    <div class="dropdown__head">
                        <p><?php the_field('header_title_2', 'option'); ?></p>
                        <svg width="15" height="15">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                    <div class="dropdown__body">
                        <ul class="dropdown__list">
                            <?php
                            $what = get_field('what_we_do', 'option');
                            foreach ($what as $item) : ?>
                                <li>
                                    <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <a href="<?php the_field('btn_link', 'option'); ?>"
                   class="btn btn--black header__btn"><?php the_field('btn_text', 'option'); ?></a>
            </div>
        </div>
        <div class="header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo"/>
        </div>
    </header>


<?php } elseif (pll_current_language() == 'en') { ?>

    <header class="header">
        <div class="container header__container">
            <div class="header__head">
                <a href="/en/" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo__desktop"
                         alt="logo"/>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" class="logo__mobile"
                         alt="logo"/>
                </a>

                <div class="dropdown dropdown--lang header__lang">
                    <div class="dropdown__head">
                        <?php echo pll_current_language('flag'); ?>
                        <p> <?php echo pll_current_language('name'); ?></p>
                        <svg width="13" height="13">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                    <div class="dropdown__body">
                        <ul class="dropdown__list">
                            <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 1)); ?>
                        </ul>
                    </div>
                </div>

                <div class="dropdown header__dropdown">
                    <div class="dropdown__head">
                        <p><?php the_field('header_title_1_en', 'option'); ?></p>
                        <svg width="15" height="15">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                    <div class="dropdown__body">
                        <ul class="dropdown__list">
                            <?php
                            $about_us = get_field('about_us_en', 'option');
                            foreach ($about_us as $item) : ?>
                                <li>
                                    <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="dropdown header__dropdown">
                    <div class="dropdown__head">
                        <p><?php the_field('header_title_2_en', 'option'); ?></p>
                        <svg width="15" height="15">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                    <!--<div class="dropdown__body">
                        <ul class="dropdown__list">
                            <?php
/*                            $what = get_field('what_we_do_en', 'option');
                            foreach ($what as $item) : */?>
                                <li>
                                    <a href="<?php /*echo $item['link']; */?>"><?php /*echo $item['name']; */?></a>
                                </li>
                            <?php /*endforeach; */?>
                        </ul>
                    </div>-->

                    <div class="dropdown__body what">
                        <ul class="dropdown__list ">
                            <?php
                            $what = get_field('what_we_do_en', 'option');
                            foreach ($what as $item) : ?>
                                <?php if(!empty($item['submenu'])){ ?>
                                    <li  class="sub">
                                    <div>
                                        <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                                        <svg width="15" height="15">
                                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                                        </svg>
                                    </div>
                                    <ul class="submenu">
                                        <?php $sub_item = $item['submenu'];
                                        foreach ($sub_item as $sublink) :?>
                                            <li>
                                                <a href="<?php echo $sublink['submenu_link']; ?>">
                                                    <?php echo $sublink['submenu_name']; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php } else {?>
                                    <li class="sub">
                                    <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                                <?php }?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <a href="#" class="dropdown__head"><p>Ask for help</p></a>
                <a href="<?php the_field('btn_link_en', 'option'); ?>"
                   class="btn header__btn"><?php the_field('btn_text_en', 'option'); ?></a>
                <button class="burger">
                    <span class="burger__top"></span>
                    <span class="burger__middle"></span>
                    <span class="burger__bottom"></span>
                </button>
            </div>
            <div class="header__body">
                <a href="index.html" class="header__link">Main</a>
                <div class="dropdown header__dropdown">
                    <div class="dropdown__head">
                        <p><?php the_field('header_title_1_en', 'option'); ?></p>
                        <svg width="15" height="15">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                    <div class="dropdown__body">
                        <ul class="dropdown__list">
                            <?php
                            $about_us = get_field('about_us_en', 'option');
                            foreach ($about_us as $item) : ?>
                                <li>
                                    <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="dropdown header__dropdown">
                    <div class="dropdown__head">
                        <p><?php the_field('header_title_2_en', 'option'); ?></p>
                        <svg width="15" height="15">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                    <div class="dropdown__body">
                        <ul class="dropdown__list">
                            <?php
                            $what = get_field('what_we_do_en', 'option');
                            foreach ($what as $item) : ?>
                                <li>
                                    <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <a href="<?php the_field('btn_link_en', 'option'); ?>"
                   class="btn btn--black header__btn"><?php the_field('btn_text_en', 'option'); ?></a>
            </div>
        </div>
        <div class="header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo"/>
        </div>
    </header>

<?php }
else { ?>

<header class="header">
    <div class="container header__container">
        <div class="header__head">
            <a href="/pl/" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo__desktop"
                     alt="logo"/>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" class="logo__mobile"
                     alt="logo"/>
            </a>

            <div class="dropdown dropdown--lang header__lang">
                <div class="dropdown__head">
                    <?php echo pll_current_language('flag'); ?>
                    <p> <?php echo pll_current_language('name'); ?></p>
                    <svg width="13" height="13">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                    </svg>
                </div>
                <div class="dropdown__body">
                    <ul class="dropdown__list">
                        <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 1)); ?>
                    </ul>
                </div>
            </div>

            <div class="dropdown header__dropdown">
                <div class="dropdown__head">
                    <p><?php the_field('header_title_1_pl', 'option'); ?></p>
                    <svg width="15" height="15">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                    </svg>
                </div>
                <div class="dropdown__body">
                    <ul class="dropdown__list">
                        <?php
                        $about_us = get_field('about_us_pl', 'option');
                        foreach ($about_us as $item) : ?>
                            <li>
                                <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="dropdown header__dropdown">
                <div class="dropdown__head">
                    <p><?php the_field('header_title_2_pl', 'option'); ?></p>
                    <svg width="15" height="15">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                    </svg>
                </div>
              <!--  <div class="dropdown__body">
                    <ul class="dropdown__list">
                        <?php
/*                        $what = get_field('what_we_do_pl', 'option');
                        foreach ($what as $item) : */?>
                            <li>
                                <a href="<?php /*echo $item['link']; */?>"><?php /*echo $item['name']; */?></a>
                            </li>
                        <?php /*endforeach; */?>
                    </ul>
                </div>-->

                <div class="dropdown__body what">
                    <ul class="dropdown__list ">
                        <?php
                        $what = get_field('what_we_do_pl', 'option');
                        foreach ($what as $item) : ?>
                            <?php if(!empty($item['submenu'])){ ?>
                                <li  class="sub">
                                <div>
                                    <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                                    <svg width="15" height="15">
                                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                                    </svg>
                                </div>
                                <ul class="submenu">
                                    <?php $sub_item = $item['submenu'];
                                    foreach ($sub_item as $sublink) :?>
                                        <li>
                                            <a href="<?php echo $sublink['submenu_link']; ?>">
                                                <?php echo $sublink['submenu_name']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php } else {?>
                                <li class="sub">
                                <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                            <?php }?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>

            <a href="#" class="dropdown__head"><p>Zapytaj o pomoc</p></a>
            <a href="<?php the_field('btn_link_pl', 'option'); ?>"
               class="btn header__btn"><?php the_field('btn_text_pl', 'option'); ?></a>
            <button class="burger">
                <span class="burger__top"></span>
                <span class="burger__middle"></span>
                <span class="burger__bottom"></span>
            </button>
        </div>
        <div class="header__body">
            <a href="index.html" class="header__link">Główna</a>
            <div class="dropdown header__dropdown">
                <div class="dropdown__head">
                    <p><?php the_field('header_title_1_pl', 'option'); ?></p>
                    <svg width="15" height="15">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                    </svg>
                </div>
                <div class="dropdown__body">
                    <ul class="dropdown__list">
                        <?php
                        $about_us = get_field('about_us_pl', 'option');
                        foreach ($about_us as $item) : ?>
                            <li>
                                <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="dropdown header__dropdown">
                <div class="dropdown__head">
                    <p><?php the_field('header_title_2_pl', 'option'); ?></p>
                    <svg width="15" height="15">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                    </svg>
                </div>
                <div class="dropdown__body">
                    <ul class="dropdown__list">
                        <?php
                        $what = get_field('what_we_do_pl', 'option');
                        foreach ($what as $item) : ?>
                            <li>
                                <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <a href="<?php the_field('btn_link_pl', 'option'); ?>"
               class="btn btn--black header__btn"><?php the_field('btn_text_pl', 'option'); ?></a>
        </div>
    </div>
    <div class="header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo"/>
    </div>
</header>

<?php } ?>