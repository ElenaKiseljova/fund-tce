<?php 
  $requisites_title = get_field( 'requisites_title' ) ?? '';
  $requisites_list = get_field( 'requisites_list' ) ?? [];
?>

<script>
  window.MESSAGES_COPY_TO_CLIPBOARD = {
    success: '<?= __( 'Скопійовано в буфер обміну', 'fundtce' ); ?>',
    error: '<?= __( 'Не скопійовано в буфер обміну. Потрібен протокол HTTPS', 'fundtce' ); ?>',
  };
</script>
<section class="requisites">
  <div class="requisites__container container">
    <h2 class="requisites__title title"><?= $requisites_title; ?></h2>

    <?php if ( $requisites_list && is_array($requisites_list) && !is_wp_error( $requisites_list ) ) : ?>
      <ul class="requisites__anchors">
        <?php foreach ($requisites_list as $key => $requisite) : ?>   
          <li class="requisites__anchor">
            <?php 
              $requisite_title = $requisite['title'] ?? '';
            ?>
            <a class="btn" href="#requisite-<?= $key; ?>"><?= $requisite_title; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>

      <ul class="requisites__list">
        <?php foreach ($requisites_list as $key => $requisite) : ?>          
          <li class="requisites__item" id="requisite-<?= $key; ?>">
            <?php 
              $requisite_title = $requisite['title'] ?? '';
              $requisite_columns = $requisite['columns'] ?? [];
            ?>

            <h3 class="requisites__subtitle title-2"><?= $requisite_title; ?></h3>

            <?php if ( $requisite_columns && is_array($requisite_columns) && !is_wp_error( $requisite_columns ) ) : ?>
              <ul class="requisites__columns requisites__columns--<?= count($requisite_columns); ?>">
                <?php foreach ($requisite_columns as $key => $requisite_column) : ?>
                  <li class="requisites__column text-1">
                    <?= $requisite_column['content'] ?? ''; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>      
    <?php endif; ?>
  </div>
</section>