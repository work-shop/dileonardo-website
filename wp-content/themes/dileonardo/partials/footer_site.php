<footer id="footer" class="block pb1 pt5 bg-medium">
	<?php 
	$background_image = get_field('footer_background_image','option');
	$background_image = $background_image['sizes']['xl'];
	?>
	<div class="footer-background" style="background-image: url('<?php echo $background_image; ?>');">
	</div>
	<div class="container-fluid">
		<div class="row hidden">
			<div class="col-3">
				<div class="logo mb2" id="footer-logo">
					<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/logo-footer.jpg" />
				</div>
			</div>
		</div>
		<div class="row mb3">
			<div class="col-3 footer-col">
				<ul class="footer-locations mb1">
					<li>
						<a href="/contact">
							Providence, RI
						</a>
					</li>
					<li>
						<a href="/contact">
							Hong Kong
						</a>
					</li>
					<li>
						<a href="/contact">
							Dubai
						</a>
					</li>
					<li>
						<a href="/contact">
							Manila
						</a>
					</li>
				</ul>
				<div class="footer-contact-button">
					<a href="/contact" class="button">
						Contact Us
					</a>
				</div>
				<div class="footer-portal-button">
					<a href="/" class="button">
						Client Portal
					</a>
				</div>
				<div class="footer-distudio-button">
					<a href="/" class="button distudio">
						<img src="<?php bloginfo( 'template_directory' );?>/images/distudio-logo.png" id="footer-distudio-logo-small"> DiStudio
					</a>
				</div>
				<div class="footer-social-links mb3">
					<a href="https://www.facebook.com/dileonardo/" target="_blank">
						<img src="<?php bloginfo( 'template_directory' );?>/images/fb.png" class="social-icon">
					</a> 
					<a href="https://linkedin.com/dileonardo" target="_blank">
						<img src="<?php bloginfo( 'template_directory' );?>/images/in.png" class="social-icon">
					</a>
					<a href="https://www.instagram.com/dileonardo/" target="_blank">
						<img src="<?php bloginfo( 'template_directory' );?>/images/ig.png" class="social-icon">
					</a>
				</div>
				<div class="footer-distudio hidden">
					<a href="https://distudio.com/" target="_blank">
						<img src="<?php bloginfo( 'template_directory' );?>/images/distudio-logo.png" id="footer-distudio-logo">
						<h5 id="footer-distudio-statement" class="white">
							Learn about DiStudio,<br>
							our new studio <br>
							within DiLeonardo.
						</h5>
					</a> 
				</div>
			</div>
			<div class="col-3 footer-col">
				<ul class="footer-links">
					<li>
						<a href="/projects">
							Projects
						</a>
					</li>
					<li>
						<a href="/practice">
							Practice
						</a>
					</li>
					<li>
						<a href="/about">
							About
						</a>
					</li>
					<li>
						<a href="/thinking">
							Thinking
						</a>
					</li>
					<li>
						<a href="/news">
							News
						</a>
					</li>
					<li>
						<a href="/awards">
							Awards
						</a>
					</li>
					<li>
						<a href="/press">
							Press
						</a>
					</li>
					<li>
						<a href="/careers">
							Careers
						</a>
					</li>
				</ul>
			</div>
			<div class="col-3 footer-col">

			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<h4 class="white site-credit">
					© 2019 DiLeonardo. All rights reserved.
				</h4>
			</div>
			<div class="col-6 d-flex justify-content-end">
				<h4 class="white site-credit">
					<a href="http://workshop.co" target="_blank">
						Site by Work-Shop Design Studio
					</a>
				</h4>
			</div>
		</div>
	</footer>