<section class="block vh60" id="home-thinking">
	<?php 
	$background_image = get_field('thinking_section_background_image');
	$background_image = $background_image['sizes']['page_hero'];
	$background_text = get_field('thinking_section_text'); 
	?>
	<div class="block-background page-hero-image" style="background-image: url('<?php echo $background_image; ?>');">
	</div>
	<div class="container-fluid height-100 flex-center-vertical">
		<div class="row">
			<div class="col-left">
				<h3 class="section-heading bold white">
					<?php the_field('thinking_section_heading'); ?>
				</h3>
			</div>
			<div class="col-right">
				<h2 class="white mb1">
					<?php echo $background_text; ?>
				</h2>
				<?php $link = get_field('thinking_link'); ?>
				<?php if( $link ): ?>
					<div class="background-link">
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button white">
							<?php echo $link['title']; ?>
						</a>
					</div>	
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>