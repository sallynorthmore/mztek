<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	<div id="sidebar">
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<!--			<li>
				<?php get_search_form(); ?>
			</li>-->

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2>Author</h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->

<!--			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

			<?php } ?>

			</li> <?php }?>-->

			<!--<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>

				<li><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>-->

			<?php endif; ?>
<h2 class="bell"><a href="http://mztek.org/mailman/listinfo/allsubscribers_mztek.org" target="_blank">MAILING LIST</a></h2>
            <li>
  <h2 class="bell"><a href="http:/www.mztek.org/the-wishlist/">THE WISH LIST</a></h2>
          </li>
          <li>
  <h2 class="bell"><a href="http://www.twitter.com/mztek" target="_blank">TWITTER</a> / <a href="http://www.facebook.com/group.php?gid=46702402694&amp;ref=ts" target="_blank">FACEBOOK</a></h2>
          </li>
          
            <li><h2 class="bell">FRIENDS</h2>
          <a href="http://www.spacemedia.org.uk" target="_blank"><img src="http://www.mztek.org/wp-content/themes/sally2/images/spacelogo_lh_size.gif" width="125" height="20" alt="space media" /></a>
          <h4 class="bell"><a href="http://missbaltazar.humlab.umu.se" target="_blank">Miss Baltazar's Laboratory</a></h4>
		  <h4 class="bell"><a href="http://www.furtherfield.org" target="_blank">Furtherfield.org</a></h4>
          <h4 class="bell"><a href="http://www.seaweedstudio.co.uk/" target="_blank">Seaweed Studio</a></h4>
         <h4 class="bell"><a href="http://www.pagermotors.com" target="_blank">Fritz at PagerMotors.com</a></h4>
         
          </li>
		</ul>
</div>

