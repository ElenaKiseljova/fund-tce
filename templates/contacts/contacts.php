<?php 
  $columns = get_field( 'columns' ) ?? [];
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
                <a class="contact__button btn" href="<?= $button['url']; ?>" target="_blank">
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