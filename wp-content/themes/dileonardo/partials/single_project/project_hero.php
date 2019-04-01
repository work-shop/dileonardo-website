<?php if( get_field('show_hero') ){ ?>
<?php 
$hero_image = get_field('hero_image');
$hero_image = $hero_image['sizes']['xl_cropped'];
?>
<section class="block project-hero vh100" id="project-hero">
	<div class="block-background page-hero-image" style="background-image: url('<?php echo $hero_image; ?>');">
	</div>
</section>
<?php } ?>
