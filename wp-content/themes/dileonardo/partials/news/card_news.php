<?php 
$news_categories = wp_get_post_terms($post->ID, 'news-categories');
$news_categories_classes = '';
if( $news_categories ):
	foreach ($news_categories as $term) :
		$news_categories_classes .= 'filter-category-' . $term->slug . ' ';
	endforeach;
endif;
?><article class="col-6 card card-news <?php if( is_page(25) ){ ?> filter-target <?php } ?> news-loop-<?php echo $count; ?> <?php echo $news_categories_classes; ?>" >
	<div class="card-news-image">
		<a href="<?php the_permalink(); ?>" class="post-link">
			<?php if ( has_post_thumbnail() ) { ?>
				<?php the_post_thumbnail('md'); ?>
			<?php } else { ?>
				<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/wireframe.jpg" />
			<?php } ?>
		</a>
	</div>
	<div class="card-news-text">
		<a href="<?php the_permalink(); ?>" class="post-link">
			<h3 class="card-news-title mt1">
				<?php the_title(); ?>
			</h3>
			<h4 class="card-news-date">
				January 18, 2019
			</h4>
			<h4 class="card-news-author mb1">
				By Lia DiLeonardo
			</h4>
			<h4 class="card-news-excerpt">
				Veniam nulla esse consequat dolor consequat duis eu officia laboris in tempor ut. Veniam nulla esse consequat dolor consequat duis eu officia laboris.
			</h4>
		</a>
	</div>
</article>