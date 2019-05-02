<section class="block page-section vh90 spy-target" id="practice-about">
	<div class="container-fluid height-100 flex-center-vertical">
		<div class="row row-100">
			<div class="col-right offset">
				<div class="practice-about-text">
					<h2 class="medium mb2 pr3">
						<?php the_field('end_of_page_about_statement'); ?>
					</h2>
				</div>
				<?php $link = get_field('end_of_page_about_link'); ?>
				<?php if( $link ): ?>
					<div class="practice-about-link">
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button medium">
							<?php echo $link['title']; ?>
						</a>
					</div>	
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>