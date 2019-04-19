<section class="block cf-top padded-bottom spy-target" id="home-updates">
	<div class="container-fluid">

		<?php if( get_field('row_1_column_1') || get_field('row_1_column_2') ){ ?>
			<div class="row row-updates home-updates-row-1">
				<div class="col-12 col-md-7 col-lg-8  update">
					<?php  $post_object = get_field('row_1_column_1'); ?>
					<?php if( $post_object ){ ?>
						<?php $post = $post_object;	setup_postdata( $post );  ?>
						<?php get_template_part('partials/home/card_update' ); ?>
						<?php wp_reset_postdata(); ?>
					<?php } ?>
				</div>
				<div class="col-12 col-md-5 col-lg-4 update">
					<?php  $post_object = get_field('row_1_column_2'); ?>
					<?php if( $post_object ){ ?>
						<?php $post = $post_object;	setup_postdata( $post );  ?>
						<?php get_template_part('partials/home/card_update' ); ?>
						<?php wp_reset_postdata(); ?>
					<?php } ?>
				</div>
			</div>
		<?php } ?>

		<?php if( get_field('row_2_column_1') || get_field('row_2_column_2') ){ ?>
			<div class="row row-updates home-updates-row-2">
				<div class="col-12 col-md-5 col-lg-4 update">
					<?php  $post_object = get_field('row_3_column_1'); ?>
					<?php if( $post_object ){ ?>
						<?php $post = $post_object;	setup_postdata( $post );  ?>
						<?php get_template_part('partials/home/card_update' ); ?>
						<?php wp_reset_postdata(); ?>
					<?php } ?>
				</div>
				<div class="col-12 col-md-7 col-lg-8 update">
					<?php  $post_object = get_field('row_2_column_2'); ?>
					<?php if( $post_object ){ ?>
						<?php $post = $post_object;	setup_postdata( $post );  ?>
						<?php get_template_part('partials/home/card_update' ); ?>
						<?php wp_reset_postdata(); ?>
					<?php } ?>
				</div>
			</div>
		<?php } ?>

		<?php if( get_field('row_3_column_1') || get_field('row_3_column_2') || get_field('row_3_column_3') ){ ?>
			<div class="row row-updates home-updates-row-3">
				<div class="col-12 col-md-4 update">
					<?php  $post_object = get_field('row_3_column_1'); ?>
					<?php if( $post_object ){ ?>
						<?php $post = $post_object;	setup_postdata( $post );  ?>
						<?php get_template_part('partials/home/card_update' ); ?>
						<?php wp_reset_postdata(); ?>
					<?php } ?>
				</div>
				<div class="col-12 col-md-4 update">
					<?php  $post_object = get_field('row_3_column_2'); ?>
					<?php if( $post_object ){ ?>
						<?php $post = $post_object;	setup_postdata( $post );  ?>
						<?php get_template_part('partials/home/card_update' ); ?>
						<?php wp_reset_postdata(); ?>
					<?php } ?>
				</div>
				<div class="col-12 col-md-4 update">
					<?php  $post_object = get_field('row_3_column_3'); ?>
					<?php if( $post_object ){ ?>
						<?php $post = $post_object;	setup_postdata( $post );  ?>
						<?php get_template_part('partials/home/card_update' ); ?>
						<?php wp_reset_postdata(); ?>
					<?php } ?>
				</div>
			</div>
		<?php } ?>

		<?php if( get_field('row_4_column_1') || get_field('row_4_column_2') ){ ?>
			<div class="row row-updates home-updates-row-4">
				<div class="col-12 col-md-5 col-lg-4 update">
					<?php  $post_object = get_field('row_4_column_1'); ?>
					<?php if( $post_object ){ ?>
						<?php $post = $post_object;	setup_postdata( $post );  ?>
						<?php get_template_part('partials/home/card_update' ); ?>
						<?php wp_reset_postdata(); ?>
					<?php } ?>
				</div>
				<div class="col-12 col-md-7 col-lg-8 update">
					<?php  $post_object = get_field('row_4_column_2'); ?>
					<?php if( $post_object ){ ?>
						<?php $post = $post_object;	setup_postdata( $post );  ?>
						<?php get_template_part('partials/home/card_update' ); ?>
						<?php wp_reset_postdata(); ?>
					<?php } ?>
				</div>
			</div>
		<?php } ?>

	</div>
</section>
