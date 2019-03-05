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
			<div class="col-right offset">
				<h3 class="section-heading mb2">
					Contact Us
				</h3>
				<div class="newsletter-form">
					<form method="post">
						<div class="mb2">
							<label>First Name</label>
							<div>
								<input type="text">
							</div>
						</div>
						<div class="mb2">
							<label>Last Name</label>
							<div>
								<input type="text">
							</div>
						</div>
						<div class="mb2">
							<label>Email</label>
							<div>
								<input type="email">
							</div>
						</div>
						<div class="mb3">
							<label>Message</label>
							<div>
								<textarea></textarea>
							</div>
						</div>
						<input type="submit" value="Subscribe"> 
					</form>
				</div>
			</div>
		</div>
	</div>
</section>