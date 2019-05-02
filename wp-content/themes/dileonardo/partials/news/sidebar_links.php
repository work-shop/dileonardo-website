<?php
$terms = get_terms( array(
	'taxonomy' => 'news-categories',
	'hide_empty' => true,
) );
?>
<?php if( $terms ){ ?>
	<li class="filter-all">
		<a href="#" class="filter-button filter-button-category filter-button-all filter-button-reset" id="filter-button-all" data-target="all" data-target-id="all">
			All
		</a>
	</li>
	<?php foreach ( $terms as $term ) { ?>
		<li>
			<!-- <pre><?php var_dump($term); ?></pre> -->
			<a  href="#" class="filter-button filter-button-category" data-target="<?php echo $term->slug; ?>" data-target-id="<?php echo $term->term_id; ?>">
				<?php echo $term->name; ?>
			</a>
		</li>
	<?php } ?>
<?php } ?>