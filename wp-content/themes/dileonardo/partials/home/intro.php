
<?php if(false){ ?>
	<section class="block spy-target mt6" id="home-intro">
		<div class="container-fluid ">
			<div class="home-intro-container padded-top vh80">
				<div class="vertical-center">
					<div class="row">
						<div class="col-right offset">
							<h2 class="mb2 white" id="tagline-text">
								<?php the_field('tagline_text'); ?>
							</h2>
							<?php $link = get_field('tagline_link'); ?>
						<?php if( $link ): ?>
								<div id="intro-link">
									<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button white">
										<?php echo $link['title']; ?>
									</a>
								</div>	
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>

<?php if(true){ ?>
	<section class="block spy-target vh100 padded" id="home-intro">
		<div class="container-fluid height-100">
			<div class="row flex-center-vertical height-100">
				<div class="col-right offset" id="tagline">
					<h2 class="mb2 medium" id="tagline-text">
						<?php the_field('tagline_text'); ?>
					</h2>
					<?php $link = get_field('tagline_link'); ?>
					<?php if( $link ): ?>
						<div id="intro-link">
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button medium mr4">
								<?php echo $link['title']; ?>
							</a>
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button medium">
								See Our Projects
							</a>
						</div>	
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
