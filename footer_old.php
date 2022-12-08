<?if (pll_current_language() == 'uk'){?>
<footer class="footer">
    <div class="footer__wrapper">
        <div class="container">
            <div class="footer__top">
                <div class="footer__box">
                    <a href="/" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo__desktop" alt="logo"/>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" class="logo__mobile" alt="logo"/>
                    </a>
                    <button class="btn btn--black footer__btn">
                        <?php the_field('btn_text_footer', 'option'); ?>
                    </button>
                </div>
                <div class="footer__block">
                    <h4><?php the_field('header_title_1', 'option'); ?></h4>
                    <ul class="footer__list">
                        <?php
                        $about_us = get_field('about_us_footer', 'option');
                        foreach ($about_us as $item) : ?>
                            <li>
                                <a href="<?php echo $item['link'];?>"><?php echo $item['name'];?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <div class="footer__block">
                    <h4><?php the_field('header_title_2', 'option'); ?></h4>
                    <div class="footer__inner">
                        <ul class="footer__list">
                            <?php
                            $what = get_field('what_we_do_footer', 'option');
                            for ($i = 0; $i < 3; $i++) {?>
                                <li>
                                    <a href="<?= $what[$i]['link']?>"><?= $what[$i]['name']?></a>
                                </li>
                            <?}?>
                        </ul>
                        <ul class="footer__list">
                            <?php
                            $what = get_field('what_we_do_footer', 'option');
                            for ($i = 3; $i < 7; $i++) {?>
                                <li>
                                    <a href="<?= $what[$i]['link']?>"><?= $what[$i]['name']?></a>
                                </li>
                            <?}?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <p>© БО “Час чистого довкілля”</p>
                <p>2022</p>
            </div>
        </div>
    </div>
</footer>
<?php } elseif (pll_current_language() == 'en'){?>
    <footer class="footer">
        <div class="footer__wrapper">
            <div class="container">
                <div class="footer__top">
                    <div class="footer__box">
                        <a href="/en/" class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo__desktop" alt="logo"/>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" class="logo__mobile" alt="logo"/>
                        </a>
                        <button class="btn btn--black footer__btn">
                            <?php the_field('btn_text_footer_en', 'option'); ?>
                        </button>
                    </div>
                    <div class="footer__block">
                        <h4><?php the_field('header_title_1_en', 'option'); ?></h4>
                        <ul class="footer__list">
                            <?php
                            $about_us = get_field('about_us_footer_en', 'option');
                            foreach ($about_us as $item) : ?>
                                <li>
                                    <a href="<?php echo $item['link'];?>"><?php echo $item['name'];?></a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="footer__block">
                        <h4><?php the_field('header_title_2_en', 'option'); ?></h4>
                        <div class="footer__inner">
                            <ul class="footer__list">
                                <?php
                                $what = get_field('what_we_do_footer_en', 'option');
                                for ($i = 0; $i < 3; $i++) {?>
                                    <li>
                                        <a href="<?= $what[$i]['link']?>"><?= $what[$i]['name']?></a>
                                    </li>
                                <?}?>
                            </ul>
                            <ul class="footer__list">
                                <?php
                                $what = get_field('what_we_do_footer_en', 'option');
                                for ($i = 3; $i < 7; $i++) {?>
                                    <li>
                                        <a href="<?= $what[$i]['link']?>"><?= $what[$i]['name']?></a>
                                    </li>
                                <?}?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <p>© CO "Time of a Clean Environment"</p>
                    <p>2022</p>
                </div>
            </div>
        </div>
    </footer>

<?php } else {?>
    <footer class="footer">
        <div class="footer__wrapper">
            <div class="container">
                <div class="footer__top">
                    <div class="footer__box">
                        <a href="/pl/" class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="logo__desktop" alt="logo"/>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" class="logo__mobile" alt="logo"/>
                        </a>
                        <button class="btn btn--black footer__btn">
                            <?php the_field('btn_text_footer_pl', 'option'); ?>
                        </button>
                    </div>
                    <div class="footer__block">
                        <h4><?php the_field('header_title_1_pl', 'option'); ?></h4>
                        <ul class="footer__list">
                            <?php
                            $about_us = get_field('about_us_footer_pl', 'option');
                            foreach ($about_us as $item) : ?>
                                <li>
                                    <a href="<?php echo $item['link'];?>"><?php echo $item['name'];?></a>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="footer__block">
                        <h4><?php the_field('header_title_2_pl', 'option'); ?></h4>
                        <div class="footer__inner">
                            <ul class="footer__list">
                                <?php
                                $what = get_field('what_we_do_footer_pl', 'option');
                                for ($i = 0; $i < 3; $i++) {?>
                                    <li>
                                        <a href="<?= $what[$i]['link']?>"><?= $what[$i]['name']?></a>
                                    </li>
                                <?}?>
                            </ul>
                            <ul class="footer__list">
                                <?php
                                $what = get_field('what_we_do_footer_pl', 'option');
                                for ($i = 3; $i < 7; $i++) {?>
                                    <li>
                                        <a href="<?= $what[$i]['link']?>"><?= $what[$i]['name']?></a>
                                    </li>
                                <?}?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <p>© BO „Czas czystego środowiska”</p>
                    <p>2022</p>
                </div>
            </div>
        </div>
    </footer>

<?php }?>

<?php wp_footer();?>
</body>
</html>