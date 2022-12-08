<?php
  global $menu_name, $menu_items, $menu_mode;

  if ( $menu_items && !empty($menu_items) && !is_wp_error( $menu_items ) ) {
    $menu_items_parent = [];
    $menu_items_children = [];

    foreach ($menu_items as $key => $item) {
      if ( $item->menu_item_parent ) {
        if ( !$menu_items_children[$item->menu_item_parent] ) {
          $menu_items_children[$item->menu_item_parent] = [];
        }

        array_push($menu_items_children[$item->menu_item_parent], $item);
      } else {
        array_push($menu_items_parent, $item);
      }
    }
  } else {
    return;
  }
?>

<?php if ($menu_name && $menu_mode) : ?>    
  <div class="dropdown header__dropdown">
    <div class="dropdown__head <?= count($menu_items) > 1 ? 'dropdown__head--arrow' : ''; ?>">
      <?php if ( count($menu_items) > 1 ) : ?>
        <p><?= wp_get_nav_menu_name( $menu_name ); ?></p>
        <svg width="15" height="15">
            <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
        </svg>
      <?php elseif( $menu_items[0] && !is_wp_error( $menu_items[0] )  ) : ?>
        <a href="<?= $menu_items[0]->url; ?>"><?= $menu_items[0]->title; ?></a>
      <?php endif; ?>        
    </div>

    <?php if ( count($menu_items) > 1 ) : ?>
      <?php if ( $menu_items_parent && $menu_items_children && $menu_mode === 'desktop' ) : ?>
        <div class="dropdown__body what">
          <ul class="dropdown__list ">
            <?php foreach ( (array) $menu_items_parent as $key => $menu_item_parent ) : ?>
              <?php 
                // Compare menu object with current page menu object
                $current = $menu_item_parent->object_id == get_queried_object_id() ? 'active' : '';  
              ?>
              
              <li class="sub">
                <?php if ( $menu_items_children[$menu_item_parent->ID] === null ) : ?>
                  <a class="<?= $current; ?>" href="<?= $menu_item_parent->url; ?>"><?= $menu_item_parent->title; ?></a>
                <?php else : ?>
                  <div>
                    <a class="<?= $current; ?>" href="<?= $menu_item_parent->url; ?>"><?= $menu_item_parent->title; ?></a>
                    <svg width="15" height="15">
                      <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow"></use>
                    </svg>
                  </div>
                  <ul class="submenu">
                    <?php foreach ($menu_items_children[$menu_item_parent->ID] as $key => $menu_item_child) : ?>
                      <li>
                          <a href="<?= $menu_item_child->url; ?>"><?= $menu_item_child->title; ?></a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>
              </li>   
            <?php endforeach; ?>                   
          </ul>
        </div>
      <?php else : ?>
        <div class="dropdown__body">
          <ul class="dropdown__list">
            <?php foreach ( (array) $menu_items as $key => $menu_item ) : ?>
              <?php 
                // Compare menu object with current page menu object
                $current = $menu_item->object_id == get_queried_object_id() ? 'active' : '';  
              ?>
              <li>
                <a class="<?= $current; ?>" href="<?= $menu_item->url; ?>"><?= $menu_item->title; ?></a>
              </li>
            <?php endforeach; ?>  
          </ul>
        </div>
      <?php endif; ?>
    <?php endif; ?>    
  </div>
<?php endif; ?>