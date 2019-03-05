<section class="block page-section bg-light spy-target" id="team">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<div class="team-1 mb3 hidden">
					<h3 class="section-header mb2">
						Our People
					</h3>
					<div class="team-slideshow">
						<?php 
						//$slides = get_field('team_slideshow');
						$slides = get_field('collaboration_slideshow');
						?>
						<?php if( $slides ): ?>
							<div class="slick slick-team">
								<?php foreach ($slides as $image): ?> 
									<div class="slick-slide">
										<div class="slide-image-container">
											<img class="slide-image" src="<?php echo $image['sizes']['fb']; ?>">
										</div>
										<div class="slide-caption-container">
											<?php if( $image['caption'] ): ?>
												<p class="slide-caption"><?php echo $image['caption']; ?></p>
											<?php endif; ?>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="team-2 mb2">
					<h3 class="section-header mb2">
						Leadership
					</h3>
					<?php if( have_rows('team_people') ): ?>
						<?php $count = 0; ?>
						<div class="row team-list">
							<?php while ( have_rows('team_people') ) : the_row(); ?>
								<div class="col-6 col-sm-6 col-md-6 mb3 person person-loop-<?php echo $count; ?>">
									<div class="person-image">
										<a href="#" class="modal-toggle" data-modal-target="modal-person-<?php echo $count; ?>">
											<?php $image = get_sub_field('person_image');
											$image = $image['sizes']['md_square']; ?>
											<img src="<?php echo $image; ?>" >
										</a>
									</div>
									<div class="person-text">
										<h4 class="bold font-main person-name mb0 mt1">
											<a href="#" class="modal-toggle" data-modal-target="modal-person-<?php echo $count; ?>">
												<?php the_sub_field('person_name'); ?>
											</a>
										</h4>
										<h4 class="font-main person-title">
											<?php the_sub_field('person_title'); ?>
										</h4>
										<?php if( get_sub_field('person_email') ): ?>
											<h4 class="font-main person-email">
												<a href="mailto:<?php the_sub_field('person_email'); ?>">
													<?php $first_name = explode(' ', get_sub_field('person_name'), 2); ?>
													Email <?php echo $first_name[0]; ?>
												</a>
											</h4>
										<?php endif; ?>
									</div>
								</div>
								<div class="person-modal modal modal-person scroll" id="modal-person-<?php echo $count; ?>">
									<div class="container-fluid">
										<div class="row">
											<div class="col-right offset">
												<h4 class="bold font-main person-name mb0 mt1">
													<?php the_sub_field('person_name'); ?>
												</h4>
												<h4 class="font-main person-title mb2">
													<?php the_sub_field('person_title'); ?>
												</h4>
												<p class="person-bio">
													<?php the_sub_field('person_bio'); ?>
												</p>
											</div>
										</div>
									</div>
								</div>
								<?php $count++; ?>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="team-3">
					<h3 class="section-header mb2">
						Our Team
					</h3>		
					<?php if( have_rows('team_people') ): ?>
						<?php $count = 0; ?>
						<div class="row team-list-secondary">
							<?php for ($i=0; $i < 10; $i++) { ?>
								<?php while ( have_rows('team_people') ) : the_row(); ?>
									<div class="person person-small person-loop-<?php echo $count; ?>">
										<div class="person-image">
											<?php $image = get_sub_field('person_image');
											$image = $image['sizes']['md_square']; ?>
											<img src="<?php echo $image; ?>" >
										</div>
										<div class="person-text">
											<h4 class="bold font-main person-name mb0 mt1">
												<?php the_sub_field('person_name'); ?><?php if(get_sub_field('person_title')): ?><br><?php the_sub_field('person_title'); ?> <?php endif; ?>
											</h4>
										</div>
									</div>
									<?php $count++; ?>
								<?php endwhile; ?>
							<?php } ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>