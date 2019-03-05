<?php if( is_page(11) ){ 
	$page = 'practice';
} else if( is_page(9) ){
	$page = 'about';
} else if( is_page(25) ){
	$page = 'news';
} else if( is_page(13) ){
	$page = 'careers';
} else{
	$page = 'page';
} ?>

<div class="page-sidebar page-sidebar-sticky before" id="page-sidebar-<?php echo $page; ?>">
	<div class="page-sidebar-header">
		<h1 class="page-title">
			<?php the_title(); ?>
		</h1>
	</div>
	<div class="page-sidebar-body">
		<ul class="page-sidebar-list  <?php if( $page === 'news' ){ ?> filters <?php } ?>">
			<?php if( $page === 'practice' ){ 
				get_template_part('partials/practice/sidebar_links'); 
			} else if( $page === 'about' ){
				get_template_part('partials/about/sidebar_links');
			}  else if( $page === 'news' ){
				get_template_part('partials/news/sidebar_links');
			}  else if( $page === 'careers' ){
				get_template_part('partials/careers/sidebar_links');
			}  
			?>
		</ul>
	</div>
</div>