<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<div id="container">
							<div id="banner-top"></div>
					<div id="content" role="main"  style="min-height:1000px;">
			<div class="breadcrumbs">
   
</div>
			<?php get_template_part( 'loop', 'single' );?>


			</div><!-- #content -->
			<div id="banner-bottom" style="margin-bottom:5px;"></div>
		</div>

			

		

<?php get_sidebar('blog'); ?>
<?php get_footer(); ?>
