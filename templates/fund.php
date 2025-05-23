<?php 
  $requisites_page_url = function_exists( 'fundtce_get_special_page' ) && !is_page( fundtce_get_special_page( 'requisites', 'id' ) ) ? fundtce_get_special_page( 'requisites', 'url' ) . '#requisites' : '#requisites';
?>
<section 
  class="fund js-paralax <?= is_page_template( 'page-contacts.php' ) ? 'fund--contacts' : ''; ?>" id="fund"
  data-scroll data-scroll-class="show" 
  data-scroll-repeat="true"
>

  <div class="fund__container container js-paralax-inner <?= is_page_template( 'page-contacts.php' ) ? 'logo-bg' : ''; ?>">
    <h2 
      class="fund__title title <?= !is_page_template( 'page-contacts.php' ) ? 'visually-hidden' : ''; ?> js-transition-title"
      data-scroll data-scroll-class="show" 
      data-scroll-repeat="true"
    >
      <?= __('Бажаєте допомогти?', 'fundtce'); ?>
    </h2>

    <form action="" class="fund__form  <?= is_front_page(  ) 
                        ? 'fund__form--front' 
                        : (is_page_template( 'page-contacts.php' ) 
                          ? 'fund__form--contacts' 
                          : 'fund__form--content'); ?>">

      <div class="fund__top js-paralax-item">
        <span class="text-1 fund__tab"><?= __('Разова допомога через LiqPay', 'fundtce'); ?></span>

        <p class="text-1 text--grey fund__desc js-paralax-item">
          <a href="<?= $requisites_page_url; ?>"><?= __('Інші варіанти оплати', 'fundtce'); ?></a>
        </p>
      </div>
      <div class="fund__bottom js-paralax-item" style="--delay: 0.8s;">
        <div class="fund__donations">
          <input class="visually-hidden" type="radio" name="amount" id="amount-1" value="50" checked>
          <label for="amount-1" class="btn fund__sum">50 &#8372;</label>
          
          <input class="visually-hidden" type="radio" name="amount" id="amount-2" value="100">
          <label for="amount-2" class="btn fund__sum">100 &#8372;</label>
          
          <input class="visually-hidden" type="radio" name="amount" id="amount-3" value="200">
          <label for="amount-3" class="btn fund__sum">200 &#8372;</label>
          
          <input class="visually-hidden" type="radio" name="amount" id="amount-4" value="500">
          <label for="amount-4" class="btn fund__sum">500 &#8372;</label>
          
          <input class="visually-hidden" type="radio" name="amount" id="amount-5" value="1000">
          <label for="amount-5" class="btn fund__sum">1000 &#8372;</label>
          
          <input class="visually-hidden" type="radio" name="amount" id="amount-6" value="another">
          <label for="amount-6" class="btn fund__sum fund__sum--another"><?= __('інша сума', 'fundtce'); ?></label>
        </div>

        <button class="btn btn--black fund__btn">
          <?= __('Підтримати фонд', 'fundtce'); ?>
        </button>
      </div>
    </form>  
  </div>  
</section>