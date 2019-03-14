<section class="block padded bg-dark" id="home-intro">
	<div class="container-fluid pt4 pb4">
		<div class="row">
			<div class="col-right offset">
				<h2 class="bold mb2 white" id="intro-text">
					<?php the_field('tagline_text'); ?>
				</h2>
				<?php $link = get_field('tagline_link'); ?>
				<?php if( $link ): ?>
					<div id="intro-link">
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button white">
							<?php echo $link['title']; ?>
						</a>
					</div>	
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>