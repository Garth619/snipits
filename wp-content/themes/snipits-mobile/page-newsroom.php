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
				
				
				
				<div class="newsroom_intro">
						
							<?php get_template_part( 'loop', 'page' ); ?>
						
						</div><!-- newsroom_intro -->
						
						<div class="newsroom_feed">
							
							
									<?php if(get_field('newsroom_relation')): ?>
									 
										<?php while(has_sub_field('newsroom_relation')): ?>
									 
											<div class="year_list">
											
											<h2><?php the_sub_field('year');?></h2>
												
												
												<?php $posts = get_sub_field('year_posts');
												
												if( $posts ): ?>
												
											
												    
												    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
												    <?php setup_postdata($post); ?>
												    
												    
												    
															<?php if( get_field('pdf_or_outside_link') == 'PDF' ): ?>
												    		
												    	
												    		<a class="newsfeed_link" href="<?php the_field('pdf');?>" target="_blank"><?php the_title(); ?></a>
												    		
												    		<?php if(get_field('pdf_excerpt')):?>
												    			
												    			
												    				<div class="newsfeed_blog_excerpt">
												    		
																			<?php the_field('pdf_excerpt');?>...
																		
																			<a href="<?php the_field('pdf');?>">View PDF</a>
																		
																		</div><!-- newsfeed_blog_excerpt -->
												    			
												    			
												    			<?php endif;?>
												    	
												    	
												    	<?php endif; ?>
												    	
												    	
												    	<?php if( get_field('pdf_or_outside_link') == 'Outside Link' ): ?>
												    		
												    	
												    		<a class="newsfeed_link" href="<?php the_field('outside_link');?>" target="_blank"><?php the_title(); ?></a>
												    	
												    	
												    	<?php endif; ?>
												    	
												    	<?php if( get_field('press_or_blog_post') == 'Blog Post' ): ?>
												    	
												    		
												    		<a class="newsfeed_link" href="<?php the_permalink();?>"><?php the_title(); ?></a>
												    			
												    			
												    			<?php if(get_field('blog_excerpt')):?>
												    			
												    			<div class="newsfeed_blog_excerpt">
												    		
																		<?php the_field('blog_excerpt');?>...
																		
																		<a href="<?php the_permalink();?>">Read More</a>
																		
																		
												    		
												    			</div><!-- newsfeed_blog_excerpt -->
												    			
												    			<?php endif;?>
												    	
												    	
												    	<?php endif; ?>
												    
															
														<?php endforeach; ?>
												  
												  
												    
												<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
												<?php endif; ?>
												
												</div><!-- year_list -->

									    
										<?php endwhile; ?>
										
										
									 
									<?php endif; ?>
							
							
						</div><!-- newsroom_feed -->

				
				
				
				
				
				
			</div><!-- #content -->
			 
			 <?php get_sidebar('blog'); ?>

			<img class="logos" src="<?php bloginfo('template_directory');?>/images/logos.jpg"/>
			
		</div><!-- #container -->


<?php get_footer(); ?>
