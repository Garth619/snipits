<?php
/**
 * Template for displaying the footer
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
		<p class="disclaimer">*Disclaimer- This is not an offer to sell or a solicitation of an offer to buy a franchise. Any offer to sell a franchise will be made after individuals have completed an application and been qualified to receive a Franchise Disclosure Document. For those individuals who qualify, an offer to sell the franchise will only be made in conjunction with the delivery of a Snip-its Haircuts for Kids Franchise Disclosure Document. Other qualifications will apply in determining whether you will be offered a Snip-its Haircuts for Kids franchise. You may request confidential information from Snip-its Haircuts for Kids by phone, mail or by submitting your contact information through this site.877-SNIP-ITS | © 2015 The Snip-its Corporation. All rights reserved.<br/>

Web Design and Development by <a href="http://processpeak.com" target="_blank">Process Peak</a></p>
	</div><!-- #footer -->
<div class="leadgen_bar">
	<span>Take the Next Step</span>
</div><!-- lead gen bar -->
<div class="leadgen_overlay">
	<span class="close">X</span>
	<ul>
		<li><script src="//www.pipelinecatalyst.com/WebSurvey/Embed/Form.aspx"></script>
<script src="//www.pipelinecatalyst.com/WebSurvey/Addins/LeadGenIncludes/SystemGenerated/5fa488e0-c9a2-4add-a7fc-8e4611a0108f-543.js"></script></li>
	</ul>
</div><!-- menu overlay -->
<div class="menu_overay">
	<span class="close">X</span>
	<?php wp_nav_menu( array( 'container_class' => 'menu-mobile', 'theme_location' => 'mobile' ) ); ?>
	</div><!-- menu overlay -->
</div><!-- #wrapper -->

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<script src="<?php bloginfo('template_directory');?>/classie.js"></script>
<script type="text/javascript"> 
jQuery(document).ready(function(){
		jQuery(".menu").click(function(){
			jQuery('.menu_overay').addClass('open_overlay');
		});
		jQuery(".menu_overay .close").click(function(){
			jQuery('.menu_overay').removeClass('open_overlay');
		});
		jQuery(".leadgen_bar").click(function(){
			jQuery('.leadgen_overlay').addClass('open_overlay');
		});
		jQuery(".leadgen_overlay .close").click(function(){
			jQuery('.leadgen_overlay').removeClass('open_overlay');
		});
		function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 30,
            header = document.querySelector("#header");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}
window.onload = init();



});
</script>
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
