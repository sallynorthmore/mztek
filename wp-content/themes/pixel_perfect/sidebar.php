<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage pixel_perfect
 * @since Twenty Ten 1.0
 */
?>
<aside id="complementary" class="complementary" role="complementary">
	<?php if (is_page_template('chi-tek.php')): ?>
	<section id="strapline">
		<p id="strapline">The Chi-TEK Tea Party celebrates the talent and prestige women bring to arts &amp; technology, under the playful guise of a tea party. Showcasing newly commissioned works of art from leading women designers, artist, and technologists, Chi-TEK runs Autumn 2011 at the Victoria &amp; Albert Sackler Centre</p>
	</section>
	<?php else: ?>
	<section id="strapline">
		<?php bloginfo( 'description' ); ?>
	</section>
	<?php
		/* When we call the dynamic_sidebar() function, it'll spit out
		 * the widgets for that widget area. If it instead returns false,
		 * then the sidebar simply doesn't exist, so we'll hard-code in
		 * some default sidebar stuff just in case.
		 */
		if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?> 
		
	<section>
		<h1 class="section_title">Subscribe</h1>
		<p>Subscribe to <a href="http://mztek.org/mailman/listinfo/allsubscribers_mztek.org" title="Subscribe to our mailing list" style="vertical-align:middle;display:inline-block;"><img src="/wp-content/themes/pixel_perfect/images/icon_mzmail.png" alt="MzMail"  height="25" /></a> our email listserv, for first announcements on events, workshops, and to share relevant info</p>
	</section>
	<section class="donate">
		<h1 class="section_title">Support us</h1>
		<p>Your contribution will greatly help support our programming.</p>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="donate_button">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="F2UNKSDKKGZPU">
			<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
			<img alt="" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1">
	</form>
	</section>
	<?php //get_search_form(); ?>
	<?php //wp_get_archives( 'type=monthly' ); ?>
	<?php endif; // end primary widget area ?>

	<?php endif; ?>
	<section id="twitter_feed">
		<h1 class="section_title"><a href="http://twitter.com/mztek/" title="MzTEK Twitter" target="_blank"><img src="http://mztek.org/html_email/images/icon_twitter_white.png" width="36"/> Follow Us</a></h1>
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script>
		new TWTR.Widget({
		  version: 2,
		  type: 'profile',
		  rpp: 4,
		  interval: 6000,
		  width: 240,
		  height: 300,
		  theme: {
		    shell: {
		      background: '#fafafa',
		      color: '#a3a3a3'
		    },
		    tweets: {
		      background: '#ffffff',
		      color: '#7d7c7d',
		      links: '#1a1c19'
		    }
		  },
		  features: {
		    scrollbar: false,
		    loop: false,
		    live: false,
		    hashtags: true,
		    timestamp: true,
		    avatars: false,
		    behavior: 'all'
		  }
		}).render().setUser('MzTEK').start();
		</script>
	</section>
	<?php if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
	<?php // dynamic_sidebar( 'secondary-widget-area' ); ?>
	<?php endif; ?>
</aside>