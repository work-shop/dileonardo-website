<section class="block page-section spy-target" id="intro">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<div class="careers-intro-text mb6">
					<h2 class="page-section-intro-text">
						Our collaborative approach means we’re constantly exposed to new ideas and innovative thinking from every discipline. Our people are empowered with the freedom, opportunity and technology to exceed client expectations with inspired solutions.
					</h2>
				</div>
				<div class="careers-intro-slide">
					<?php 
					$slides = get_field('careers_slideshow');
					?>
					<?php if( $slides ): ?>
						<div class="slick slick-default">
							<?php foreach ($slides as $image): ?> 
								<div class="slick-slide">
									<div class="slide-image-container">
										<div class="slide-image vh50" style="background-image: url('<?php echo $image['sizes']['page_hero']; ?>');">
										</div>
									</div>
									<div class="slide-caption-container container-fluid">
										<div class="row">
											<div class="col-right offset">
												<?php if( $image['caption'] ): ?>
													<h2 class="slide-caption white bold"><?php echo $image['caption']; ?></h2>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>