<?php
  global $menu_name, $menu_items;

  if ( $menu_items && !empty($menu_items) && !is_wp_error( $menu_items ) ) {
    $menu_items_parent = [];

    foreach ($menu_items as $key => $item) {
      if ( !$item->menu_item_parent ) {
        array_push($menu_items_parent, $item);
      }
    }
  } else {
    return;
  }
?>

<?php if ( $menu_name && $menu_items_parent ) : ?>    
  <h4><?= wp_get_nav_menu_name( $menu_name ); ?></h4>

  <?php if ( count($menu_items_parent) > 4 ) : ?>
    <div class="footer__inner">
      <?php foreach ( (array) $menu_items_parent as $key => $menu_item ) : ?>
        <?php if ( $key > 6) break; ?>
        
        <?php 
          // Compare menu object with current page menu object
          $current = $menu_item->object_id == get_queried_object_id() ? 'active' : '';  
        ?>

        <?php if ( $key === 0 || $key === 3) : ?>
          <ul class="footer__list">
        <?php endif; ?>

        <li>
          <a class="<?= $current; ?>" href="<?= $menu_item->url; ?>"><?= $menu_item->title; ?></a>
        </li>

        <?php if ( $key === 2 || $key === 6) : ?>
          </ul>
        <?php endif; ?>
      <?php endforeach; ?> 
    </div>
  <?php else : ?>
    <ul class="footer__list">
      <?php foreach ( (array) $menu_items_parent as $key => $menu_item ) : ?>
        <?php 
          // Compare menu object with current page menu object
          $current = $menu_item->object_id == get_queried_object_id() ? 'active' : '';  
        ?>
        <?php if ( !$menu_item->menu_item_parent ) : ?>
          <li>
            <a class="<?= $current; ?>" href="<?= $menu_item->url; ?>"><?= $menu_item->title; ?></a>
          </li>
        <?php endif; ?>      
      <?php endforeach; ?>  
    </ul>
  <?php endif; ?>  
<?php endif; ?>