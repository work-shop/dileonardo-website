<?php if(true){ ?>
	<section class="block padded-more spy-target" id="home-news">
		<div class="container-fluid">
			<div class="row" id="news">
				<div class="col-left">
					<h3 class="section-heading medium">
						<span class="brand-underline medium"><?php the_field('home_news_heading'); ?></span>
					</h3>
					<div id="news-link" class="">
						<a href="/news" class="">
							See All
						</a>
					</div>
				</div>
				<div class="col-right">
					<div class="row">
						<?php for ($i=0; $i < 1; $i++) { ?>
							<?php 
							$count = 0;
							$news_query = new WP_Query( array(
								'post_type' => 'news',
								'posts_per_page' => '2',
								'tax_query' => array(
									array (
										'taxonomy' => 'news-categories',
										'field' => 'slug',
										'terms' => 'featured',
									)
								),
							) );
							while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
								<?php get_template_part('partials/news/card_news' ); ?>
								<?php $count++; ?>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php  } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php  } ?>