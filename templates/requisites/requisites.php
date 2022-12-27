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
<section class="requisites" id="requisites">
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
              $requisite_type_select = $requisite['type_select'] ?? 'table';
              $requisite_columns = $requisite['columns'] ?? [];
              $groups = $requisite['groups'] ?? [];
            ?>

            <h3 class="requisites__subtitle title-2"><?= $requisite_title; ?></h3>

            <?php if ( $requisite_type_select === 'table' && $groups && is_array($groups) && !is_wp_error( $groups ) ) : ?>
              <ul class="requisites__groups">
                <?php foreach ($groups as $key => $groups_item) : ?>  
                  <?php 
                    $group = $groups_item['group'] ?? [];  
                    $group_title = $group['title'] ?? '';  
                    $group_rows = $group['row'] ?? []; 
                    $group_copy_all = $group['copy_all'] ?? '';  
                  ?> 
                  <li class="requisites__group">
                    <?php if ( $group_title !== '') : ?>
                      <h4 class="requisites__group-title"><?= $group_title; ?></h4>
                    <?php endif; ?>                    

                    <?php foreach ($group_rows as $key => $group_row) : ?>  
                      <div class="requisites__group-row">
                        <h5 class="requisites__group-subtitle text-1"><?= $group_row['title'] ?? ''; ?></h5>
                        <p class="requisites__group-text text-1 copy"><span class="copy__text"><?= $group_row['value'] ?? ''; ?></span></p>
                      </div>
                    <?php endforeach; ?> 

                    <p class="requisites__group-copy-all text-1 text--grey copy">
                      <span><?= __( 'Скопіювати повністю реквізити', 'fundtce' ); ?></span>

                      <span class="copy__text visually-hidden"><?= $group_copy_all; ?></span>
                    </p>
                  </li> 
                <?php endforeach; ?>                
              </ul>
            <?php endif; ?>

            <?php if ( $requisite_type_select === 'columns' && $requisite_columns && is_array($requisite_columns) && !is_wp_error( $requisite_columns ) ) : ?>
              <ul class="requisites__columns">
                <li class="requisites__column text-2">
                  <?= $requisite_columns['column_left'] ?? ''; ?>
                </li>
                <li class="requisites__column text-2">
                  <?= $requisite_columns['column_right'] ?? ''; ?>
                </li>
              </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>      
    <?php endif; ?>
  </div>
</section>