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
						<a href="/people">
							People
						</a>
					</li>
					<li>
						<a href="/careers">
							Careers
						</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-12 col-md-3 footer-col footer-col-2">
				<ul class="footer-links">
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

				</ul>
			</div>
			<div class="col-sm-12 col-md-3 footer-col footer-col-3">
				<ul class="footer-links">
					<li>
						<a href="/contact">
							Contact Us
						</a>
					</li>
					<li>
						<a href="/client-portal">
							Client Portal
						</a>
					</li>
					<li class="footer-distudio-button">
						<a href="/" class="footer-distudio">
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
					<li class="footer-distudio hidden">
						<a href="https://distudio.com/" target="_blank">
							<img src="<?php bloginfo( 'template_directory' );?>/images/distudio-logo.png" id="footer-distudio-logo">
							<h5 id="footer-distudio-statement" class="white">
								Learn about DiStudio,<br>
								our new studio <br>
								within DiLeonardo.
							</h5>
						</a> 
					</li>
				</ul>
			</div>
		</div>
		<div class="row row-100 footer-2">
			<div class="col-sm-12 col-md-6 footer-locations-col">
				<ul class="footer-locations">
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
			</div>
			<div class="col-sm-12 col-md-6 site-credit-container justify-content-end">
				<h4 class="white site-credit">
					© 2019 DiLeonardo. All rights reserved.<br>
					<a href="http://workshop.co" target="_blank" class="ml2">
						Site by Work-Shop Design Studio
					</a>
				</h4>
			</div>
		</div>
	</div>
</footer>