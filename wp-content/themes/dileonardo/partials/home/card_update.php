<a href="<?php the_permalink(); ?>" class="update-link">
	<?php 
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'lg', true);
	$thumb_url = $thumb_url_array[0];
	?>
	<div class="update-image" style="background-image: url('<?php echo $thumb_url; ?>');">
	</div>
	<div class="update-text">
		<h5 class="update-label">
			<?php $type = get_post_type(); ?>
			<?php if ($type == 'projects'): $type = 'Featured Projects'; endif; ?>
			<?php if ($type == 'thoughts'): $type = 'Thinking'; endif; ?>
			<?php echo $type; ?>
		</h5>
		<h4 class="update-title">
			<?php the_title(); ?>
		</h4>
	</div>
</a>