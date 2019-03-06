<footer id="footer" class="block padded-top pb1 pt5 bg-medium">
	<?php 
	$background_image = get_field('background_image');
	$background_image = $background_image['sizes']['page_hero'];
	$background_image = get_bloginfo( 'stylesheet_directory' ) . '/images/wireframe2.jpg';
	?>
	<div class="footer-background" style="background-image: url('<?php echo $background_image; ?>');">
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-3">
				<div class="logo mb2" id="footer-logo">
					<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/images/logo-footer.jpg" />
				</div>
			</div>
		</div>
		<div class="row mb5">
			<div class="col-3 footer-col">
				<ul class="footer-locations mb2">
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
				<div class="footer-contact-button mb1">
					<a href="/contact" class="button">
						Contact Us
					</a>
				</div>
				<div class="footer-portal-buttion mb1">
					<a href="/" class="button">
						Client Portal
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
						<a href="/projects">
							Practice
						</a>
					</li>
					<li>
						<a href="/projects">
							About
						</a>
					</li>
					<li>
						<a href="/projects">
							Thinking
						</a>
					</li>
					<li>
						<a href="/projects">
							News
						</a>
					</li>
					<li>
						<a href="/projects">
							Awards
						</a>
					</li>
					<li>
						<a href="/projects">
							Press
						</a>
					</li>
					<li>
						<a href="/projects">
							Careers
						</a>
					</li>
				</ul>
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