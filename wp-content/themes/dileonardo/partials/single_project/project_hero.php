<?php 
$hero_image = get_field('hero_image');
$hero_image = $hero_image['sizes']['page_hero'];
$hero_image = get_bloginfo( 'stylesheet_directory' ) . '/images/wireframe.jpg';
?>
<section class="block project-hero vh100" id="project-hero">
	<div class="block-background page-hero-image" style="background-image: url('<?php echo $hero_image; ?>');">
	</div>
</section>
