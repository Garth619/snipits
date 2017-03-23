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
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

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
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if gte IE 8]>
<style>
.gform_wrapper li {font-size:13px;margin:0 0 -2px 0;list-style:none;}
</style>
<![endif]-->

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/cycle-2.9.js"></script>
<script language="javascript" type="text/javascript" src="http://www.pipelinecatalyst.com/websurvey/Embed/Form.aspx"></script><script src="//www2.pipelinecatalyst.com/WebSurvey/Embed/Form.aspx"></script>

<script>
jQuery(function(){
    jQuery('hide').show();
});
</script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#slideshow').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		speed:2000,
		requeueTimeout: 50,
		timeout: 50,
		cleartype:  true,
		cleartypeNoBg: true,
		cleartype:     !$.support.opacity,
		pager:  '#slide-nav' ,
		pagerAnchorBuilder: function(index, el) {
        return '<a href="#"> </a>'; // whatever markup you want
    }
	});
});
</script>

</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div id="header">
		<a href="<?php bloginfo( 'url' ); ?>"><img id="logo" src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png"/></a>
		<div id="header-right">
			<p>877-SNIP-ITS</p>
			<a href="https://www.facebook.com/SnipitsHaircutsforKids" target="_blank"><img id="fb" src="<?php bloginfo( 'template_directory' ); ?>/images/fb.png"/></a>
			<div id="fb-frame"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSnipitsHaircutsforKids&amp;send=false&amp;layout=button_count&amp;width=95&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=192579814123061" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:95px; height:21px;" allowTransparency="true"></iframe></div>
			<div id="third" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'my-searchbar' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->
		</div>
	<div id="sides">
		<img style="position:absolute;left:113px;" src="<?php bloginfo( 'template_directory' ); ?>/images/side.png"/>
		<img style="position:absolute;left:300px;" src="<?php bloginfo( 'template_directory' ); ?>/images/side.png"/>
		<img style="position:absolute;left:449px;" src="<?php bloginfo( 'template_directory' ); ?>/images/side.png"/>
		<img style="position:absolute;left:654px;" src="<?php bloginfo( 'template_directory' ); ?>/images/side.png"/>
		<img style="position:absolute;left:812px;" src="<?php bloginfo( 'template_directory' ); ?>/images/side.png"/>

	</div>
		
			<div id="access" role="navigation">
			  <?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div><!-- #access -->
	
	</div><!-- #header -->

	<div id="main">
