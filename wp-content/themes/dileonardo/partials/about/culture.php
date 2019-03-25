<?php
$slides = get_field('culture_slideshow');
?>
<section class="block slideshow spy-target" id="culture">
	<?php if( $slides ): ?>
		<div class="slick slick-default">
			<?php foreach ($slides as $image): ?> 
				<div class="slick-slide">
					<div class="slide-image-container">
						<div class="slide-image vh100" style="background-image: url('<?php echo $image['sizes']['page_hero']; ?>');">
						</div>
					</div>
					<div class="slide-caption-container container-fluid">
						<div class="row">
							<div class="col-right offset">
								<?php if( $image['caption'] ): ?>
									<h2 class="slide-caption bold"><?php echo $image['caption']; ?></h2>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</section>