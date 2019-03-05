<section class="block page-section spy-target vhmin70" id="design-philosophy">
	<?php 
	$background_image = get_field('background_image');
	$background_image = $background_image['sizes']['page_hero'];
	$background_image = get_bloginfo( 'stylesheet_directory' ) . '/images/wireframe.jpg';
	$background_text = get_field('background_text'); 
	$background_text = 'In every space we design, we impart a distinct sense of place. Taking every opportunity to celebrate local materials and art forms, landscape and cultural history, the iconic environments we create become landmarks of regional pride.'; 
	?>
	<div class="block-background page-hero-image" style="background-image: url('<?php echo $background_image; ?>');">
	</div>
	<div class="container-fluid height-100 flex-center-vertical">
		<div class="row">
			<div class="col-right offset">
				<h4 class="bold white uppercase mb2">
					Our Design Philosophy
				</h4>
				<h2 class="white mb1">
					<?php echo $background_text; ?>
				</h2>
			</div>
		</div>
	</div>
</section>