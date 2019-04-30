<?php 
$hero_type = get_field('hero_type'); 
?>
<section class="block page-hero spy-target spy-first vh100" id="home-hero">
	<?php if( $hero_type === 'slideshow' ){ ?>
		<?php
		$slides = get_field('hero_slideshow');
		?>	
		<?php if( $slides ): ?>
			<div class="slick slick-home-hero">
				<?php foreach ($slides as $image): ?> 
					<div class="slick-slide">
						<div class="slide-image-container">
							<div class="slide-image" style="background-image: url('<?php echo $image['sizes']['page_hero']; ?>');">
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	<?php } else if( $hero_type === 'video' ){ ?>
		<video muted autoplay playsinline loop class="" id="home-hero-video">
			<source src="<?php bloginfo('template_directory'); ?>/images/video.mp4" type="video/mp4">
			</video>
		</div>
	<?php } else{ ?>
		<?php 
		$hero_image = get_field('hero_image');
		$hero_image = $hero_image['sizes']['xl_cropped'];
		?>
		<div class="home-hero-image-container">
			<div class="block-background page-hero-image" style="background-image: url('<?php echo $hero_image; ?>');">
			</div>
		</div>
	<?php } ?>
	<div id="scrolly">
		<div class="container-fluid">
			<div class="row">
				<div class="col-right offset">
					<a href="#home-intro" class="jump-home" id="scrolly-link">
						<?php get_template_part('partials/scrolly' ); ?>
					</a>
				</div>
			</div>
		</div>	
	</div>
</section>