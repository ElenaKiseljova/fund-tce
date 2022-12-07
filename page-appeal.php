<?php
/**
 * Template Name: Appeal Page
 **/
?>

<?php get_header(); ?>

<main class="main">
  <section class="appeal">
    <div class="appeal__container container">
      <div class="appeal__left">
        <h1 class="appeal__title title">
          <?php the_title(  ); ?>
        </h1>

        <div class="appeal__content">
          <?php the_content(  ); ?>
        </div>

        <div class="appeal__contacts">
          <div class="appeal__contact contact">
            <h4 class="contact__title text-2">Якщо у вас виникли труднощі, зв’яжіться з нами за номером </h4>

            <a class="contact__button btn" href="tel:+1234567891">
              <svg width="20" height="21">
                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#phone"></use>
              </svg>

              <span>+1234567891</span>
            </a>
          </div>

          <div class="appeal__contact contact">
            <h4 class="contact__title text-2">Або надішліть лист на електрону пошту</h4>

            <a class="contact__button btn" href="mailto:poshta@gmail.com">
              <svg width="20" height="21">
                <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#email"></use>
              </svg>

              <span>poshta@gmail.com</span>
            </a>
          </div>
        </div>

        <div class="appeal__logo">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/logo-min.svg" alt="logo"/>
        </div>  
      </div>

      <div class="appeal__right">
        <form action="" class="appeal__form form">
          <div class="form__row">
            <label for="" class="form__label">
              ПІБ особи що потребує допомоги
            </label>

            <input class="form__field" type="text" name="" id="" placeholder="Прізвище, ім’я, по-батькові" >
          </div>

          <div class="form__row">
            <label for="" class="form__label">
              Вік особи що потребує допомоги
            </label>

            <input class="form__field" type="number" name="" id="" placeholder="Повних років">
          </div>

          <div class="form__row">
            <label for="" class="form__label">
              Який вид допомоги вам потрібен?
            </label>

            <select class="form__field form__field--select" name="" id="">
              <option value="0" selected>Соціальна та побутова допомога літнім людям</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>

          <div class="form__row">
            <label for="" class="form__label">
              Опишіть вашу проблему
            </label>

            <textarea class="form__field form__field--textarea" name="" id="" placeholder="Короткий опис"></textarea>
          </div>

          <div class="form__row">
            <label for="" class="form__label">
              ПІБ особи що звертається
            </label>

            <input class="form__field" type="text" name="" id="" placeholder="Прізвище, ім’я, по-батькові">
          </div>

          <div class="form__row">
            <label for="" class="form__label">
              Контактний телефон
            </label>

            <input class="form__field" type="tel" name="" id="" placeholder="+380 67 111 11 11">
          </div>

          <div class="form__row">
            <label for="" class="form__label">
              Адреса електронної пошти
            </label>

            <input class="form__field" type="email" name="" id="" placeholder="example@gmail.com">
          </div>

          <div class="form__bottom">
            <button class="form__submit btn btn--black">Відправити</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>

<?php get_footer();?>