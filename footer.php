<footer class="footer">
  <div class="footer__wrapper">
    <div class="container">
      <div class="footer__top">
        <div class="footer__box">
          <?php 
            get_template_part( 'templates/logo' );
          ?>

          <a href="<?= get_bloginfo( 'url' ); ?>#fund"
            class="btn btn--black footer__btn"><?= __( 'Підтримати фонд', 'fundtce' ); ?></a>
        </div>
        <div class="footer__block">
          <?php 
            if ( function_exists( 'fundtce_draw_menu' ) ) {
              fundtce_draw_menu( 'footer_menu_left' );
            }
          ?>            
        </div>
        <div class="footer__block">
          <?php 
            if ( function_exists( 'fundtce_draw_menu' ) ) {
              fundtce_draw_menu( 'footer_menu' );
            }
          ?>
        </div>
      </div>

      <div class="footer__bottom">
        <p>© БО “Час чистого довкілля”</p>
        <p><?= date('Y'); ?></p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer();?>
</body>
</html>