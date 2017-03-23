<?php
	
	session_start();
 
if(!empty($_GET['OS'])){
$_SESSION['OS'] = htmlspecialchars($_GET['OS']);
}
 
//If there's a session and it has a value for "campaign" but it's not in the
//url, then this must be a successive page visit, so direct the user on to
//the same page but with the url variable attached:
 
if(!empty($_SESSION['OS']) && empty($_GET['OS'])){
header('location:' . $_SERVER['REQUEST_URI'] . '?OS=' . $_SESSION['OS']);
}

/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		
		<img  class="menu" src="<?php bloginfo('template_directory');?>/images/menu.png"/>
		<a href="<?php bloginfo('url');?>"><img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"/></a>
		<div class="fran_title">
			<span>Franchise Opportunity</span>
		</div><!-- fran title -->
		<span class="number">877-SNIP-ITS</span>
		<div class="fb_wrap">
			<a href="https://www.facebook.com/SnipitsHaircutsforKids" target="_blank"><img class="fb" src="<?php bloginfo( 'template_directory' ); ?>/images/fb.png"/></a>
			</div><!-- fb -->
	</div><!-- #header -->

	<div id="main">
