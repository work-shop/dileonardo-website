<section class="block single-intro project-intro" id="project-intro">
	<div class="single-title-container container-fluid bg-white">
		<div class="row mb4 single-title-row">
			<div class="col">
				<h1 class="single-title project-title">
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row project-intro-row single-intro-row">
			<div class="col-left">
				<?php if( get_field('project_location') ){ ?>
					<h4 class="project-location">
						<?php the_field('project_location'); ?>
					</h4>
				<?php } ?>
				<?php if( get_field('project_client') ){ ?>
					<h4 class="project-client">
						<?php the_field('project_client'); ?>
					</h4>
				<?php } ?>
				<div class="project-categories single-categories">
					<?php 
					$terms = get_the_terms( $post->ID , array( 'project-categories') );
					// init counter
					$i = 1;
					foreach ( $terms as $term ) {
						$term_link = get_term_link( $term, array( 'project-categories') );
						if( is_wp_error( $term_link ) )
							continue;
						?>
						<a class="project-category-label category-label" href="/projects/?type=<?php echo $term->slug; ?>">
							<?php 
							echo $term->name;
							echo ($i < count($terms))? ", " : "";
							$i++;
							?>
						</a> 
					<?php } ?>
				</div>
			</div>
			<div class="col-right">
				<h3 class="single-intro-text project-intro-text">
					<?php the_field('project_introduction'); ?>
				</h3>
			</div>
		</div>
	</div>
</section>