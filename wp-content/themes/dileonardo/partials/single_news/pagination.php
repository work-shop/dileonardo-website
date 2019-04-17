<section class="block padded-less pagination-previous-next" id="pagination">
	<div class="container-fluid">
		<div class="row">
			<div class="col-6 pagination-previous">
				<?php //ignore the names of wordpress previous and next, we're doing it the opposite way ?>
				<?php $next_post = get_next_post(); //var_dump($next_post) ?>
				<?php if($next_post){ ?>
					<?php 
					global $post; 
					$ID = $next_post->ID;
					$post = get_post( $ID, OBJECT );
					setup_postdata( $post ); ?>
					<div class="row">
						<div class="col-1 d-flex justify-content-start align-items-center">
							<a href="<?php the_permalink(); ?>">
								<span class="icon pagination-icon" data-icon="‘"></span>
							</a>
						</div>
						<div class="col-11 d-flex justify-content-start align-items-center">
							<a href="<?php the_permalink(); ?>" class="pagination-text">
								<span class="pagination-text-label">Previous Story</span>
								<br>
								<?php the_title(); ?>							
							</a>
						</div>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php } ?>
			</div>
			<div class="col-6 pagination-next"> 
				<?php $previous_post = get_previous_post(); //var_dump($previous_post) ?>
				<?php if($previous_post){ ?>
					<?php 
					global $post; 
					$ID = $previous_post->ID;
					$post = get_post( $ID, OBJECT );
					setup_postdata( $post ); ?>
					<div class="row">
						<div class="col-11 d-flex justify-content-end align-items-center">
							<a href="<?php the_permalink(); ?>" class="pagination-text">
								<span class="pagination-text-label">Next Story</span>
								<br>
								<?php the_title(); ?>							
							</a>
						</div>
						<div class="col-1 d-flex justify-content-end align-items-center">
							<a href="<?php the_permalink(); ?>">
								<span class="icon pagination-icon" data-icon="—"></span>
							</a>
						</div>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php } ?>	
			</div>
		</div>
	</div>
</section>