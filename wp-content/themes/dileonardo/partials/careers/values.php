<section class="block page-section spy-target bg-light" id="values">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<h2 class="section-header values-heading mb2">
					<?php ///the_field('values_heading'); ?>
					Our Values
				</h2>
				<?php if( have_rows('values') ): ?>
					<?php $count = 1; ?>
					<ul class="values-list row">
						<?php  while ( have_rows('values') ) : the_row(); ?>
							<li class="col-6 value-col mb3">
								<h4 class="value"><?php the_sub_field('value'); ?></h4>
							</li>
							<?php $count++; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</section>