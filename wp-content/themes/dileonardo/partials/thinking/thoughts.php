<section class="block padded" id="thoughts-grid">
	<div class="container-fluid">
		<div class="thoughts-grid">
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
				<article class="card-thought thoughts-loop-<?php echo $count; ?> <?php echo $thought_categories_classes; ?> " >
					<?php 
					$thumb_id = get_post_thumbnail_id();
					$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'lg', true);
					$thumb_url = $thumb_url_array[0];
					?>
					<div class="block-background card-thought-background-image" style="background-image: url('<?php echo $thumb_url; ?>');" >
				</div>
				<div class="container-fluid height-100 flex-center-vertical">
					<div class="row">
						<div class="col-left display-flex">
							<a href="<?php the_permalink(); ?>" class="post-link">
								<div class="card-thought-text">
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
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</div>
</section>