<section class="block page-section spy-target" id="press">
	<div class="container-fluid">
		<div class="row">
			<div class="<?php if( is_page(9) ){ ?> col-right offset <?php } else{ ?> col <?php } ?>">
				<?php 
				$count = 0;
				$limited = false;
				$limit = 8;
				if( is_page(9) ){
					$limited = true;
				} 
				?>
				<?php if( have_rows('press', 19) ){ ?>
					<div class="press-list row">
						<?php  while ( have_rows('press', 19) ) : the_row(); ?>
							<?php if ( ($limited && $count < $limit) || $limited === false ){ ?>
								<div class="press mb2 press-loop-<?php echo $count; ?> <?php if( is_page(9) ){ ?> col-3 <?php } else{ ?> col-2 <?php } ?>">

									<?php if( get_sub_field('press_link')) { ?>
										<a href="<?php the_sub_field('press_link'); ?>">
										<?php } ?>
										<?php if( get_sub_field('press_image')) { 
											$image = get_sub_field('press_image');
											?>
											<img class="" src="<?php echo $image['sizes']['sm']; ?>">
										<?php } ?>
										<h4 class="press-title">
											<?php the_sub_field('press_title'); ?>
										</h4>
										<?php if( get_sub_field('press_link')){ ?>
										</a>
									<?php } ?>
								</div>
								<?php $count++; ?>
							<?php } ?>
						<?php endwhile; ?>
					</div>
				<?php } ?>
				<?php if( is_page(9) ){ ?>
					<div class="press-link righted mt3 mb2">
						<a href="/press" class="button">
							See All Press
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>