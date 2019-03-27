<section class="block padded" id="thoughts-grid">
	<div class="container-fluid">
		<div class="thoughts-grid">
			<?php for ($i=0; $i < 1; $i++) { ?>
				<?php 
				$count = 0;
				$thoughts_query = new WP_Query( array(
					'post_type' => 'thoughts',
					'posts_per_page' => '-1'
				) );
				while ( $thoughts_query->have_posts() ) : $thoughts_query->the_post(); ?>
					<?php 
					$thought_categories = wp_get_post_terms($post->ID, 'thought-categories');
					$thought_categories_classes = '';
					if( $thought_categories ):
						foreach ($thought_categories as $term) :
							$thought_categories_classes .= 'filter-category-' . $term->slug . ' ';
						endforeach;
					endif;
					?>
					<?php if(false){ ?>
						<article class="card-thought align-items-stretch-broken vh80 thoughts-loop-<?php echo $count; ?> <?php echo $thought_categories_classes; ?> " >
							<div class="block-background card-thought-background-image" >
								<?php if ( has_post_thumbnail() ) { ?>
									<?php the_post_thumbnail('md'); ?>
								<?php } else { ?>
									<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/default.png" />
								<?php } ?>
							</div>
							<div class="container-fluid height-100 flex-center-vertical">
								<div class="row">
									<div class="col-left">
										<a href="<?php the_permalink(); ?>" class="post-link">
											<div class="card-thought-text ">
												<h2 class="card-thought-title white">
													<span>
														<?php the_title(); ?>
													</span>
												</h2>
											</div>
										</a>
									</div>
									<div class="col-right card-thought-right">
										<a href="<?php the_permalink(); ?>" class="post-link">
											<h3 class="card-thought-excerpt white">
												<?php the_field('excerpt'); ?>
											</h3>
											<h4 class="card-thought-author white">
												By <?php the_field('author'); ?>
											</h4>
										</a>
									</div>
								</div>
							</div>
						</article>
						<?php $count++; ?>
					<?php } ?>
					<?php if( true ){ ?>
						<article class="card-thought align-items-stretch-broken thoughts-loop-<?php echo $count; ?> <?php echo $thought_categories_classes; ?> " >
							<div class="card-thought-image row vh50 crop mb1">
								<div class="col">
									<?php if ( has_post_thumbnail() ) { ?>
										<?php the_post_thumbnail('lg_cropped'); ?>
									<?php } else { ?>
										<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/default.png" />
									<?php } ?>
								</div>
							</div>
							<div class="row mb2">
								<div class="col-left">
									<a href="<?php the_permalink(); ?>" class="post-link">
										<div class="card-thought-text ">
											<h2 class="card-thought-title">
												<span>
													<?php the_title(); ?>
												</span>
											</h2>
										</div>
									</a>
								</div>
								<div class="col-right card-thought-right">
									<a href="<?php the_permalink(); ?>" class="post-link">
										<h3 class="card-thought-excerpt">
											<?php the_field('excerpt'); ?>
										</h3>
										<h4 class="card-thought-author">
											By <?php the_field('author'); ?>
										</h4>
									</a>
								</div>
							</div>

						</article>
						<?php $count++; ?>
					<?php } ?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php  } ?>
		</div>
	</div>
</section>