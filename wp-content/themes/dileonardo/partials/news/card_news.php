<?php 
$news_categories = wp_get_post_terms($post->ID, 'news-categories');
$news_categories_classes = '';
if( $news_categories ):
	foreach ($news_categories as $term) :
		$news_categories_classes .= 'filter-category-' . $term->slug . ' ';
	endforeach;
endif;
?><article class="card card-news col-6 <?php if( is_page(25) ){ ?> filter-target <?php } ?> news-loop-<?php echo $count; ?> <?php echo $news_categories_classes; ?>" >
	<div class="card-news-image">
		<a href="<?php the_permalink(); ?>" class="post-link">
			<?php if ( has_post_thumbnail() ) { ?>
				<?php the_post_thumbnail('md_cropped'); ?>
			<?php } else { ?>
				<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/wireframe.jpg" />
			<?php } ?>
		</a>
	</div>
	<div class="card-news-text">
		<a href="<?php the_permalink(); ?>" class="post-link">
			<h4 class="card-news-date">
				<?php the_field('article_date') ?>
			</h4>
			<h3 class="card-news-title">
				<?php the_title(); ?>
			</h3>
			<?php if(false){ ?>

				<?php if( get_field('author') ){ ?>
					<h4 class="card-news-author mb1">
						By <?php the_field('author') ?>
					</h4>
				<?php } ?>
			<?php } ?>
			<h4 class="card-news-excerpt">
				<?php the_field('excerpt'); ?>			
			</h4>
		</a>
	</div>
</article>