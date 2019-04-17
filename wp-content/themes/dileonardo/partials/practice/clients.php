<section class="block page-section spy-target" id="clients">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<h3 class="mb2">
					<?php the_field('clients_heading'); ?>
				</h3>
				<?php if( have_rows('clients_list') ): ?>
					<div class="row clients-list">
						<?php for ($i=0; $i < 2; $i++) { ?>
							<?php  while ( have_rows('clients_list') ) : the_row(); ?>
								<div class="col-6 col-sm-3 client-col">
									<?php if( get_sub_field('client_link')) { ?>
										<a href="<?php echo $client_link; ?>">
										<?php } ?>
										<?php $image = get_sub_field('client_logo'); ?>
										<img src="<?php echo $image['sizes']['lg_cropped']; ?>">
										<?php if( get_sub_field('client_link')) { ?>
										</a>	
									<?php } ?>
								</div>
							<?php endwhile; ?>
						<?php } ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>