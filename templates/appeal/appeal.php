<?php 
  $contacts = get_field( 'contacts' ) ?? [];
  $form_shortcod = get_field( 'form_shortcod' ) ?? '';
?>

<section class="appeal">
  <div class="appeal__container container logo-bg">
    <div class="appeal__left">
      <h1 class="appeal__title title">
        <?php the_title(  ); ?>
      </h1>

      <div class="appeal__content text">
        <?php the_content(  ); ?>
      </div>

      <?php if ( $contacts && is_array( $contacts ) && !is_wp_error( $contacts )) : ?>
        <div class="appeal__contacts">
          <?php foreach ($contacts as $key => $contact) : ?>
            <div class="appeal__contact contact">
              <h4 class="contact__title text-2 text--grey"><?= $contact['title']; ?></h4>

              <a class="contact__button btn" href="<?= $contact['button']['url']; ?>">
                <svg width="18" height="18">
                  <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#<?= $contact['button']['type']; ?>"></use>
                </svg>

                <span><?= $contact['button']['text']; ?></span>
              </a>
            </div>
          <?php endforeach; ?>            
        </div>
      <?php endif; ?>         
    </div>

    <div class="appeal__right">
      <div class="appeal__form form">
        <!-- <form action="">
          <div class="form__row">
            <label for="name-1" class="form__label text-1">
              ПІБ особи що потребує допомоги
            </label>

            <input class="form__field text" type="text" name="name-1" id="name-1" placeholder="Прізвище, ім’я, по-батькові" >
          </div>

          <div class="form__row">
            <label for="age-1" class="form__label text-1">
              Вік особи що потребує допомоги
            </label>

            <input class="form__field text" type="text" name="age-1" id="age-1" placeholder="Повних років">
          </div>

          <div class="form__row form__row--select">
            <label for="help-type-1" class="form__label text-1">
              Який вид допомоги вам потрібен?
            </label>

            <select name="help-type-1" id="help-type-1">
              <option value="0" selected>Соціальна та побутова допомога літнім людям</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>         
          </div>

          <div class="form__row">
            <label for="desc-1" class="form__label text-1">
              Опишіть вашу проблему
            </label>

            <textarea class="form__field text form__field--textarea" name="desc-1" id="desc-1" placeholder="Короткий опис"></textarea>
          </div>

          <div class="form__row">
            <label for="name-2" class="form__label text-1">
              ПІБ особи що звертається
            </label>

            <input class="form__field text" type="text" name="name-2" id="name-2" placeholder="Прізвище, ім’я, по-батькові">
          </div>

          <div class="form__row">
            <label for="phone-1" class="form__label text-1">
              Контактний телефон
            </label>

            <input class="form__field text" type="tel" name="phone-1" id="phone-1" placeholder="+380 67 111 11 11">
          </div>

          <div class="form__row">
            <label for="email-1" class="form__label text-1">
              Адреса електронної пошти
            </label>

            <input class="form__field text" type="email" name="email-1" id="email-1" placeholder="example@gmail.com">
          </div>

          <div class="form__bottom">
            <button class="form__submit btn btn--black">Відправити</button>
          </div>
        </form> -->

        <?= $form_shortcod; ?>
      </div>        
    </div>
  </div>
</section>