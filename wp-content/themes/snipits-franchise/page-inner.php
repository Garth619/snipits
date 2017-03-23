<?php
/**
 * Template Name: Inner
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
			<div id="banner">
				<div class="banner-header"></div>
			</div>
		<div id="banner-bottom"></div>
					<div id="banner-top"></div>
					<div id="content" role="main">
			<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
<div id="button-wrap">
	<div class="back"><?php echo previous_page_not_post(); ?></div>
	<div class="next"><?php echo next_page_not_post(); ?></div>
	<div id="snips-inner"></div>
</div>

			</div><!-- #content -->
			<div id="banner-bottom" style="margin-bottom:5px;"></div>
		</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
