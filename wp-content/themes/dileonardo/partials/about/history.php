
<section class="block spy-target page-section page-section-first" id="history">
	<div class="history-1 bg-white padded-bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-right offset">
					<h2 class="page-section-intro-text">
						<?php the_field('legacy_text'); ?>
					</h2>
					<?php if( get_field('legacy_text_secondary')){ ?>
						<h4 class="page-section-intro-text-2">
							<?php the_field('legacy_text_secondary'); ?>
						</h4>
					<?php  } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="history-2 vh100 bg-light">
		<div class="container-fluid history-top">
			<div class="row">
				<div class="col-right offset">
					<?php $events = get_field('history_timeline'); ?>
					<?php if( have_rows('history_timeline') ){ ?>
						<div class="history-line"></div>
						<div class="history-events slick slick-history">
							<?php $count = 1; ?>
							<?php  while ( have_rows('history_timeline') ) : the_row(); ?>
									<div class="history-slide">
										<div class="history-event <?php if( get_sub_field('milestone') ): echo 'milestone'; endif; ?>">
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
							</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
