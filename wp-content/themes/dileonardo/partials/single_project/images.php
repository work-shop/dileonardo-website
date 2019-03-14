<?php
$images = get_field('project_images');
?>
<?php if( $images ): ?>
	<section class="block padded-less-top padded-bottom" id="project-images">
		<div class="container-fluid project-images-title">
			<div class="row">
				<div class="col">
					<h4 class=""><?php the_title(); ?> Images</h4>
				</div>
			</div>
		</div>
		<div class="project-images-container container-fluid">
			<?php for ($i=0; $i < 2; $i++) { ?>
				<?php foreach ($images as $image): ?> 
					<div class="project-image">
						<a href="#" class="modal-toggle" data-modal-target="modal-project-images">
							<img src="<?php echo $image['sizes']['md']; ?>">
						</a>
					</div>
				<?php endforeach; ?>
			<?php } ?>
		</div>
		<div class="modal" id="modal-project-images">
			<div class="slick slick-project-modal vh100">
				<?php foreach ($images as $image): ?> 
					<div class="slick-slide vh100">
						<div class="slide-image-container">
							<div class="slide-image vh100" style="background-image: url('<?php echo $image['sizes']['xl']; ?>');">
							</div>
						</div>
						<div class="slide-caption-container">
							<?php if( $image['caption'] ): ?>
								<p class="slide-caption"><?php echo $image['caption']; ?></p>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
