<?php 
  $help_title = get_field( 'help_title' ) ?? '';
  $help_columns = get_field( 'help_columns' ) ?? [];
  $help_last_column = get_field( 'help_last_column' ) ?? [];
?>

<section class="need-help">
  <div class="need-help__container container logo-bg">
    <h2 
      class="title need-help__title js-transition-title"
      data-scroll data-scroll-class="show" 
      data-scroll-repeat="true"
    >
      <?= $help_title; ?>
    </h2>
    
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
          <p class="need-help__text text text--grey">
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