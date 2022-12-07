<?php
/**
 * Template Name: Team Page
 **/
?>

<?php get_header(); ?>

<main class="main">
  <?php 
    get_template_part( 'templates/promo' );

    get_template_part( 'templates/founder' );

    get_template_part( 'templates/gallery' );
  ?>

  <?php 
    $team_title = get_field( 'team_title' );
    $team_members = get_field( 'team_members' );
  ?>
  <section class="team">
    <div class="container team__container">
      <h2 class="title"><?= $team_title; ?></h2>

      <?php if ( $team_members && is_array( $team_members ) && !is_wp_error( $team_members )) : ?>
        <ul class="team__list">
          <?php foreach ($team_members as $key => $team_member) : ?>
            <?php 
              $m_img = $team_member['img'] ?? '';
              $m_name = $team_member['name'] ?? '';
              $m_position = $team_member['position'] ?? '';
            ?>

            <li class="teal__item">
              <div class="team__img">
                  <img src="<?= $m_img; ?>" alt="partner logo"/>
              </div>

              <h3 class="team__name"><?= $m_name; ?></h3>

              <p class="team__position"><?= $m_position; ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>       
    </div>
  </section>
</main>

<?php get_footer();?>