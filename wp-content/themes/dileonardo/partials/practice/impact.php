<?php 
$background_image = get_field('impact_background_image');
$background_image = $background_image['sizes']['xl'];
?>
<section class="block vh100 cf-top cf-bottom spy-target" id="impact">
	<div class="container-fluid position-relative height-100 flex-center">
		<div class="block-background" style="background-image: url('<?php echo $background_image; ?>');">
		</div>
		<div class="row row-100">
			<div class="col">
				<?php if( have_rows('impact_statistics') ): ?>
					<div class="row impact-statistics">
						<?php  while ( have_rows('impact_statistics') ) : the_row(); ?>
							<div class="col-4 impact-statistic impact-statistic-<?php echo $i; ?>">
								<h1 class="impact-statistic-number brand centered">
									<?php the_sub_field('statistic_number'); ?>
								</h1>
								<h3 class="impact-statistic-label centered mb0">
									<?php the_sub_field('statistic_label'); ?>
								</h3>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>