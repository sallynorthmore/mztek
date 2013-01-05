<?php
/*
Template Name: Chi-TEK
*/
?>
<?php get_header(); ?>
	<header id="banner">
		<div class="mztek_banner">
			<div class="wrapper">
				<div id="branding" role="banner">
					<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="/wp-content/themes/pixel_perfect/images/logo_mztek_1.png" alt="<?php bloginfo( 'name' ); ?>"/></a></h1>
					<nav id="site_nav" role="navigation">
						<p>Back to MzTEK »</p>
						<?php wp_nav_menu(); ?>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<header class="chitek_banner wrapper">
		<div id="chitek_branding">
			<h1 id="chitek_logo">
				<a href="/programs/chi-tek/" title="Chi-TEK"><img src="/wp-content/themes/pixel_perfect/images/chitek/logo.png" alt="Chi-TEK" /></a>
			</h1>
			<p class="info">Women + Tech + Tea</p>
		</div>
		<section id="chitek_nav">
			<div id="spread"><img src="/wp-content/themes/pixel_perfect/images/chitek/banner_spread.png" alt="Chi-TEK" /></div>
			<ul>
				<?php wp_list_pages("title_li=&child_of=769" ); ?> 
			</ul>
		</section>
	</header>
	<section id="content" role="main">
		<section id="main" class="chitek">
			<section class="page_content posts">	
				<!-- BLOG -->
				<?php if (!(is_page(769)) ): ?>
				<h1 class="page_title chitek"><?php the_title(); ?></h1>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>

				<!-- BLOG -->
				<?php
				if (is_page(769) ) {
				$category = 'Chi-TEK';
				echo "<h1 class='page_title chitek'>What&rsquo;s On:</h1>";
				}
				if ($category) {
				  $cat = get_cat_ID($category);
				  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				  $post_per_page = 4; // -1 shows all posts
				  $do_not_show_stickies = 1; // 0 to show stickies
				  $args=array(
				    'category__in' => array($cat),
				    'orderby' => 'date',
				    'order' => 'DESC',
				    'paged' => $paged,
				    'posts_per_page' => $post_per_page,
				    'caller_get_posts' => $do_not_show_stickies
				  );
				  $temp = $wp_query;  // assign orginal query to temp variable for later use   
				  $wp_query = null;
				  $wp_query = new WP_Query($args); 
				  if( have_posts() ) : 
						while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					    <div class="post" id="post-<?php the_ID(); ?>">
				        <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				        <div class="entry-meta"><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></div>
				        <div class="entry-content">
				          <?php the_content('Read the rest of this entry »'); ?>
				        </div>
				        <div class="entry-utility">
							<p class="comments-link"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
						</div>
				     </div>
				    <?php endwhile; ?>
				    <div class="navigation">
				      <div class="alignleft"><?php next_posts_link('« Older Entries') ?></div>
				      <div class="alignright"><?php previous_posts_link('Newer Entries »') ?></div>
				    </div>
				  <?php else : ?>

						<h2 class="center">Not Found</h2>
						<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php get_search_form(); ?>

					<?php endif; 

					$wp_query = $temp;  //reset back to original query

				}  // if ($category)
				?>
			</section>
		</section>
		<?php get_sidebar(); ?>
	</section>

	<footer id="chitek_footer">
		<section class="jar">
			<ul class="supporters">
				<li><img src="/wp-content/themes/pixel_perfect/images/logo_lottery.jpg" alt="Lottery" /></li>
			</ul>
		</section>
		<section class="cup">
			<ul class="supporters">
					<li><a href="http://www.spacestudios.org.uk/home" target="_blank" title="SPACE" class="logo"><img src="http://mztek.org/html_email/chitek_invite/images/logo_space.png" border="0" alt="SPACE" /></a></li>
			</ul>
		</section>
		<section class="jar second">
			<ul class="supporters">
				<li><a href="http://www.vam.ac.uk/" target="_blank" title="V&amp;A" class="logo"><img src="/wp-content/themes/pixel_perfect/images/chitek/logo_va.gif" border="0" alt="Victoria&amp;Albert Museum" /></a></li>
			</ul>
		</section>
		<section id="chi_definition" class="sugar">
			<p>Thank you to all of our generous supporters</p>	
		</section>
	</footer>
<?php get_footer(); ?>