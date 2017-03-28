<?php
/**
 * The template for displaying Category Archive pages.
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
   
</div>
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
			<div id="banner-bottom" style="margin-bottom:5px;"></div>
		</div>

		
		
		
		
		
		

				
			

<?php get_sidebar('blog'); ?>
<?php get_footer(); ?>