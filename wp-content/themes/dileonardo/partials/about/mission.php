<section class="block page-section spy-target" id="mission">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<h2 class="page-section-intro-text mb2">
					<?php the_field('mission_text'); ?>
				</h2>
				<?php if( get_field('mission_text_secondary')){ ?>
					<h4 class="page-section-intro-text-2">
						<?php the_field('mission_text_secondary'); ?>
					</h4>
				<?php  } ?>
			</div>
		</div>
	</div>
</section>