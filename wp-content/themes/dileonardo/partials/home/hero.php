<?php 
$hero_image = get_field('hero_image');
$hero_image = $hero_image['sizes']['page_hero'];
$hero_image = get_bloginfo( 'stylesheet_directory' ) . '/images/wireframe.jpg';
$hero_text = get_field('hero_text'); 
?>
<section class="block page-hero vh100" id="home-hero">
	<div class="block-background page-hero-image" style="background-image: url('<?php echo $hero_image; ?>');">
	</div>
	<div id="scrolly">
		<div class="container-fluid">
			<div class="row">
				<div class="col-left">
					<a href="#home-intro" class="jump">
						<span class="icon large white" data-icon="”">
						</span>
					</a>
				</div>
			</div>
		</div>	
	</div>
</section>
