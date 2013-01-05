<?php
/*
Template Name: Events Listing
*/
?>
<?php get_header(); ?>
<section id="main">
	<section class="page_content">
		<h1 class="page_title"><?php the_title(); ?></h1>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
		<h2>Workshops</h2>
		List workshops here
		<h2>Events</h2>
		List other event types here
	</section>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
