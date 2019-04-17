<section class="block padded-bottom thought-intro single-intro <?php if( !get_field('show_hero') ) { ?> no-hero <?php } ?>" id="single-intro">
	<div class="single-title-container container-fluid bg-white">
		<div class="row mb4 single-title-row">
			<div class="col-left">
				<h1 class="single-title">
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row single-intro-row">
			<div class="col-left">
				<h4 class="article-author">
					<?php the_field('author'); ?>
				</h4>
				<h4 class="article-date">
					<?php the_field('article_date'); ?>
				</h4>
				<div class="single-categories">
					<?php 
					$terms = get_the_terms( $post->ID , array( 'news-categories') );
					// init counter
					$i = 1;
					if($terms){
						foreach ( $terms as $term ) {
							$term_link = get_term_link( $term, array( 'news-categories') );
							if( is_wp_error( $term_link ) )
								continue;
							?>
							<a class="news-category-label category-label" href="/news/?category=filter-<?php echo $term->slug; ?>">
								<?php 
								echo $term->name;
								echo ($i < count($terms))? ", " : "";
								$i++;
								?>
							</a> 
						<?php } ?>
					<?php } ?>
				</div>
			</div>
			<div class="col-right">
				<div class="row mb3">
					<div class="col-8">
						<h3 class="single-intro-text">
							<?php the_field('excerpt'); ?>
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-8">
						<p class="article-intro-paragraph">
							<?php the_field('introduction_paragraph'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>