<?php if( get_field('show_hero') ){ ?>
<?php 
$hero_image =  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'xl_cropped'); 
?>
<section class="block project-hero vh100" id="project-hero">
	<div class="block-background page-hero-image" style="background-image: url('<?php echo $hero_image; ?>');">
	</div>
</section>
<?php } ?>
