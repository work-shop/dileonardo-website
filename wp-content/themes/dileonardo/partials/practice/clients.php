<section class="block page-section bg-light spy-target" id="clients">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<h4 class="bold uppercase mb2">
					<?php the_field('clients_heading'); ?>
				</h4>
				<?php if( have_rows('clients_list') ): ?>
					<ul class="clients-list">
						<?php  while ( have_rows('clients_list') ) : the_row(); ?>
							<li>
								<?php if( get_sub_field('client_link')) { ?>
									<a href="<?php echo $client_link; ?>">
									<?php } ?>
									<h3><?php the_sub_field('client_name'); ?></h3>
									<?php if( get_sub_field('client_link')) { ?>
									</a>
								<?php } ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>