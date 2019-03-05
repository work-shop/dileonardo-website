<section class="block" id="news-grid">
	<div class="container-fluid">
		<div class="row">
			<div class="col-right offset">
				<div class="news-grid row">
					<?php for ($i=0; $i < 5; $i++) { ?>
						<?php 
						$count = 0;
						$news_query = new WP_Query( array(
							'post_type' => 'news',
							'posts_per_page' => '-1'
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