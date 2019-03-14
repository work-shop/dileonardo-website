<section class="block padded bg-light" id="home-ne">
	<div class="container-fluid">
		<div class="row" id="news">
			<div class="col-left">
				<h3 class="section-heading bold">
					<?php the_field('news_heading'); ?>
				</h3>
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