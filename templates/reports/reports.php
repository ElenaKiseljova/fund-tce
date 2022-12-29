<?php 
  $reports = get_field( 'reports' );
?>
<section class="reports">
  <div class="reports__container container">
    <?php if ( $reports && is_array($reports) && !is_wp_error( $reports ) ) : ?>
      <ul class="reports__list">
        <?php foreach ($reports as $key => $report) : ?>
          <?php 
            $file = $report['file'] ?? '';
            $title = $report['title'] ?? '';
          ?>
          <li class="reports__item">
            <a data-fancybox data-src="<?= $file; ?>" href="#">
            </a>

            <?php if ( $title !== '' ) : ?>
              <h4 class="reports__title title-2"><?= $title; ?></h4>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>      
    <?php endif; ?>
  </div>
</section>