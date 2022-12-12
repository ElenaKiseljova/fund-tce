<?php 
  $map = get_field( 'map' ) ?? [];
?>

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

<section class="map">
  <div class="map__container" id="map"></div>
</section>