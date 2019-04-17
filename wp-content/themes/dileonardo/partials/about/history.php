<?php if(false){ ?>
	<section class="block vh100 bg-light spy-target" id="history">
		<div class="container-fluid history-top">
			<?php $events = get_field('history_timeline'); ?>
			<?php if( have_rows('history_timeline') ){ ?>
				<div class="history-events">
					<div class="history-events-track">
						<?php $count = 1; ?>
						<?php for ($i=0; $i < 3; $i++) { ?>
							<?php  while ( have_rows('history_timeline') ) : the_row(); ?>
								<div class="history-event">
									<h5 class="uppercase brand bold tracked history-event-year mb1">
										<?php echo $count; ?>&nbsp; &nbsp; &nbsp;<?php the_sub_field('year'); ?>
									</h5>
									<?php $image = get_sub_field('event_image'); ?>
									<?php if( $image ){ ?>
										<div class="history-event-image-container mb1">
											<img class="history-event-image" src="<?php echo $image['sizes']['md_cropped']; ?>">
										</div>
									<?php  } ?>
									<?php if( get_sub_field('event_description') ){ ?>
										<p class="history-event-description mb0">
											<?php the_sub_field('event_description'); ?>
										</p>
									<?php } ?>
								</div>
								<?php $count++; ?>
							<?php endwhile; ?>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="container-fluid history-bottom">
			<div id="history-arrows" class="row">
				<div class="col-right offset flex-center">
					<div class="history-arrow" id="history-arrow-previous">
						<span class="icon" data-icon="Û"></span>
					</div>
					<div class="history-arrow" id="history-arrow-next">
						<span class="icon" data-icon="Ú"></span>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>

<?php if(true){ ?>
	<section class="block vh100 bg-light spy-target" id="history">
		<div class="container-fluid history-top">
			<div class="row">
				<div class="col-right offset">
					<?php $events = get_field('history_timeline'); ?>
					<?php if( have_rows('history_timeline') ){ ?>
						<div class="history-line"></div>
						<div class="history-events slick slick-history">
							<?php $count = 1; ?>
							<?php for ($i=0; $i < 3; $i++) { ?>
								<?php  while ( have_rows('history_timeline') ) : the_row(); ?>
									<div class="history-slide">
										<div class="history-event">
											<h5 class="uppercase brand bold tracked history-event-year mb1">
												<?php the_sub_field('year'); ?>
											</h5>
											<?php $image = get_sub_field('event_image'); ?>
											<?php if( $image ){ ?>
												<div class="history-event-image-container mb1">
													<img class="history-event-image" src="<?php echo $image['sizes']['md_cropped']; ?>">
												</div>
											<?php  } ?>
											<?php if( get_sub_field('event_description') ){ ?>
												<p class="history-event-description mb0">
													<?php the_sub_field('event_description'); ?>
												</p>
											<?php } ?>
										</div>

									</div>
									<?php $count++; ?>
								<?php endwhile; ?>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>