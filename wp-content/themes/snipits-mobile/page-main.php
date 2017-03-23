<?php
/**
 * Template Name: Main
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




		<div class="slideshow cycle-slideshow"  data-cycle-loader=true data-cycle-progressive="#images">
			<img src="<?php bloginfo('template_directory');?>/images/slide1.jpg"/>
			<script id="images" type="text/cycle">
				[
					"<img src='<?php bloginfo('template_directory');?>/images/slide2.jpg'>",
					"<img src='<?php bloginfo('template_directory');?>/images/slide3.jpg'>",
					"<img src='<?php bloginfo('template_directory');?>/images/slide4.jpg'>"
					]
			</script>
		</div><!-- slideshow -->
		


		<div id="container">
			<div id="content">
				<?php the_field('mobile_content'); ?>
			</div><!-- #content -->
			 

			
		</div><!-- #container -->


<?php get_footer(); ?>
