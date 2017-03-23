<?php
/**
 * Template Name: Newsroom
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
		
			<div id="banner-top"></div><!-- banner-top -->
				
				<div id="banner">
					
					<div class="banner-header"></div><!-- banner-header -->
			
				</div><!-- banner -->
		
				<div id="banner-bottom"></div>
				
				
				<div id="banner-top"></div>
					
					
					<div id="content" role="main">
			
						<div class="breadcrumbs">
    
						<?php if(function_exists('bcn_display'))
						
							{
							bcn_display();
    				}?>
					
						</div><!-- breadcrumbs -->
						
						<div class="newsroom_intro">
						
							<h2>Newsroom</h2>
			
							<p>Welcome to the Snip-its Newsroom — a space for news media and bloggers to find the latest news releases, company information, images and other related content. If you have a special request, would like to obtain our b-roll footage or have general inquiries, please complete the form below.</p>
						
							<h2>Bios & Company Information</h2>

							<p>Download <a href="">bio sheet</a> for Snip-its Founder, Joanna Meiseles<br/>
							Download <a href="">bio sheet</a> for Snip-its President & CEO, Jim George<br/>
							Download <a href="">company backgrounder</a> to learn more about The Snip-its Corporation</p>

							<h2>Images</h2>

							<p>These images for media use only and not for personal use. ©2016 The Snip-its Corporation. All Rights Reserved.</p>

							<p><a href="">Original Snip-its Salon Photo</a><br/>
							<a href="">Snip-its Professional Hair Care Line-up</a><br/>
							<a href="">Snip-its Logo</a></p>
						
						</div><!-- intro -->
					

					</div><!-- #content -->
			
			<div id="banner-bottom" style="margin-bottom:5px;"></div><!-- banner-bottom -->
		
		</div><!-- container -->
		
<?php get_sidebar(); ?>
<?php get_footer(); ?>
