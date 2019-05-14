<section class="block <?php if( is_page(11) ){ ?> page-section <?php } else{ } ?> spy-target" id="press">
	<div class="container-fluid">
		<div class="row">
			<div class="<?php if( is_page(11) ){ ?> col-right offset <?php } else{ ?> col-right offset <?php } ?>">
				<?php 
				$count = 0;
				$limited = false;
				$limit = 8;
				if( is_page(11) ){
					$limited = true; ?>
					<div class="row mb1">
						<div class="press-list-title col-6">
							<h3 class="">
								Selected press
							</h3>
						</div>
						<div class="press-list-link righted col-6">
							<a href="/press" class="medium">
								See All
							</a>
						</div>
					</div>
				<?php } ?>
				<?php if( have_rows('press', 19) ){ ?>
					<div class="press-list row-broken">
						<?php  while ( have_rows('press', 19) ) : the_row(); ?>
							<?php if ( ($limited && $count < $limit) || $limited === false ){ ?>
								<div class="press mb2 press-loop-<?php echo $count; ?> <?php if(false){ ?><?php if( is_page(11) ){ ?> col-6 col-sm-4 col-lg-3 <?php } else{ ?> col-6 col-sm-4 col-lg-3 <?php } ?><?php } ?>">
									<?php if( get_sub_field('press_link')) { ?>
										<a href="<?php the_sub_field('press_link'); ?>">
										<?php } else if( get_sub_field('press_file')) {?>
											<a href="<?php the_sub_field('press_file'); ?>" target="_blank">
											<?php } ?>
											<?php if( get_sub_field('press_image')) { 
												$image = get_sub_field('press_image');
												?>
												<?php if( is_page(11) ){ ?>
													<img class="" src="<?php echo $image['sizes']['press']; ?>">
													<?php } else{ ?>
														<img class="" src="<?php echo $image['sizes']['sm']; ?>">
													<?php } ?>
												<?php } ?>
												<h4 class="press-title">
													<?php the_sub_field('press_title'); ?>
												</h4>
												<?php if( get_sub_field('press_link') || get_sub_field('press_file')){ ?>
												</a>
											<?php } ?>
										</div>
										<?php $count++; ?>
									<?php } ?>
								<?php endwhile; ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>