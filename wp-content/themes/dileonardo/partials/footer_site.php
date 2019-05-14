<footer id="footer" class="block pb1 pt6 bg-medium">
	<?php 
	$background_image = get_field('footer_background_image','option');
	$background_image = $background_image['sizes']['xl'];
	?>
	<div class="footer-background" style="background-image: url('<?php echo $background_image; ?>');">
	</div>
	<div class="container-fluid mt3">
		<div class="row mb9 row-100 footer-1">
			<div class="col-sm-12 col-md-3 footer-col footer-col-1">
				<?php if( have_rows('footer_column_1_links','option') ): ?>
					<ul class="footer-links">
						<?php  while ( have_rows('footer_column_1_links','option') ) : the_row(); ?>
							<li>
								<?php $link = get_sub_field('link'); ?>
								<?php if( $link ): ?>
									<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="">
										<?php echo $link['title']; ?>
									</a>
								<?php endif; ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-3 footer-col footer-col-2">
				<?php if( have_rows('footer_column_2_links','option') ): ?>
					<ul class="footer-links">
						<?php  while ( have_rows('footer_column_2_links','option') ) : the_row(); ?>
							<li>
								<?php $link = get_sub_field('link'); ?>
								<?php if( $link ): ?>
									<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="">
										<?php echo $link['title']; ?>
									</a>
								<?php endif; ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-3 footer-col footer-col-3">
				<ul class="footer-links">
					<?php if( have_rows('footer_column_3_links','option') ): ?>
						<?php  while ( have_rows('footer_column_3_links','option') ) : the_row(); ?>
							<li>
								<?php $link = get_sub_field('link'); ?>
								<?php if( $link ): ?>
									<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="">
										<?php echo $link['title']; ?>
									</a>
								<?php endif; ?>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>
					<li class="footer-distudio-button">
						<a href="https://distudio.com" target="_blank" class="footer-distudio">
							<img src="<?php bloginfo( 'template_directory' );?>/images/distudio-logo.png" id="footer-distudio-logo-small"> DiStudio
						</a>
					</li>
					<li class="footer-social-links">
						<a href="https://www.facebook.com/dileonardo/" target="_blank">
							<img src="<?php bloginfo( 'template_directory' );?>/images/fb.png" class="social-icon">
						</a> 
						<a href="https://linkedin.com/dileonardo" target="_blank">
							<img src="<?php bloginfo( 'template_directory' );?>/images/in.png" class="social-icon">
						</a>
						<a href="https://www.instagram.com/dileonardo/" target="_blank">
							<img src="<?php bloginfo( 'template_directory' );?>/images/ig.png" class="social-icon">
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row row-100 footer-2">
			<div class="col-sm-12 col-md-6 col-lg-9 footer-locations-col">
				<?php if( have_rows('footer_locations','option') ): ?>
					<ul class="footer-locations">
						<?php  while ( have_rows('footer_locations','option') ) : the_row(); ?>
							<li>
								<a href="/contact" target="" class="">
									<?php the_sub_field('location'); ?>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3 site-credit-container justify-content-end">
				<h4 class="white site-credit">
					© <?php echo date("Y"); ?> DiLeonardo. All rights reserved.<br>
					<a href="http://workshop.co" target="_blank" class="ml2">
						Site by Work-Shop Design Studio
					</a>
				</h4>
			</div>
		</div>
	</div>
</footer>