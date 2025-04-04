<?php 
  $team_title = get_field( 'team_title' );
  $team_members = get_field( 'team_members' );
?>
<section class="team">
  <div class="container team__container">
    <h2 
      class="title team__title js-transition-title"
      data-scroll data-scroll-class="show" 
      data-scroll-repeat="true"
    >
      <?= $team_title; ?>
    </h2>

    <?php if ( $team_members && is_array( $team_members ) && !is_wp_error( $team_members )) : ?>
      <ul 
        class="team__list logo-bg js-paralax"
        data-scroll data-scroll-class="show" 
        data-scroll-repeat="true"
      >
        <?php foreach ($team_members as $key => $team_member) : ?>
          <?php 
            $m_img = $team_member['img'] ?? '';
            $m_name = $team_member['name'] ?? '';
            $m_position = $team_member['position'] ?? '';
          ?>

          <li class="teal__item js-paralax-item"  style="--delay: <?= 0.4 + $key / 10; ?>s;">
            <div class="team__img">
                <img src="<?= $m_img; ?>" alt="partner logo"/>
            </div>

            <h3 
              class="team__name title-2 js-transition-title"
              data-scroll data-scroll-class="show" 
              data-scroll-repeat="true"
            >
              <?= $m_name; ?>
            </h3>

            <p class="team__position text-2 text--grey"><?= $m_position; ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>  
  </div>
</section>