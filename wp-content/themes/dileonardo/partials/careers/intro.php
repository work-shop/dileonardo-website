<section class="block page-section page-section-first spy-target" id="intro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<div class="careers-intro-text mb6">
					<h2 class="page-section-intro-text">
						<?php the_field('careers_introduction_statement'); ?>
					</h2>
				</div>
				<?php if(false){ ?>
					<div class="row">
						<div class="col-md-6">
							<?php 
							$slides = get_field('careers_slideshow');
							?>
							<?php if( $slides ): ?>
								<div class="slick slick-default">
									<?php foreach ($slides as $image): ?> 
										<div class="slick-slide">
											<div class="slide-image-container">
												<div class="slide-image">
													<img src="<?php echo $image['sizes']['lg']; ?>">
												</div>
											</div>
											<div class="slide-caption-container">
												<?php if( $image['caption'] ): ?>
													<h4 class="slide-caption medium"><?php echo $image['caption']; ?></h4>
												<?php endif; ?>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="careers-intro-images vh75">
		<?php $image = get_field('careers_image_1'); ?>
		<div class="career-intro-image career-image-1" style="background-image: url('<?php echo $image['sizes']['lg']; ?>')">
		</div>
		<?php $image = get_field('careers_image_2'); ?>
		<div class="career-intro-image career-image-2" style="background-image: url('<?php echo $image['sizes']['lg']; ?>')">
		</div>
	</div>
</section>