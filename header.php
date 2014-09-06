<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php echo ResourceManager::getTags('css'); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div class="yai-fnav yai-color-gray">
			<div class="yai-fnav-img yai-fnav-block">
				<img class="yai-header-img" src="<?php echo ResourceManager::IMAGE_PATH . 'logo_m.png'; ?>">
			</div>
			<div class="yai-fnav-lnkwrap yai-fnav-block">
				<div class="yai-fnav-lnk">Home</div>
				<div class="yai-fnav-lnk">Eat</div>
				<div class="yai-fnav-lnk">Live</div>
				<div class="yai-fnav-lnk">About</div>
			</div>
			<div class="yai-fnav-srch yai-fnav-block">
				<input type="text" class="yai-input">
			</div>
		</div>

		<header style="display: none;" id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>
		</header><!-- #masthead -->

		<div id="main" class="site-main yai-main">
