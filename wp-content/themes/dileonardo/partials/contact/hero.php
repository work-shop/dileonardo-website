<section class="block page-hero" id="map">
	<div class="page-hero-image position-relative">
		<?php
		$count = 0;
		$mapOptions = array( 'data' => array() );
		?>
		<?php if( have_rows('locations') ){ ?>
			<?php  while ( have_rows('locations') ) : the_row(); ?>
				<?php 
				$title = get_sub_field('location_title');
				$address = get_sub_field('location_address');
				$phone = get_sub_field('location_phone');
				$fax = get_sub_field('location_fax');
				$summary = $address . $phone . $fax;
			//$summary = 'summary';
				$location = get_sub_field('location_location');
				$link = '';
				$placeId =  get_sub_field('google_maps_place_id_for_directions');
				$id = 'marker-' . $count;

				if ( $location && ($location['lat'] && $location['lng']) ) {

					$location = array(
						'marker' => array(
							'title' => $title,
							'position' => $location,
							'link' => $link,
							'placeId' => $placeId, 
							'popup' => array(
								'id' => $id,
								'summary' => $summary
							)
						)
					);

					$mapOptions['data'][] = $location;

				}
				?>
				<?php $count++; ?>
			<?php endwhile; ?>
		<?php } ?>

		<script>
			var mapOptions = <?php echo json_encode( $mapOptions, JSON_UNESCAPED_SLASHES ); ?>;

        // Okay, we got the data. Now we just need to build the html, and parse
        // the latitude and longitude as integers.
        mapOptions.data.forEach( function( location ) {
        	console.log(location);
        	location.marker.position.lat = parseFloat(location.marker.position.lat);
        	location.marker.position.lng = parseFloat(location.marker.position.lng);
        	location.marker.popup.content = '<div class="marker-card"><h4 class="marker-card-title bold">' + location.marker.title + '</h4><p class="marker-card-summary mb1">' + location.marker.popup.summary + '</p><h5 class="marker-card-directions"><a href="https://www.google.com/maps/dir/?api=1&destination=' + location.marker.title + '&destination_place_id=' + location.marker.placeId + '" target="_blank">Get Directions</a></h5></div>';
        });

        //mapOptions.render = { zoom: 3 };

    </script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBBurwCtrQ2a4q-CrpB-Wa6cdLO-sR1Zxw" async defer></script>
    <div class="ws-map" data-options="mapOptions"></div>
</div>
</section>
