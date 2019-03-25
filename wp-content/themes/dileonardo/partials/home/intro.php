<section class="block spy-target mt6" id="home-intro">
	<div class="container-fluid ">
		<div class="home-intro-container padded vh80">
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