<?php 
  $social = get_field( 'social', 'options' ) ?? [];
?>
<span class="social_links">
  <?php if ( $social && is_array($social) && !is_wp_error( $social ) ) : ?>
    <?php foreach ($social as $key => $soc) : ?>
      <a href="<?= $soc; ?>" target="_blank">
        <svg width="25" height="25">
          <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#<?= $key; ?>"></use>
        </svg>
      </a>
    <?php endforeach; ?>
  <?php endif; ?>
</span>