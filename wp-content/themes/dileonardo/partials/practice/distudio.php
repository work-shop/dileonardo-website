<section class="block bg-light <?php if( is_page(11) ){ ?> page-section <?php } else { ?> padded <?php } ?> spy-target" id="distudio">
	<?php 
	$background_image = get_field('distudio_background_image',11);
	$background_image = $background_image['sizes']['xl'];
	$background_text = get_field('distudio_description',11); 
	?>
	<div class="block-background mask-light hidden" style="background-image: url('<?php echo $background_image; ?>');">
	</div>
	<div class="container-fluid height-100 flex-center-vertical">
		<div class="row">
			<?php if( is_page(11) === false ){ ?>
				<div class="col-left">
					<div id="distudio-logo" class="mb2 distudio-logo-left">
						<?php $image = get_field('distudio_logo',11); ?>
						<img src="<?php echo $image['sizes']['lg'];?>">
					</div>
				</div>
			<?php } ?>
			<div class="col-right <?php if( is_page(11) ){ ?> offset <?php } ?>">
				<?php if( is_page(11) ){ ?> 
					<div id="distudio-logo" class="mb2">
						<?php $image = get_field('distudio_logo',11); ?>
						<img src="<?php echo $image['sizes']['lg'];?>">
					</div>
				<?php } ?>
				<h3 class="distudio mb2">
					<?php echo $background_text; ?>
				</h3>
				<?php $link = get_field('distudio_link',11); ?>
				<?php if( $link ): ?>
					<div class="distudio-link">
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button distudio">
							<?php echo $link['title']; ?>
						</a>
					</div>	
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>