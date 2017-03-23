<?php
/**
 * Template Name: Inner No Banner
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
		<div id="container">
				<div id="banner-top"></div>
					<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>


			</div><!-- #content -->
			<div id="banner-bottom" style="margin-bottom:5px;"></div>
		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
