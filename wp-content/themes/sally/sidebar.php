<?php
/**
 * @package WordPress
 * @subpackage Sally
 */
?>
<!-- begin sidebar -->
<div id="menu">

<ul>
<li><h1 class="bell"><a href="http://www.mztek.org/?page_id=2">ABOUT</a></h1></li>
<li><h1 class="bell"><a href="http://www.mztek.org/?page_id=3">WORKSHOPS</a></h1></li>
<li><h1 class="bell"><a href="http://www.mztek.org/?page_id=5">PEER MEET</a></h1></li>
<li><h1 class="bell"><a href="http://www.mztek.org/?page_id=7">PUB MEET</a></h1></li>
<li><h1 class="bell"><a href="http://www.mztek.org/?page_id=9">CONTACT</a></h1></li>
<li><h1 class="bell"><a href="http://www.mztek.org/?page_id=9">CALENDAR</a></h1></li>

<!--<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<?php wp_list_pages('title_li=' . __('')); ?>-->
<!--    <li><h1 class="bell"><a href="http://www.mztek.org/?page_id=2" target="_self">About</a></h1></li>
--><!--	<?php wp_list_bookmarks('title_after=&title_before='); ?>
	<?php wp_list_categories('title_li=' . __('Categories:')); ?>
 <li id="search">
   <label for="s"><?php _e('Search:'); ?></label>
   <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
	<div>
		<input type="text" name="s" id="s" size="15" /><br />
		<input type="submit" value="<?php _e('Search'); ?>" />
	</div>
	</form>
 </li>
 <li id="archives"><?php _e('Archives:'); ?>
	<ul>
	 <?php wp_get_archives('type=monthly'); ?>
	</ul>
 </li>
 <li id="meta"><?php _e('Meta:'); ?>
	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
		<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
		<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
		<?php wp_meta(); ?>
	</ul>
 </li>-->
<?php endif; ?>

</ul>

</div>
<!-- end sidebar -->
