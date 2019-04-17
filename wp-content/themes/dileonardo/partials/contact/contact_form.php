<section class="block padded" id="contact-form">
	<?php 
	$background_image = get_field('contact_form_background_image');
	$background_image = $background_image['sizes']['xl'];
	?>
	<div class="block-background mask-light" style="background-image: url('<?php echo $background_image; ?>');">
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-left">
				<h3 class="section-heading mb2">
					<span class="brand-underline">
						Contact Us
					</span>
				</h3>
			</div>
			<div class="col-right">
				<div id="contact-form">
					<?php gravity_form( 1, false, false, false, '', true, 1); ?>		
				</div>	
			</div>
		</div>
	</div>
</section>