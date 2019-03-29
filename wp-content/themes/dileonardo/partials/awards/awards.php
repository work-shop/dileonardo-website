<section class="block page-section <?php if( is_page(9) ){ ?> bg-light <?php } ?> spy-target" id="awards">
	<div class="container-fluid">
		<div class="row">
			<?php if( is_page(17) ){ ?>
				<div class="col-left">
					<h1 class="page-title">
						<?php the_title(); ?>
					</h1>
				</div>
			<?php } ?>
			<div class="<?php if( is_page(9) || false ){ ?> col-right offset <?php } else{ ?> col-right <?php } ?>">
				<?php 
				$count = 0;
				$limited = false;
				$limit = 8;
				if( is_page(9) ){
					$limited = true; ?>
					<div class="row mb1">
						<div class="awards-list-title award-col col-6">
							<h3 class="">
							Selected Awards
						</h3>
						</div>
						<div class="awards-list-link award-col righted col-6">
							<a href="/awards" class="medium">
								See All
							</a>
						</div>
					</div>
				<?php } ?>
				<?php if( have_rows('awards', 17) ){ ?>
					<div class="awards-list">
						<?php  while ( have_rows('awards', 17) ) : the_row(); ?>
							<?php if ( ($limited && $count < $limit) || $limited === false ){ ?>
								<div class="award row award-loop-<?php echo $count; ?>">
									<div class="col-2 award-col award-col-year">
										<h4 class="award-year">
											<?php the_sub_field('award_year'); ?>
										</h4>
									</div>
									<div class="col award-col-title">
										<h4 class="award-title">
											<?php if( get_sub_field('award_link')){ ?>
												<a href="<?php the_sub_field('award_link'); ?>">
												<?php } ?>
												<?php the_sub_field('award_title'); ?>
												<?php if( get_sub_field('award_link')){ ?>
												</a>
											<?php } ?>
										</h4>
									</div>
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