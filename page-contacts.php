<?php
/**
 * Template Name: Contacts Page
 **/
?>

<?php get_header(); ?>

<?php 
  $columns = get_field( 'columns' ) ?? [];
  $map = get_field( 'map' ) ?? [];
  $help_title = get_field( 'help_title' ) ?? '';
  $help_columns = get_field( 'help_columns' ) ?? [];
  $help_last_column = get_field( 'help_last_column' ) ?? [];
?>

<script>
  window.mapMarker = {
    icon: {
      url: '<?= $map['marker'] ? $map['marker'] : get_template_directory_uri(  ) . '/assets/img/marker.svg'; ?>',
    },
    title: '<?= $map['title'] !== '' ? $map['title'] : get_bloginfo( 'name' ); ?>',
    position: { 
      lat: <?= $map['lat'] !== '' ? $map['lat'] : 9999; ?>, 
      lng: <?= $map['lng'] !== '' ? $map['lng'] : 9999; ?> 
    },
  };
</script>

<main class="main">
  <?php 
    get_template_part( 'templates/promo' );
  ?>

  <section class="contacts">
    <div class="contacts__container container">
      <?php if ( $columns && is_array($columns) && !is_wp_error( $columns ) ) : ?>
        <div class="contacts__list">
          <?php foreach ($columns as $key => $column) : ?>
            <div class="contacts__contact contact">
              <h4 class="contact__title text-2"><?= $column['title']; ?></h4>
              
              <?php if ( $column['list'] && is_array($column['list']) && !is_wp_error( $column['list'] ) ) : ?>
                <?php foreach ($column['list']as $key => $item) : ?>
                  <?php 
                    $button = $item['button'] ?? [];
                  ?>
                  <a class="contact__button btn" href="<?= $button['url']; ?>">
                    <svg width="18" height="18">
                      <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#<?= $button['type']; ?>"></use>
                    </svg>

                    <span><?= $button['text']; ?></span>
                  </a>
                <?php endforeach; ?>
              <?php endif; ?>              
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>      
    </div>
  </section>

  <section class="map">
    <div class="map__container" id="map"></div>
  </section>

  <section class="need-help">
    <div class="need-help__container container">
      <h2 class="need-help__title title"><?= $help_title; ?></h2>
      
      <div class="need-help__columns">
        <?php if ( $help_columns && is_array($help_columns) && !is_wp_error( $help_columns ) ) : ?>
          <?php foreach ($help_columns as $key => $column) : ?>
            <p class="need-help__text text">
              <?= $column['text'] ?? '';?>           
            </p>
          <?php endforeach; ?>
        <?php endif; ?> 
        
        <?php if ( $help_last_column && is_array($help_last_column) && !is_wp_error( $help_last_column ) ) : ?>
          <?php 
            $button = $help_last_column['button'] ?? [];
          ?>
          <div class="need-help__contact">
            <p class="need-help__text need-help__text--gray text">
              <?= $help_last_column['text']; ?>
            </p>
            
            <a class="need-help__button btn btn--black" href="<?= $button['url']; ?>">
              <span><?= $button['text']; ?></span>
            </a>
          </div>
        <?php endif; ?>
      </div>      
    </div>
  </section>
  
  <section class="want-help">
    <div class="want-help__container container">
      <h2 class="want-help__title title"><?= __('Бажаєте допомогти?', 'foundtce'); ?></h2>
      
      <?php 
        get_template_part( 'templates/fund' );
      ?>     
    </div>
  </section>  
</main>

<?php get_footer();?>