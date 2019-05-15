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
						<?php $count = 0; ?>
						<?php  while ( have_rows('impact_statistics') ) : the_row(); ?>
							<?php 
							$starting_statistic_number = get_sub_field('starting_statistic_number'); 
							$starting_statistic_number_trimmed = trim( $starting_statistic_number );
							$starting_statistic_number_trimmed = str_replace( ',', '', $starting_statistic_number_trimmed );
							$number_start = $starting_statistic_number_trimmed;

							$statistic_number = get_sub_field('statistic_number'); 
							$statistic_number_trimmed = trim( $statistic_number );
							$statistic_number_trimmed = str_replace( ',', '', $statistic_number_trimmed );
							$number_end = $statistic_number_trimmed;

							$statistic_number_suffix = get_sub_field('statistic_number_suffix'); 
							?>
							<div class="col-6 col-sm-4 impact-statistic-container">
								<h1 class="impact-statistic-number brand centered">
									<span 
									class="impact-statistic impact-statistic-number-text" 
									data-number-start="<?php echo $number_start; ?>" 
									data-number-end="<?php echo $number_end; ?>" 
									data-number-suffix="<?php echo $statistic_number_suffix; ?>" 
									id="impact-statistic-<?php echo $count; ?>"
									>
									</span><?php if($statistic_number_suffix){ ?><span class="impact-statistic-number-suffix"></span><?php } ?>
								</h1>
								<h3 class="impact-statistic-label centered mb0">
									<?php the_sub_field('statistic_label'); ?>
								</h3>
							</div>
							<?php $count++; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>