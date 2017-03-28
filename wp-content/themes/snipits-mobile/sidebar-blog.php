<?php
/**
 * Sidebar template containing the primary and secondary widget areas
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

	<div class="blog_sidebar">
	
	<span class="news_cat_title">Categories</span><!-- news_cat_title -->

<?php

$taxonomy = 'newsroom-category';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy

if ( $terms && !is_wp_error( $terms ) ) :
?>
    
    <ul>
        <?php foreach ( $terms as $term ) { ?>
            <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
        <?php } ?>
    </ul>
<?php endif;?>


</div><!-- blog_sidebar -->		
