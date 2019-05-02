<section class="block page-section vh90 spy-target" id="about-practice">
	<div class="container-fluid height-100 flex-center-vertical">
		<div class="row row-100">
			<div class="col-right offset">
				<div class="about-practice-text">
					<h2 class="medium mb2 pr3">
						<?php the_field('end_of_page_practice_statement'); ?>
					</h2>
				</div>
				<?php $link = get_field('end_of_page_practice_link'); ?>
				<?php if( $link ): ?>
					<div class="about-practice-link">
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button medium">
							<?php echo $link['title']; ?>
						</a>
					</div>	
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

