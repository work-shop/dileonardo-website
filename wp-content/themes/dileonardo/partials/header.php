<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>
		<?php 
		if( is_front_page() ){
			bloginfo( 'name' ); echo ' | ';  bloginfo( 'description' );
		} elseif( is_404() ){
			bloginfo( 'name' );
		} 
		else{
			wp_title( false ); echo ' | '; bloginfo( 'name' );
		}
		?>
	</title>

	<?php 
	if( get_field('social_media_title') ):
		$social_title = get_field('social_media_title'); 
	else:
		$social_title = get_bloginfo( 'name' );
	endif;
	if( get_field('social_media_description') ):
		$social_description = get_field('social_media_description');
	else:
		$social_description = '';
	endif;
	if( get_field('social_media_url') ):
		$social_url = get_field('social_media_url'); 
	else: 
		$social_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	endif;
	if( get_field('social_media_image') ):
		$social_image_array = get_field('social_media_image');
		$social_image = $social_image_array['sizes']['fb'];
	else:
		$social_image = get_bloginfo( 'template_directory' ) . '/images/social_card_v1.jpg';
	endif;

	?>

	<script>
		var startTime = new Date().getTime();
		var totalTime = 0;
		var lastStep = 0;
	</script>

	<link rel="preload" href="<?php bloginfo('template_directory'); ?>/bundles/bundle.css" as="style">
	<link rel="preload" href="<?php bloginfo('template_directory'); ?>/js/isotope.js" as="script">

	<!-- Facebook Open Graph data -->
	<meta property="og:title" content="<?php echo $social_title; ?>" />
	<meta property="og:description" content="<?php echo $social_description; ?>" />
	<meta property="og:image" content="<?php echo $social_image; ?>" />
	<meta property="og:url" content="<?php echo $social_url; ?>" />
	<meta property="og:type" content="website" />

	<!-- Twitter Card data -->
	<meta name="twitter:card" value="<?php echo $social_description; ?>">

	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-icon.png">

	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="Work-Shop Design Studio http://workshop.co">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

	<?php
	$sitewide_alert_class = 'sitewide-alert-off';
	// $sitewide_alert_on = get_field('show_sitewide_alert', 'option');
	// if( $sitewide_alert_on === true ):
	// 	if( !isset($_COOKIE['ws_show_sitewide_alert']) || $_COOKIE['ws_show_sitewide_alert'] === false ):
	// 		$sitewide_alert_class = 'sitewide-alert-on';
	// 		$show_sitewide_alert = true;
	// 	endif;
	// endif;
	?>

	<?php 
	$hero_class = ' no-hero ';
	if( get_field('show_hero') ){ 
		$hero_class = ' has-hero';
	} ?>

</head>
<body <?php body_class('loading before-scroll modal-off menu-closed dropdown-off mobile-dropdown-off curve-off ' . $sitewide_alert_class . $hero_class . ' '); ?>>

	<?php get_template_part('partials/sitewide_alert'); ?>
	<?php get_template_part('partials/nav'); ?>
	<?php get_template_part('partials/menu'); ?>
	<?php get_template_part('partials/home/dots'); ?>

	<main id="content">
