<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<img class="new_banner" src="<?php bloginfo('template_directory');?>/images/mobile.png"/>

		<div id="container" style="margin-top:30px;">
			<div id="content"><br/>
								
				
		
						
						
							
							
										<h2 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h2>
				
				
				
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>


				
				
				
				
				
				
			</div><!-- #content -->
			 
			 <?php get_sidebar('blog'); ?>

			<img class="logos" src="<?php bloginfo('template_directory');?>/images/logos.jpg"/>
			
		</div><!-- #container -->

	<?php get_footer(); ?>
