<?php 
$hero_type = get_field('hero_type'); 
?>
<section class="block page-hero vh100" id="home-hero">
	<?php if( $hero_type === 'slideshow' ){ ?>
		<?php
		$slides = get_field('hero_slideshow');
		?>	
		<?php if( $slides ): ?>
			<div class="slick slick-home-hero">
				<?php foreach ($slides as $image): ?> 
					<div class="slick-slide">
						<div class="slide-image-container">
							<div class="slide-image vh100" style="background-image: url('<?php echo $image['sizes']['page_hero']; ?>');">
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
		$hero_image = $hero_image['sizes']['page_hero'];
		?>
		<div class="block-background page-hero-image" style="background-image: url('<?php echo $hero_image; ?>');">
		</div>
	<?php } ?>
	<div id="scrolly">
		<div class="container-fluid">
			<div class="row">
				<div class="col-left">
					<a href="#home-intro" class="jump">
						<span class="icon large white" data-icon="”">
						</span>
					</a>
				</div>
			</div>
		</div>	
	</div>
</section>