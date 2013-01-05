<?php
/*
Template Name: Hacked Human Orchestra
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>

<section id="content" role="main">
	<section id="main" class="index">

		<section class="page_content posts">
			<!-- BLOG -->
			<h1 class="page_title">
				<?php the_title(); ?>
			</h1>
			<?php the_content(); ?>

			<div class="posts">
				<h2>News</h2>
				<!-- BLOG -->
				<?php

				$category = 'Hacked Human Orchestra';

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

				<h2>Not Found</h2>
				<p>Sorry, but you are looking for something that isn't here.</p>
				<?php get_search_form(); ?>

				<?php endif; 

				$wp_query = $temp;  //reset back to original query

				}  // if ($category)
				?>
			</div>
			
			
		</section>
		
	</section>
	<?php get_sidebar(); ?> 
</section>

<footer id="hho_footer">
	
</footer>
<?php endwhile; endif; ?>
<?php get_footer(); ?>