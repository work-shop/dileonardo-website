<section class="block spy-target vh70" id="apply">
	<?php 
	$background_image = get_field('bamboo_section_background_image');
	$background_image = $background_image['sizes']['xl'];
	$background_text = get_field('bamboo_section_text'); 
	?>
	<div class="block-background mask-dark" style="background-image: url('<?php echo $background_image; ?>');">
	</div>
	<div class="container-fluid height-100 flex-center-vertical">
		<div class="row">
			<div class="col-8 offset-4">
				<h2 class="white mb1">
					<?php echo $background_text; ?>
				</h2>
				<?php $link = get_field('bamboo_link'); ?>
				<?php if( $link ): ?>
					<div class="link-container">
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button white">
							<?php echo $link['title']; ?>
						</a>
					</div>	
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>