<div class="fund <?= is_front_page(  ) 
                        ? 'start__fund' 
                        : (is_page_template( 'page-contacts.php' ) 
                          ? 'want-help__fund' 
                          : 'promo__fund'); ?>" id="fund">

  <form action="" class="fund__form">
    <div class="fund__top">
        <div class="fund__head">
          <input class="visually-hidden" type="radio" name="help" id="help-1" value="single" checked>
          <label class="text-1 fund__tab" for="help-1"><?= __('Разова допомога', 'foundtce'); ?></label>
          
          <input class="visually-hidden" type="radio" name="help" id="help-2" value="multiple">
          <label class="text-1 fund__tab" for="help-2"><?= __('Щомісячна допомога', 'foundtce'); ?></label>
        </div>
        <div class="fund__tip">
            <svg width="30" height="26">
                <use xlink:href="<?= get_template_directory_uri(  ); ?>/assets/img/sprite.svg#heart"></use>
            </svg>
            <p class="text-2 fund__desc">
                <?= __('Ваші пожертвування допоможуть українцям вийти зі скрутної ситуації в житті', 'foundtce'); ?>
            </p>
        </div>
    </div>
    <div class="fund__bottom">
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
        <label for="amount-6" class="btn fund__sum"><?= __('інша сума', 'foundtce'); ?></label>
      </div>

      <button class="btn btn--black fund__btn">
          <?= __('Підтримати фонд', 'foundtce'); ?>
      </button>
    </div>
  </form>  
</div>