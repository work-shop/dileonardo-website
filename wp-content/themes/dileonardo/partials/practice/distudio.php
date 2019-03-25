<section class="block page-section vhmin85 spy-target" id="distudio">
	<?php 
	$background_image = get_field('distudio_background_image');
	$background_image = $background_image['sizes']['xl'];
	//$background_image = get_bloginfo( 'stylesheet_directory' ) . '/images/wireframe3.jpg';
	$background_text = get_field('distudio_description'); 
	?>
	<div class="block-background mask-dark" style="background-image: url('<?php echo $background_image; ?>');">
	</div>
	<div class="container-fluid height-100 flex-center-vertical">
		<div class="row">
			<div class="col-right offset">
				<div id="distudio-logo" class="mb2">
					<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/distudio-logo.png';">
				</div>
				<?php if( get_field('distudio_heading') ){ ?>
					<h4 class="bold white uppercase mb2">
						<?php the_field('distudio_heading'); ?>
					</h4>
				<?php } ?>
				<h3 class="white mb2">
					<?php echo $background_text; ?>
				</h3>
				<?php $link = get_field('distudio_link'); ?>
				<?php if( $link ): ?>
					<div class="distudio-link">
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button white">
							<?php echo $link['title']; ?>
						</a>
					</div>	
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>