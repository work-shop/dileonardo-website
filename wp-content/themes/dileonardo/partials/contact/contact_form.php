<section class="block page-section" id="contact-form">
	<?php 
	$background_image = get_field('background_image');
	$background_image = $background_image['sizes']['page_hero'];
	$background_image = get_bloginfo( 'stylesheet_directory' ) . '/images/wireframe3.jpg';
	?>
	<div class="block-background" style="background-image: url('<?php echo $background_image; ?>');">
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-left">
				<h3 class="section-heading white mb2">
					Contact Us
				</h3>
			</div>
			<div class="col-right">
				<div class="newsletter-form">
					<form method="post">
						<div class="mb3">
							<label>Message</label>
							<div>
								<textarea></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<label>Name</label>
								<div>
									<input type="text">
								</div>
							</div>
							<div class="col">
								<label>Email</label>
								<div>
									<input type="email">
								</div>
							</div>
							<div class="col">
								<input type="submit" class="mt1" value="Send"> 
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>