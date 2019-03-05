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
					<article class="row card-thought align-items-stretch thoughts-loop-<?php echo $count; ?> <?php echo $thought_categories_classes; ?> " >
						<div class="col-7 card-thought-left bg-brand-dark">
							<a href="<?php the_permalink(); ?>" class="post-link">
								<div class="card-thought-text ">
									<h2 class="card-thought-title white">
										<?php the_title(); ?>
									</h2>
									<h4 class="card-thought-author white">
										By Lia DiLeonardo
									</h4>
									<h3 class="card-thought-excerpt white">
										Veniam nulla esse consequat dolor consequat duis eu officia laboris in tempor ut. Veniam nulla esse consequat dolor consequat duis eu officia laboris in tempor ut.
									</h3>
								</div>
							</a>
						</div>
						<div class="col-5 card-thought-right">
							<a href="<?php the_permalink(); ?>" class="post-link">
								<?php if ( has_post_thumbnail() ) { ?>
									<?php the_post_thumbnail('md'); ?>
								<?php } else { ?>
									<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/wireframe.jpg" />
								<?php } ?>
							</a>
						</div>
						<div class="card-thought-background-image" style="background-image: url('<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/wireframe2.jpg');">
						</div>
					</article>
					<?php $count++; ?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php  } ?>
		</div>
	</div>
</section>