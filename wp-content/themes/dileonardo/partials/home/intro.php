<section class="block spy-target vh100 padded" id="home-intro">
	<div class="container-fluid height-100">
		<div class="row flex-center-vertical height-100">
			<div class="col-right offset" id="tagline">
				<h2 class="mb2 medium" id="tagline-text">
					<?php the_field('tagline_text'); ?>
				</h2>
				<?php $link = get_field('tagline_link'); ?>
				<?php $link_2 = get_field('tagline_link_2'); ?>
				<?php if( $link || $link_2 ): ?>
					<div id="intro-link">
						<?php if($link){ ?>
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button medium mr4">
								<?php echo $link['title']; ?>
							</a>
						<?php } ?>
						<?php if($link_2){ ?>
							<a href="<?php echo $link_2['url']; ?>" target="<?php echo $link_2['target']; ?>" class="button medium">
								<?php echo $link_2['title']; ?>
							</a>
						<?php } ?>
					</div>	
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
