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
			<div id="grid-project">
				<?php $count = 0; ?>
				<?php foreach ($images as $image): ?> 
					<div class="project-image grid-item">
						<a href="#" class="modal-toggle project-image-modal-toggle" data-modal-target="modal-project-images" id="project-image-link-<?php echo $count; ?>" data-index="<?php echo $count; ?>">
							<?php 
							$img_url_xs = $image['sizes']['xs']; 
							$img_url_sm = $image['sizes']['sm']; 
							$img_url_md = $image['sizes']['md']; 
							?>
							<div class="progressive replace" 
							data-srcset="
							<?php echo $img_url_xs; ?> 300w,
							<?php echo $img_url_sm; ?> 768w,
							<?php echo $img_url_md; ?> 1024w
							"
							data-sizes="
							(max-width: 480px) 180px,
							(max-width: 1200px) 768px,
							1024px
							"
							data-src="<?php echo $img_url_md; ?>"
							>
								<img src="<?php echo $image['sizes']['progressive']; ?>" class="preview">
							</div>
						</a>
					</div>
					<?php $count++; ?>
				<?php endforeach; ?>
				<div class="grid-sizer"></div>
				<div class="gutter-sizer"></div>
			</div>
		</div>
		<div class="modal" id="modal-project-images">
			<div class="slick slick-project-modal">
				<?php $count = 0; ?>
				<?php foreach ($images as $image): ?> 
					<div class="slick-slide" id="project-image-slide-<?php echo $count; ?>">
						<div class="slide-image-container">
							<div class="slide-image progressive-background" data-src="<?php echo $image['sizes']['xl']; ?>">
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
