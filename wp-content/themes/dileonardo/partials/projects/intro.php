<section class="block page-intro" id="page-intro">
	<div class="container-fluid">
		<div class="row mb2">
			<div class="col">
				<h1 class="page-title">
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
		<?php if( get_field('page_introduction_text') ){ ?>
			<div class="row">
				<div class="col-12 col-md-8 col-lg-7">
					<h3 class="page-intro-text">
						<?php the_field('page_introduction_text'); ?>
					</h3>
				</div>
			</div>
		<?php } ?>
	</div>
</section>