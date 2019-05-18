<section class="block padded-bottom vhmin100" id="news-grid">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<div id="grid-loading" class=""></div>
				<div class="news-grid row <?php if( $_GET['category'] ){ ?> news-grid-loading <?php } ?>">
					<?php if( !$_GET['category'] ){ ?>
						<?php 
						$count = 0;
						$news_query = new WP_Query( array(
							'post_type' => 'news',
							'posts_per_page' => '8'
						) );
						while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
							<?php 
							$news_categories = wp_get_post_terms($post->ID, 'news-categories');
							$news_categories_classes = '';
							if( $news_categories ):
								foreach ($news_categories as $term) :
									$news_categories_classes .= 'filter-category-' . $term->slug . ' ';
								endforeach;
							endif;
							?>
							<article class="card card-news col-md-6 <?php echo $news_categories_classes; ?>">
								<a href="<?php the_permalink(); ?>" class="post-link">
									<div class="card-news-image">
										<?php if ( has_post_thumbnail() ) { ?>
											<?php 
											$featured_img_url_sm = get_the_post_thumbnail_url(get_the_ID(),'sm_cropped'); 
											$featured_img_url_tiny = get_the_post_thumbnail_url(get_the_ID(),'progressive_cropped'); 
											?>
											<div class="progressive replace" data-src="<?php echo $featured_img_url_sm; ?>">
												<img src="<?php echo $featured_img_url_tiny; ?>" class="preview">
											</div>
										<?php } else { ?>
											<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/default.png" />
										<?php } ?>
									</div>
									<div class="card-news-text">
										<?php if( get_field('article_date')){ ?>
											<h4 class="card-news-date">
												<?php the_field('article_date') ?>
											</h4>
										<?php } ?>
										<h3 class="card-news-title">
											<?php the_title(); ?>
										</h3>
									</div>
								</a>
							</article>
							<?php $count++; ?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>