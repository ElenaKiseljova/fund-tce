<?php 
  $map = get_field( 'map' ) ?? [];
?>

<?php if ( $map && !empty($map) && !is_wp_error( $map ) ) : ?>
  <section class="map">
    <?php if ( $map['type'] === 'api' ) : ?>
      <script>
        window.mapMarker = {
          icon: {
            url: '<?= $map['marker'] ? $map['marker'] : get_template_directory_uri(  ) . '/assets/img/marker.svg'; ?>',
          },
          title: '<?= $map['title'] !== '' ? $map['title'] : get_bloginfo( 'name' ); ?>',
          position: { 
            lat: <?= $map['lat'] !== '' ? $map['lat'] : 9999; ?>, 
            lng: <?= $map['lng'] !== '' ? $map['lng'] : 9999; ?> 
          },
        };
      </script>

      <div class="map__container" id="map"></div>
    <?php else : ?>
      <div class="map__container map__container--iframe">
        <?= $map['iframe'] ?? ''; ?>
      </div>
    <?php endif; ?>  
  </section>    
<?php endif; ?>

