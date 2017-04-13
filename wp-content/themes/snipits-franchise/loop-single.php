<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 style="margin-top:20px;"><?php the_title(); ?></h2>

					<div class="entry-meta">
						
						<span class="">Posted on <?php $pfx_date = get_the_date(); ?><?php echo $pfx_date ;?> </span>
						
						
					</div><!-- .entry-meta -->

					<div class="entry-content">
						
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
												    	
												    		<?php the_field('blog_text');?>
												    														    	
												    	
												    	<?php endif; ?>
						
						
						
						
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					
					
					</div><!-- .entry-content -->



					<div class="entry-utility">
						

												
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility -->
				</div><!-- #post-## -->

			

<?php endwhile; // end of the loop. ?>
