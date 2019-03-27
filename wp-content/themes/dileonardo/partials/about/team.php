<section class="block page-section spy-target" id="team">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<div id="team-partners" class="team-1 mb3">
					<h3 class="section-header mb2">
						<?php the_field('partners_heading'); ?>
					</h3>
					<?php if( have_rows('partners') ): ?>
						<?php $count = 0; ?>
						<div class="row team-list">
							<?php for ($i=0; $i < 2; $i++) { ?>
								<?php while ( have_rows('partners') ) : the_row(); ?>
									<div class="col-6 col-sm-6 col-md-3 mb3 person person-loop-<?php echo $count; ?>">
										<div class="person-image">
											<a href="#" class="modal-toggle" data-modal-target="modal-person-partners-<?php echo $count; ?>">
												<?php $image = get_sub_field('person_image');
												$image = $image['sizes']['md_square']; ?>
												<img src="<?php echo $image; ?>" >
											</a>
										</div>
										<div class="person-text">
											<h4 class="bold font-main person-name mb0 mt1">
												<a href="#" class="modal-toggle" data-modal-target="modal-person-partners-<?php echo $count; ?>">
													<?php the_sub_field('person_name'); ?>
												</a>
											</h4>
											<h4 class="font-main person-title">
												<?php the_sub_field('person_title'); ?>
											</h4>
										</div>
									</div>
									<div class="person-modal modal modal-person scroll" id="modal-person-partners-<?php echo $count; ?>">
										<div class="container-fluid">
											<div class="row">
												<div class="col-left pt4">
													<?php $image = get_sub_field('person_secondary_image');
													$image = $image['sizes']['md_square']; ?>
													<img class="person-secondary-image" src="<?php echo $image; ?>" >
												</div>
												<div class="col-right pt4 pb4">
													<h4 class="bold font-main person-name mb0">
														<?php the_sub_field('person_name'); ?>
													</h4>
													<h4 class="font-main person-title mb0">
														<?php the_sub_field('person_title'); ?>
													</h4>
													<?php $link = get_sub_field('person_linkedin_link'); ?>
													<?php if( $link ): ?>
														<h4 class="font-main person-linkedin mb1">
															<a href="<?php echo $link ?>" target="_blank" class="">
																LinkedIn
															</a>
														</h4>	
													<?php endif; ?>
													<p class="person-bio mt2">
														<?php the_sub_field('person_bio'); ?>
													</p>
												</div>
											</div>
										</div>
									</div>
									<?php $count++; ?>
								<?php endwhile; ?>
							<?php } ?>
						</div>
					<?php endif; ?>
				</div>
				<div id="team-leadership" class="team-2 mb2">
					<h3 class="section-header mb2">
						<?php the_field('leadership_heading'); ?>
					</h3>
					<?php if( have_rows('leadership') ): ?>
						<?php $count = 0; ?>
						<div class="row team-list">
							<?php for ($i=0; $i < 9; $i++) { ?>
								<?php while ( have_rows('leadership') ) : the_row(); ?>
									<div class="col-6 col-md-4 mb3 person person-loop-<?php echo $count; ?>">
										<div class="person-image">
											<a href="#" class="modal-toggle" data-modal-target="modal-person-leadership-<?php echo $count; ?>">
												<?php $image = get_sub_field('person_image');
												$image = $image['sizes']['md_square']; ?>
												<img src="<?php echo $image; ?>" >
											</a>
										</div>
										<div class="person-text">
											<h4 class="bold font-main person-name mb0 mt1">
												<a href="#" class="modal-toggle" data-modal-target="modal-person-leadership-<?php echo $count; ?>">
													<?php the_sub_field('person_name'); ?>
												</a>
											</h4>
											<h4 class="font-main person-title">
												<?php the_sub_field('person_title'); ?>
											</h4>
										</div>
									</div>
									<div class="person-modal modal modal-person scroll" id="modal-person-leadership-<?php echo $count; ?>">
										<div class="container-fluid">
											<div class="row">
												<div class="col-left pt4">
													<?php $image = get_sub_field('person_secondary_image');
													$image = $image['sizes']['md_square']; ?>
													<img class="person-secondary-image" src="<?php echo $image; ?>" >
												</div>
												<div class="col-right pt4 pb4">
													<h4 class="bold font-main person-name mb0">
														<?php the_sub_field('person_name'); ?>
													</h4>
													<h4 class="font-main person-title mb0">
														<?php the_sub_field('person_title'); ?>
													</h4>
													<?php $link = get_sub_field('person_linkedin_link'); ?>
													<?php if( $link ): ?>
														<h4 class="font-main person-linkedin mb1">
															<a href="<?php echo $link ?>" target="_blank" class="">
																LinkedIn
															</a>
														</h4>	
													<?php endif; ?>
													<p class="person-bio mt2">
														<?php the_sub_field('person_bio'); ?>
													</p>
												</div>
											</div>
										</div>
									</div>
									<?php $count++; ?>
								<?php endwhile; ?>
							<?php } ?>
						</div>
					<?php endif; ?>
				</div>
				<div id="team-team" class="team-3">
					<h3 class="section-header mb2">
						<?php the_field('team_heading'); ?>
					</h3>		
					<?php if( have_rows('team') ): ?>
						<?php $count = 0; ?>
						<div class="team-list">
							<?php for ($i=0; $i < 60; $i++) { ?>
								<?php while ( have_rows('team') ) : the_row(); ?>
									<div class="person person-small person-loop-team-<?php echo $count; ?>">
										<div class="person-image">
											<?php $image = get_sub_field('person_image');
											$image = $image['sizes']['sm_square']; ?>
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