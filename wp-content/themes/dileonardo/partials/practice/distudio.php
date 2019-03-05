<section class="block page-section spy-target" id="distudio">
	<?php 
	$background_image = get_field('background_image');
	$background_image = $background_image['sizes']['page_hero'];
	$background_image = get_bloginfo( 'stylesheet_directory' ) . '/images/wireframe3.jpg';
	$background_text = get_field('background_text'); 
	$background_text = 'DiStudio specializes in the select and lifestyle markets, offering a customized experience tailored to your project. We are nimble, seasoned and specialize in seamless collaboration to keep projects on schedule and within budget.
	<br>
	<br>
	Born from DiLeonardo, an award winning global interior architectural firm, we impart nearly 50 years of hospitality experience to elevate your guest experience.'; 
	?>
	<div class="block-background page-hero-image" style="background-image: url('<?php echo $background_image; ?>');">
	</div>
	<div class="container-fluid height-100 flex-center-vertical">
		<div class="row">
			<div class="col-right offset">
				<div id="distudio-logo" class="mb2">
					<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/distudio-logo.png';">
				</div>
				<h3 class="white mb2">
					<?php echo $background_text; ?>
				</h3>
				<a href="https://distudio.com" class="button white">Learn More About DiStudio</a>
			</div>
		</div>
	</div>
</section>