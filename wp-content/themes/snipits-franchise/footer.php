<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer">
<ul class="footer-menu">
	<li><a href="<?php bloginfo( 'url' ); ?>">Home</a></li> 
	<li>|</li>
	<li><a href="<?php bloginfo( 'url' ); ?>/the-franchise-decision">The Franchise Decision</a></li>
	<li>|</li>
	<li><a href="<?php bloginfo( 'url' ); ?>/the-story">The Story</a></li>
	
	<li>|</li>
	<li><a href="<?php bloginfo( 'url' ); ?>/mission">Mission</a></li>
	<li>|</li>
	<li><a href="<?php bloginfo( 'url' ); ?>/vision">Vision</a></li>
	<li>|</li>
	<li><a href="<?php bloginfo( 'url' ); ?>/the-opportunity">The Opportunity</a></li>
	<li>|</li>
	<li><a href="<?php bloginfo( 'url' ); ?>/the-investment">Investment</a></li>
	<li>|</li>
	
	<li><a href="<?php bloginfo( 'url' ); ?>/the-profile">The Profile</a></li><br/>
		<li style="margin:0 5px 0 65px;"><a href="<?php bloginfo( 'url' ); ?>/the-franchisee-role">The Franchisee Role</a></li>
	<li>|</li>
	<li><a href="<?php bloginfo( 'url' ); ?>/next-steps">Next Steps</a></li>
	<li>|</li>
	<li><a href="<?php bloginfo( 'url' ); ?>/site-map">Site Map</a></li>
	<li>|</li>
	<li><a href="<?php bloginfo( 'url' ); ?>/privacy-policy">Privacy Policy</a></li>
	<li>|</li>
	<li><a href="http://www.snipits.com">Back to Snipits.com</a></li>
</ul>

<p>*Disclaimer- This is not an offer to sell or a solicitation of an offer to buy a franchise. Any offer to sell a franchise will be made after individuals have completed an application and been qualified to receive a Franchise Disclosure Document. For those individuals who qualify, an offer to sell the franchise will only be made in conjunction with the delivery of a Snip-its Haircuts for Kids Franchise Disclosure Document. Other qualifications will apply in determining whether you will be offered a Snip-its Haircuts for Kids franchise. You may request confidential information from Snip-its Haircuts for Kids by phone, mail or by submitting your contact information through this site.877-SNIP-ITS | &copy; 2015 The Snip-its Corporation. All rights reserved. </p>
<p style="margin-top:-25px;"><a href="http://www.processpeak.com" target="_blank">Web Design and Development by Process Peak</a></p>
			</div><!-- #footer -->

</div><!-- #wrapper -->
<div style="visibility:hidden">
	<img src="<?php bloginfo( 'template_directory' ); ?>/images/get-startedhover.jpg" width="1" height="1" />
	<img src="<?php bloginfo( 'template_directory' ); ?>/images/back-hover.jpg" width="1" height="1" />
	<img src="<?php bloginfo( 'template_directory' ); ?>/images/next-hover.jpg" width="1" height="1" />

</div>


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37848131-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<script type="text/javascript">
(function () {
var tagjs = document.createElement("script");
var s = document.getElementsByTagName("script")[0];
tagjs.async = true;
tagjs.src = "//s.btstatic.com/tag.js#site=sPLaZHQ";
s.parentNode.insertBefore(tagjs, s);
}());
</script>
<noscript>
<iframe src="//s.thebrighttag.com/iframe?c=sPLaZHQ" width="1" height="1"
frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>

</body>
</html>
