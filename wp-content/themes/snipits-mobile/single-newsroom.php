<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		
			

			<img class="new_banner" src="<?php bloginfo('template_directory');?>/images/mobile.png"/>
	
		<div id="container">
			<div id="content"><br/>
				<div class="breadcrumb">
				<?php if(function_exists('bcn_display'))
    {
        // bcn_display();
    }?>
				</div><!-- breadcrumb -->
				
				
				
				<?php
			/*
			 * Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>
				
				
				
				
			</div><!-- #content -->
			 
			  <?php get_sidebar('blog'); ?>

			<img class="logos" src="<?php bloginfo('template_directory');?>/images/logos.jpg"/>
			
		</div><!-- #container -->


<?php get_footer(); ?>
