<?php 
  $contacts = get_field( 'contacts' ) ?? [];
  $form_shortcod = get_field( 'form_shortcod' ) ?? '';
?>

<section class="appeal">
  <div class="appeal__container container logo-bg">
    <div class="appeal__left">
      <h1 
        class="title appeal__title js-transition-title"
        data-scroll data-scroll-class="show" 
        data-scroll-repeat="true"
      >
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

              <a class="contact__button btn" href="<?= $contact['button']['url']; ?>" target="_blank">
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
        <?= $form_shortcod; ?>
      </div>        
    </div>
  </div>
</section>