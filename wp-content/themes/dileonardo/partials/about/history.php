<section class="block page-section vh100 spy-target" id="history">
	<div class="container-fluid height-100 flex-center-vertical">
		<div class="row">
			<div class="col-right offset">
				<?php
				$events = get_field('history_timeline');
				?>
				<?php if( have_rows('history_timeline') ){ ?>
					<div class="history-events row">
						<?php  while ( have_rows('history_timeline') ) : the_row(); ?>
							<div class="history-event col">
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
						<?php endwhile; ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>