<section class="block page-section" id="locations">
	<div class="container-fluid">
		<div class="row">
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
					$email = get_sub_field('location_email');
					$id = 'location-' . $count;
					$placeId =  get_sub_field('google_maps_place_id_for_directions');
					?>
					<div class="col-xl-3 col-md-6 location location-col mb3">
						<h4 class="location-title bold mb1">
							<?php echo $title; ?>
						</h4>
						<address class="location-address">
							<?php echo $address; ?>
							<h5 class="location-directions mt1 mb2">
								<a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $title; ?>&destination_place_id=<?php echo $placeId; ?>" target="_blank">GET DIRECTIONS</a></h5>
							Phone: <?php echo $phone; ?>
							<?php if($email){ ?>
								<br>
								Email: <?php echo $email; ?>
							<?php } ?>
						</address>
						<div class="location-contacts">
							<div class="accordion multi-collapse" data-accordion>
								<div class="accordion-label" data-control>
									<h4 class="">
										Contacts
									</h4>
									<span class="icon" data-icon="”"></span>
								</div>
								<div class="accordion-body" data-content>
									<div class="accordion-content-inner">
										<?php if( have_rows('contacts') ): ?>
											<?php  while ( have_rows('contacts') ) : the_row(); ?>
												<div class="location-contact mb2">
													<h4 class="bold location-contact-heading">
														<?php the_sub_field('contact_heading'); ?>
													</h4>
													<h4 class="location-contact-details">
														<?php if( get_sub_field('contact_name') ){ ?>
															<?php the_sub_field('contact_name'); ?>
															<br>
														<?php } ?>
														<?php if( get_sub_field('contact_email') ){ ?>
															<?php the_sub_field('contact_email'); ?>
															<br>
														<?php } ?>
														<?php if( get_sub_field('contact_phone') ){ ?>
															<?php the_sub_field('contact_phone'); ?>
														<?php } ?>
													</h4>
												</div>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php $count++; ?>
				<?php endwhile; ?>
			<?php } ?>
		</div>
	</div>
</section>