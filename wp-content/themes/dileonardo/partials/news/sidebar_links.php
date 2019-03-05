<?php
$terms = get_terms( array(
	'taxonomy' => 'news-categories',
	'hide_empty' => true,
) );
?>
<?php if( $terms ){ ?>
	<li>
		<a href="#" class="filter-button filter-button-category filter-button-all filter-button-reset" id="filter-button-all" data-target="all">
			All
		</a>
	</li>
	<?php foreach ( $terms as $term ) { ?>
		<li>
			<a  href="#" class="filter-button filter-button-category" data-target="filter-category-<?php echo $term->slug; ?>">
				<?php echo $term->name; ?>
			</a>
		</li>
	<?php } ?>
<?php } ?>