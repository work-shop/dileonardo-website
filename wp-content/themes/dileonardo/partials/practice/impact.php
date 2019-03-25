<section class="block page-section spy-target" id="impact">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<?php if( have_rows('impact_statistics') ): ?>
					<div class="row impact-statistics">
						<?php for ($i=0; $i < 3; $i++) { ?>
							<?php  while ( have_rows('impact_statistics') ) : the_row(); ?>
								<div class="col-4 impact-statistic">
									<h1 class="impact-statistic-number brand centered">
										<?php the_sub_field('statistic_number'); ?>
									</h1>
									<h3 class="impact-statistic-label centered">
										<?php the_sub_field('statistic_label'); ?>
									</h3>
								</div>
							<?php endwhile; ?>
						<?php } ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>