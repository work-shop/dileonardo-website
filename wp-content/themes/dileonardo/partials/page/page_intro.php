<section class="block page-intro" id="page-intro">
	<div class="container-fluid">
		<div class="row mb4">
			<div class="col">
				<h1 class="page-title">
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
		<?php if( get_field('page_introduction_text') ){ ?>
			<div class="row">
				<div class="col-12 col-md-8 col-lg-7">
					<h2 class="page-section-intro-text">
						<?php the_field('page_introduction_text'); ?>
					</h2>
					<?php if( is_page(23)){ ?>
						<h4 class="page-section-intro-text-2">
							<?php the_field('page_introduction_text_2'); ?>
						</h4>
					<?php } ?>
				</div>
			</div>
		<?php } ?>
	</div>
</section>