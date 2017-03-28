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
						
						
						
						<?php the_field('blog_text');?>
						
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					
					
					</div><!-- .entry-content -->



					<div class="entry-utility">
						
<!--
						<span class="mypostedin">Categories: <?php   // Get terms for post
							$terms = get_the_terms( $post->ID , 'newsroom-category' );
 // Loop over each item since it's an array
 if ( $terms != null ){
 foreach( $terms as $term ) {
 
 // Print the name method from $term which is an OBJECT
 
 print '<a href="' . get_bloginfo('url'). '/newsroom-category/' . $term->slug .  '">' . $term->name . '&nbsp;&nbsp;' ;
 
 // Get rid of the other data stored in the object, since it's not needed
 unset($term);
} } ?>
</span>
-->
												
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility -->
				</div><!-- #post-## -->

			

<?php endwhile; // end of the loop. ?>
