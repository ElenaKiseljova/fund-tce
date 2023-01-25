<?php 
  $requisites_page_url = (is_page_template( 'page-team.php' ) || is_page_template( 'page-appeal.php' )) && 
                         function_exists( 'fundtce_get_special_page' ) && 
                         !is_page( fundtce_get_special_page( 'requisites', 'id' ) ) ? 
                            fundtce_get_special_page( 'requisites', 'url' ) . '#fund' : 
                            '#fund';
?>

<footer class="footer">
  <div class="footer__wrapper">
    <div class="container">
      <div class="footer__top">
        <div class="footer__box">
          <?php 
            get_template_part( 'templates/logo' );
          ?>

			<div class="social_links">
		<a href="https://instagram.com/fund.tce.ua?igshid=YmMyMTA2M2Y=" target="_blank">
		<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.1466 0H6.85337C3.07441 0 0 3.07441 0 6.85342V18.1466C0 21.9256 3.07441 25 6.85337 25H18.1466C21.9256 25 25 21.9256 25 18.1466V6.85342C25 3.07441 21.9256 0 18.1466 0ZM23.5236 18.1466C23.5236 21.1115 21.1116 23.5236 18.1466 23.5236H6.85337C3.88848 23.5236 1.47637 21.1116 1.47637 18.1466V6.85342C1.47637 3.88848 3.88848 1.47637 6.85337 1.47637H18.1466C21.1116 1.47637 23.5236 3.88848 23.5236 6.85342V18.1466Z" fill="#777777"/>
<path d="M12.5 5.64316C8.71909 5.64316 5.64307 8.71919 5.64307 12.5001C5.64307 16.2811 8.71904 19.3571 12.5 19.3571C16.281 19.3571 19.3571 16.2811 19.3571 12.5001C19.3571 8.71914 16.281 5.64316 12.5 5.64316ZM12.5 17.8808C9.53315 17.8808 7.11938 15.467 7.11938 12.5001C7.11938 9.5332 9.53315 7.11943 12.5 7.11943C15.467 7.11943 17.8808 9.53325 17.8808 12.5001C17.8808 15.467 15.467 17.8808 12.5 17.8808ZM19.7672 3.14966C18.6185 3.14966 17.6839 4.08428 17.6839 5.23301C17.6839 6.38174 18.6185 7.31631 19.7672 7.31631C20.9159 7.31631 21.8505 6.38169 21.8505 5.23296C21.8505 4.08423 20.9159 3.14966 19.7672 3.14966ZM19.7672 5.83989C19.4326 5.83989 19.1603 5.56763 19.1603 5.23296C19.1603 4.89829 19.4326 4.62603 19.7672 4.62603C20.1019 4.62603 20.3741 4.89834 20.3741 5.23296C20.3741 5.56758 20.1019 5.83989 19.7672 5.83989Z" fill="#777777"/>
</svg>
</a>
		<a href="https://www.facebook.com/profile.php?id=100089226721692" target="_blank">
		<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.9552 0H3.04478C1.36587 0 0 1.36587 0 3.04478V21.9552C0 23.6341 1.36587 25 3.04478 25H12.7373C13.145 25 13.4755 24.6695 13.4755 24.2618V15.3111C13.4755 14.9035 13.145 14.5729 12.7373 14.5729H10.0839V12.4717H12.7373C13.145 12.4717 13.4755 12.1412 13.4755 11.7335V8.74565C13.4755 7.12866 14.791 5.81313 16.4081 5.81313H18.9683V7.91436H16.4081C15.9497 7.91436 15.5768 8.28735 15.5768 8.7457V11.7336C15.5768 12.1413 15.9073 12.4718 16.3149 12.4718H18.9683V14.573H16.3149C15.9073 14.573 15.5768 14.9035 15.5768 15.3112V24.2619C15.5768 24.6695 15.9073 25 16.3149 25H21.9552C23.6341 25 25 23.6341 25 21.9552V3.04478C25 1.36587 23.6341 0 21.9552 0ZM23.5236 21.9552C23.5236 22.8201 22.8201 23.5237 21.9552 23.5237H17.053V16.0493H19.7064C20.1141 16.0493 20.4446 15.7188 20.4446 15.3111V11.7336C20.4446 11.3259 20.1141 10.9954 19.7064 10.9954H17.053V9.39072H19.7064C20.1141 9.39072 20.4446 9.0602 20.4446 8.65254V5.075C20.4446 4.66733 20.1141 4.33682 19.7064 4.33682H16.408C13.977 4.33682 11.9991 6.31465 11.9991 8.7457V10.9954H9.34575C8.93809 10.9954 8.60757 11.3259 8.60757 11.7336V15.3111C8.60757 15.7188 8.93809 16.0493 9.34575 16.0493H11.9991V23.5236H3.04478C2.17993 23.5236 1.47632 22.8201 1.47632 21.9552V3.04478C1.47632 2.17993 2.17988 1.47632 3.04478 1.47632H21.9552C22.82 1.47632 23.5236 2.17988 23.5236 3.04478V21.9552Z" fill="#777777"/>
</svg>
</a>

</div>
			
			
			
          <a href="<?= $requisites_page_url; ?>"
            class="btn btn--black footer__btn"><?= __( 'Підтримати фонд', 'fundtce' ); ?></a>
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
			<? if (pll_current_language() === "en" ) {?>
	© <?= __( 'CF "Time of Clean Environment"', 'fundtce' ); ?>
<?} elseif  (pll_current_language() === "pl" ){?>
          © <?= __( 'OC "FC "Czas Czystego Środowiska" ', 'fundtce' ); ?>
        
<?} else {?> 
		  © <?= __( 'БО “БФ “Час чистого довкілля”', 'fundtce' ); ?>
		  <?}?>
			</p>
        <div class=right>
          <a href="https://wnauts.com/" target="_blank">Webnauts</a>
          <p><?= date('Y'); ?></p>
        </div>
        
      </div>
    </div>
  </div>
</footer>

<?php wp_footer();?>
</body>
</html>