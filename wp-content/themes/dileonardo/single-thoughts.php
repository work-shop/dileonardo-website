
<?php get_template_part('partials/header'); ?>

<?php get_template_part('partials/page/page_hero' ); ?>

<?php get_template_part('partials/page/single_intro' ); ?>

<?php 
global $post; 
$ID = 425;
$post = get_post( $ID, OBJECT );
setup_postdata( $post );

get_template_part('partials/flexible_content/flexible_content' );

wp_reset_postdata();
?>

<?php get_template_part('partials/single_thought/related' ); ?>

<?php get_template_part('partials/footer' ); ?>


