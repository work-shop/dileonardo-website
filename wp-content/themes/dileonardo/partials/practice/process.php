<section class="block page-section spy-target" id="process">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<h3 class="page-section-intro-text mb2">
					<?php the_field('process_statement'); ?>
				</h3>
				<?php if( have_rows('process_steps') ): ?>
					<div class="process-lists row">
						<?php  while ( have_rows('process_steps') ) : the_row(); ?>
							<div class="col-5 mb3 process-step process-step-col">
								<h4 class="uppercase bold brand">
									<?php the_sub_field('step_title'); ?>
								</h4>
								<p>
									<?php the_sub_field('step_description'); ?>
								</p>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>