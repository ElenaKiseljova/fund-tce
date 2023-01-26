<?php 
  $cur_lang = pll_current_language();
  $requisites_page_url = (is_page_template( 'page-team.php' ) || is_page_template( 'page-appeal.php' )) && 
                         function_exists( 'fundtce_get_special_page' ) && 
                         !is_page( fundtce_get_special_page( 'requisites', 'id' ) ) ? 
                            fundtce_get_special_page( 'requisites', 'url' ) . '#fund' : 
                            '#fund';
?>
    </main>
    
    <footer class="footer" data-scroll-section>
      <div class="footer__wrapper">
        <div class="container">
          <div class="footer__top">
            <div class="footer__box">
              <?php 
                get_template_part( 'templates/logo' );

                get_template_part( 'templates/social' );
              ?>
          
              <a href="<?= $requisites_page_url; ?>" class="btn btn--black footer__btn">
                <?= __( 'Підтримати фонд', 'fundtce' ); ?>
              </a>
            </div>
            <div class="footer__block left">
              <?php 
                if ( function_exists( 'fundtce_draw_menu' ) ) {
                  fundtce_draw_menu( 'footer_menu_left' );
                }
              ?>            
            </div>
            <div class="footer__block right">
              <?php 
                if ( function_exists( 'fundtce_draw_menu' ) ) {
                  fundtce_draw_menu( 'footer_menu' );
                }
              ?>
            </div>
          </div>

          <div class="footer__bottom">
            <p>
              © <?= __( 'БО “Час чистого довкілля”', 'fundtce' ); ?>
            </p>
            <div class="right">
              <a href="https://wnauts.com/" target="_blank">Webnauts</a>
              <p><?= date('Y'); ?></p>
            </div>
            
          </div>
        </div>
      </div>
    </footer>
  </div>
<?php wp_footer();?>
</body>
</html>