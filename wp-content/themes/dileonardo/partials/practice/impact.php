<section class="block page-section vh80 spy-target" id="impact">
	<div class="container-fluid height-100 flex-center-vertical">
		<div class="row row-100">
			<div class="<?php if(is_front_page() === false ){ ?> col-right offset <?php } else{ ?> col <?php } ?>">
				<?php if( have_rows('impact_statistics', 11) ): ?>
					<div class="row impact-statistics">
					<?php for ($i=0; $i < 2; $i++) { ?>
							<?php  while ( have_rows('impact_statistics', 11) ) : the_row(); ?>
								<div class="col-4 impact-statistic impact-statistic-<?php echo $i; ?>">
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