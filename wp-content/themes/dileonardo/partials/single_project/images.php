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
			<?php $count = 0; ?>
			<?php foreach ($images as $image): ?> 
				<div class="project-image">
					<a href="#" class="modal-toggle project-image-modal-toggle" data-modal-target="modal-project-images" id="project-image-link-<?php echo $count; ?>" data-index="<?php echo $count; ?>">
						<img src="<?php echo $image['sizes']['md']; ?>">
					</a>
				</div>
				<?php $count++; ?>
			<?php endforeach; ?>
		</div>
		<div class="modal" id="modal-project-images">
			<div class="slick slick-project-modal">
				<?php $count = 0; ?>
				<?php foreach ($images as $image): ?> 
					<div class="slick-slide" id="project-image-slide-<?php echo $count; ?>">
						<div class="slide-image-container">
							<div class="slide-image" style="background-image: url('<?php echo $image['sizes']['xl']; ?>');">
							</div>
						</div>
						<div class="slide-caption-container">
							<?php if( $image['caption'] ): ?>
								<p class="slide-caption"><?php echo $image['caption']; ?></p>
							<?php endif; ?>
						</div>
					</div>
					<?php $count++; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
