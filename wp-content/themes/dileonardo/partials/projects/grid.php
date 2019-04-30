<section class="block padded-bottom grid-loading" id="projects-grid">
	<div id="grid-loading" class="grid-loading"></div>
	<div id="grid" class="grid grid-projects close-filter-menus">
		<?php //if(false){ ?>
			<?php for ($i=0; $i < 1; $i++) { ?>
				<?php 
				$count = 0;
				$project_query = new WP_Query( array(
					'post_type' => 'projects',
					'posts_per_page' => '-1'
				) );
				while ( $project_query->have_posts() ) : $project_query->the_post(); ?>
					<?php 
					$project_categories = wp_get_post_terms($post->ID, 'project-categories');
					$project_categories_classes = '';
					if( $project_categories ):
						foreach ($project_categories as $term) :
							$project_categories_classes .= 'filter-category-' . $term->slug . ' ';
						endforeach;
					endif;
					$project_regions = wp_get_post_terms($post->ID, 'project-regions');
					$project_regions_classes = '';
					if( $project_regions ):
						foreach ($project_regions as $term) :
							$project_regions_classes .= 'filter-region-' . $term->slug . ' ';
						endforeach;
					endif;
					?>
					<article class="card card-project card-project-grid grid-item project-loop-<?php echo $count; ?> filter-target <?php echo $project_categories_classes; ?> <?php echo $project_regions_classes; ?>" data-sort="<?php if( has_term('featured','project-categories')){ echo '1'; } else { echo '2'; }?>">
						<a href="<?php the_permalink(); ?>" class="post-link">
							<?php if ( has_post_thumbnail() ) { ?>
								<?php the_post_thumbnail('md'); ?>
							<?php } else { ?>
								<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/default.png" />
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
		<?php  //} ?>
		<div class="grid-sizer"></div>
		<div class="gutter-sizer"></div>
	</div>
</section>