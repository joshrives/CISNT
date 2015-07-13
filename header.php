<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cisnt
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//use.typekit.net/apz3pga.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<svg display="none" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<defs>
		<symbol id="icon-twitter" viewBox="0 0 951 1024">
			<title>twitter</title>
			<path class="path1" d="M925.714 233.143q-38.286 56-92.571 95.429 0.571 8 0.571 24 0 74.286-21.714 148.286t-66 142-105.429 120.286-147.429 83.429-184.571 31.143q-154.857 0-283.429-82.857 20 2.286 44.571 2.286 128.571 0 229.143-78.857-60-1.143-107.429-36.857t-65.143-91.143q18.857 2.857 34.857 2.857 24.571 0 48.571-6.286-64-13.143-106-63.714t-42-117.429v-2.286q38.857 21.714 83.429 23.429-37.714-25.143-60-65.714t-22.286-88q0-50.286 25.143-93.143 69.143 85.143 168.286 136.286t212.286 56.857q-4.571-21.714-4.571-42.286 0-76.571 54-130.571t130.571-54q80 0 134.857 58.286 62.286-12 117.143-44.571-21.143 65.714-81.143 101.714 53.143-5.714 106.286-28.571z"></path>
		</symbol>
		<symbol id="icon-facebook" viewBox="0 0 585 1024">
			<title>facebook</title>
			<path class="path1" d="M548 6.857v150.857h-89.714q-49.143 0-66.286 20.571t-17.143 61.714v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571q0-106.286 59.429-164.857t158.286-58.571q84 0 130.286 6.857z"></path>
		</symbol>
		<symbol id="icon-instagram" viewBox="0 0 1024 1024">
			<title>instagram</title>
			<path class="path1" d="M778.286 814.857v-370.286h-77.143q11.429 36 11.429 74.857 0 72-36.571 132.857t-99.429 96.286-137.143 35.429q-112.571 0-192.571-77.429t-80-187.143q0-38.857 11.429-74.857h-80.571v370.286q0 14.857 10 24.857t24.857 10h610.857q14.286 0 24.571-10t10.286-24.857zM616 510.286q0-70.857-51.714-120.857t-124.857-50q-72.571 0-124.286 50t-51.714 120.857 51.714 120.857 124.286 50q73.143 0 124.857-50t51.714-120.857zM778.286 304.571v-94.286q0-16-11.429-27.714t-28-11.714h-99.429q-16.571 0-28 11.714t-11.429 27.714v94.286q0 16.571 11.429 28t28 11.429h99.429q16.571 0 28-11.429t11.429-28zM877.714 185.714v652.571q0 46.286-33.143 79.429t-79.429 33.143h-652.571q-46.286 0-79.429-33.143t-33.143-79.429v-652.571q0-46.286 33.143-79.429t79.429-33.143h652.571q46.286 0 79.429 33.143t33.143 79.429z"></path>
		</symbol>
		<symbol id="icon-chevron-circle-up" viewBox="0 0 1024 1024">
			<title>chevron-circle-up</title>
			<path class="path1" d="M665.714 650.857l58.286-58.286q10.857-10.857 10.857-25.714t-10.857-25.714l-259.429-259.429q-10.857-10.857-25.714-10.857t-25.714 10.857l-259.429 259.429q-10.857 10.857-10.857 25.714t10.857 25.714l58.286 58.286q10.857 10.857 25.714 10.857t25.714-10.857l175.429-175.429 175.429 175.429q10.857 10.857 25.714 10.857t25.714-10.857zM877.714 512q0 119.429-58.857 220.286t-159.714 159.714-220.286 58.857-220.286-58.857-159.714-159.714-58.857-220.286 58.857-220.286 159.714-159.714 220.286-58.857 220.286 58.857 159.714 159.714 58.857 220.286z"></path>
		</symbol>
		<symbol id="icon-chevron-circle-down" viewBox="0 0 1024 1024">
			<title>chevron-circle-down</title>
			<path class="path1" d="M464.571 742.286l259.429-259.429q10.857-10.857 10.857-25.714t-10.857-25.714l-58.286-58.286q-10.857-10.857-25.714-10.857t-25.714 10.857l-175.429 175.429-175.429-175.429q-10.857-10.857-25.714-10.857t-25.714 10.857l-58.286 58.286q-10.857 10.857-10.857 25.714t10.857 25.714l259.429 259.429q10.857 10.857 25.714 10.857t25.714-10.857zM877.714 512q0 119.429-58.857 220.286t-159.714 159.714-220.286 58.857-220.286-58.857-159.714-159.714-58.857-220.286 58.857-220.286 159.714-159.714 220.286-58.857 220.286 58.857 159.714 159.714 58.857 220.286z"></path>
		</symbol>
	</defs>
</svg>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cisnt' ); ?></a>
	<header id="masthead" class="site-header wrap" role="banner">
		<div class="site-social">
			<a href="#">
				<svg class="icon icon-twitter">
					<use xlink:href="#icon-twitter"></use>
				</svg>
			</a>
			<a href="#">
				<svg class="icon icon-facebook">
					<use xlink:href="#icon-facebook"></use>
				</svg>
			</a>
			<a href="#">
				<svg class="icon icon-instagram">
					<use xlink:href="#icon-instagram"></use>
				</svg>
			</a>
		</div>
		<div class="nav-bar group">
			<div class="nav-logo">
				<a href="#">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/_i/cisnt-logo.png" />
				</a>
			</div><!-- .site-branding -->
			<a href="#" id="menu-toggle" class="menu-toggle btn">Menu</a>
			<nav class="nav-links" role="navigation">
				<a href="#">What We Do</a>
				<a href="#">Volunteers</a>
				<a href="#">About Us</a>
				<a href="#">Donate</a>
			</nav><!-- #site-navigation -->
			<nav class="mobile-links" role="navigation">
				<a href="#" class="menu-toggle">Close</a>
				<a href="#">What We Do</a>
				<a href="#">Volunteers</a>
				<a href="#">About Us</a>
				<a href="#">Donate</a>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
