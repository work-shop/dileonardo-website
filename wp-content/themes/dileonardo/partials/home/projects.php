<section class="block padded-top bg-light" id="home-projects">
	<div class="container-fluid">
		<div class="row mb2">
			<div class="col">
				<h3 class="section-heading bold">
					Global Excellence
				</h3>
			</div>
		</div>
		<div class="project-grid">
			<?php for ($i=0; $i < 2; $i++) { ?>
				<?php 
				$count = 0;
				$project_query = new WP_Query( array(
					'post_type' => 'projects',
					'posts_per_page' => '3',
					// 'tax_query' => array(
					// 	array (
					// 		'taxonomy' => 'project_categories',
					// 		'field' => 'slug',
					// 		'terms' => 'featured',
					// 	)
					// ),
				) );
				while ( $project_query->have_posts() ) : $project_query->the_post(); ?>

					<article class="card card-project card-project-featured project-loop-<?php echo $count; ?>">
						<a href="<?php the_permalink(); ?>" class="post-link">
							<?php if ( has_post_thumbnail() ) { ?>
								<?php the_post_thumbnail('md'); ?>
							<?php } else { ?>
								<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/wireframe.jpg" />
							<?php } ?>
							<h3 class="card-project-title">
								<?php the_title(); ?>
							</h3>
						</a>
					</article>
					<?php $count++; ?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php  } ?>
		</div>
	</div>
</section>