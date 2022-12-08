<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <?php wp_head(); ?>
</head>

<body>
<header class="header">
  <div class="container header__container">
      <div class="header__head">
        <?php 
          get_template_part( 'templates/logo' );

          get_template_part( 'templates/lang' );

          if ( function_exists( 'fundtce_draw_menu' ) ) {
            fundtce_draw_menu( 'header_menu_left' );
            fundtce_draw_menu( 'header_menu' );
            fundtce_draw_menu( 'header_menu_additional' );
          }
        ?>

        <a href="<?= get_bloginfo( 'url' ); ?>#fund"
            class="btn header__btn"><?= __( 'Підтримати фонд', 'fundtce' ); ?></a>

        <button class="burger">
          <span class="burger__top"></span>
          <span class="burger__middle"></span>
          <span class="burger__bottom"></span>
        </button>
      </div>

      <div class="header__body">
          <a href="<?= get_bloginfo( 'url' ); ?>" class="header__link"><?= __( 'Головна', 'fundtce' ); ?></a>
          
          <?php 
            if ( function_exists( 'fundtce_draw_menu' ) ) {
              fundtce_draw_menu( 'header_menu_left', 'mobile' );
              fundtce_draw_menu( 'header_menu', 'mobile' );
              fundtce_draw_menu( 'header_menu_additional' );
            }
          ?>

          <a href="<?= get_bloginfo( 'url' ); ?>#fund"
              class="btn btn--black header__btn"><?= __( 'Підтримати фонд', 'fundtce' ); ?></a>
      </div>
  </div>
  <div class="header__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo"/>
  </div>
</header>