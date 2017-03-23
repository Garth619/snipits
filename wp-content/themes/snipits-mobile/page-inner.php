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

	<img class="banner" src="<?php the_field('inner_banners');?>"/>
	<div class="banner-header"></div>
		<div id="container">
			<div id="content"><br/>
				<div class="breadcrumb">
				<?php if(function_exists('bcn_display'))
    {
        // bcn_display();
    }?>
				</div><!-- breadcrumb -->
				<?php the_field('mobile_content'); ?>
			</div><!-- #content -->
			 
			 <img class="snipit" src="<?php bloginfo('template_directory');?>/images/snipit.jpg"/>
			
			
			 <div class="buttons">
				<?php if(get_field('back')) { ?>
					<a href="<?php the_field('back');?>"><img class="back" src="<?php bloginfo('template_directory');?>/images/back.jpg"/></a>
				<?php } ?>
				<?php if(get_field('next')) { ?>
					<a href="<?php the_field('next');?>"><img class="next" src="<?php bloginfo('template_directory');?>/images/next.jpg"/></a>
				<?php } ?>
			</div><!-- buttons -->

			<img class="logos" src="<?php bloginfo('template_directory');?>/images/logos.jpg"/>
			
		</div><!-- #container -->


<?php get_footer(); ?>
