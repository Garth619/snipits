<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area" role="complementary">
			<div id="form-top">
			</div><!-- form top -->
			<div id="form-repeat">
				<div id="lead-gen-wrapper">
				<p>Get Started Here</p>
				<div id="lead-gen-form">
				<script src="//www2.pipelinecatalyst.com/WebSurvey/Addins/LeadGenIncludes/SystemGenerated/5fa488e0-c9a2-4add-a7fc-8e4611a0108f-347.js"></script>
								</div>
			</div>

			</div>
			<div id="form-bottom">
			</div>
		</div><!-- #primary .widget-area -->


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








<div class="fran-logos">
	<img style="margin:0 0 15px 62px;" src="<?php bloginfo( 'template_directory' ); ?>/images/bond.jpg"/>
	<img src="<?php bloginfo( 'template_directory' ); ?>/images/fran500.jpg"/>
	<img src="<?php bloginfo( 'template_directory' ); ?>/images/ifa.jpg"/>
	
</div>
