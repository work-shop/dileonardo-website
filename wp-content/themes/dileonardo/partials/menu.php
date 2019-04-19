<div id="menu-button">
	<a href="#menu" class="menu-toggle"><span>Menu</span></a>
</div>
<menu id="menu">
	<ul class="menu-items">
		<li>
			<a href="/" class="<?php if(is_front_page()){ echo 'active'; } ?>">
				<span>Home</span>
			</a>
		</li>
		<li>
			<a href="/projects" class="<?php if( is_page(21) ){ echo 'active'; } ?>">
				<span>Projects</span>
			</a>
		</li>		
		<li>
			<a href="/practice" class="<?php if( is_page(11) ){ echo 'active'; } ?>">
				<span>Practice</span>
			</a>
		</li>
		<li>
			<a href="/people" class="<?php if( is_page(9) ){ echo 'active'; } ?>">
				<span>People</span>
			</a>
		</li>
		<li>
			<a href="/thinking" class="<?php if( is_page(23) ){ echo 'active'; } ?>">
				<span>Thinking</span>
			</a>
		</li>
		<li>
			<a href="/news" class="<?php if( is_page(25) ){ echo 'active'; } ?>">
				<span>News</span>
			</a>
		</li>
		<li>
			<a href="/careers" class="<?php if( is_page(13) ){ echo 'active'; } ?>">
				<span>Careers</span>
			</a>
		</li>
		<li>
			<a href="/contact" class="<?php if( is_page(15) ){ echo 'active'; } ?>">
				<span>Contact</span>
			</a>
		</li>
	</ul>
</menu>
<div id="menu-blanket" class="menu-toggle"></div>