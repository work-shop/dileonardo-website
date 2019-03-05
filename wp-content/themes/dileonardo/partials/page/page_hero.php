<?php //TURN OFF TRUE OVERRIDE BELOW ?>
<?php if( get_field('show_hero') || true ): ?>
	<?php 
	$hero_image = get_field('hero_image');
	$hero_image = $hero_image['sizes']['page_hero'];
	$hero_image = get_bloginfo( 'stylesheet_directory' ) . '/images/wireframe2.jpg';
	?>
	<section class="block page-hero" id="page-hero">
		<div class="block-background page-hero-image" style="background-image: url('<?php echo $hero_image; ?>');">
		</div>
	</section>
<?php endif; ?>