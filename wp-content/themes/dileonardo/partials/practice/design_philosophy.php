<section class="block page-section spy-target vh100" id="design-philosophy">
	<?php 
	$background_image = get_field('design_philosophy_background_image');
	$background_image = $background_image['sizes']['xl'];
	//$background_image = get_bloginfo( 'stylesheet_directory' ) . '/images/wireframe.jpg';
	$background_text = get_field('design_philosophy_statement'); 
	?>
	<div class="block-background mask-dark-broken" style="background-image: url('<?php echo $background_image; ?>');">
	</div>
	<div class="container-fluid height-100 flex-center-vertical">
		<div class="row row-100">
			<div class="col-right offset">
				<h3 class="white mb2">
					<?php the_field('design_philosophy_heading'); ?>
				</h3>
				<h2 class="white mb1">
					<?php echo $background_text; ?>
				</h2>
			</div>
		</div>
	</div>
</section>