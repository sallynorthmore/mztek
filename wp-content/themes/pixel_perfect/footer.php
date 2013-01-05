<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
		</section>
	</div>
	<footer id="site_footer" role="contentinfo">
		<div class="wrapper">
			<section id="social_links">
				<h1>Follow us</h1>
				<ul class="icons">
					<li><a href="http://mztek.org/feed/" title="Subscribe to our RSS"><img src="/wp-content/themes/pixel_perfect/images/icon_rss.png" alt="RSS" width="25" height="25" /></a></li>
					<li><a href="http://twitter.com/mztek" title="Join us on Twitter"><img src="/wp-content/themes/pixel_perfect/images/icon_twitter.png" alt="Twitter" width="25" height="25" /></a></li>
					<li><a href="http://facebook.com/" title="Join us on Facebook"><img src="/wp-content/themes/pixel_perfect/images/icon_facebook.png" alt="Facebook" width="25" height="25" /></a></li>
				</ul>
			</section>
			<section id="subscribe">
				<h1>Subscribe</h1>
				<ul class="icons">
					<li><a href="http://mztek.org/mailman/listinfo/allsubscribers_mztek.org" title="Subscribe to our mailing list"><img src="/wp-content/themes/pixel_perfect/images/icon_mzmail.png" alt="MzMail"  height="25" /></a></li>
				</ul>
			</section>
			<section id="supporters">
				<h1>Support comes from</h1>
				<ul>
					<li><a href="http://www.spacestudios.org.uk/" title="Support comes from SPACE"><img src="/wp-content/themes/pixel_perfect/images/logo_space.png" alt="SPACE" width="150" /></a></li>
				</ul>
			</section>
			<section id="donate">
				<h1>
					Support us 
				</h1>
				<p>Your contribution will greatly help support our programming.</p>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="donate_button">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="F2UNKSDKKGZPU">
					<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
					<img alt="" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
			</form>
			</section>
			<aside id="site_details">
				<p class="copyright">&copy; 2009-2011 MzTEK All Rights Reserved // <a href="<?php echo esc_url( __('http://wordpress.org/', 'twentyten') ); ?>"
						title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'twentyten'); ?>" rel="generator">
					<?php printf( __('Proudly powered by %s.', 'twentyten'), 'WordPress' ); ?>
				</a></p>
			</aside>
		</div>
	</footer>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-478660-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	<?php
		/* Always have wp_footer() just before the closing </body>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to reference JavaScript files.
		 */

		wp_footer();
	?>
	</body>
</html>
