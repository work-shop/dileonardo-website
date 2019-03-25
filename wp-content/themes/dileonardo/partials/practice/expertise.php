<section class="block page-section spy-target" id="expertise">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<h2 class="page-section-intro-text mb1">
					<?php the_field('expertise_statement'); ?>
				</h2>
				<?php if( get_field('expertise_secondary_statement')){ ?>
					<h4 class="page-section-intro-text-2 mb4">
						<?php the_field('expertise_secondary_statement'); ?>
					</h4>
				<?php  } ?>
				<div class="expertise-lists row">
					<div class="col-5">
						<h4 class="bold uppercase mb1">Services</h4>
						<?php if( have_rows('services_list') ): ?>
							<ul class="services-list">
								<?php  while ( have_rows('services_list') ) : the_row(); ?>
									<li>
										<?php the_sub_field('service'); ?>
									</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="col">
						<h4 class="bold uppercase mb1">Sectors</h4>
						<?php 
						$terms = get_field('sectors_list');
						if( $terms ): ?>
							<ul>
								<?php foreach( $terms as $term ): ?>
									<li><a href="/projects?category=<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>