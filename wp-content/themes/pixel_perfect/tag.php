<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<section id="main" role="tags_listing">
	<section class="page_content">
		<h1 class="page_title"><?php
				printf( __( 'Tag Archives: %s', 'twentyten' ), '<span>' . single_tag_title( '', false ) . '</span>' );
			?></h1>

		<?php
		/* Run the loop for the tag archive to output the posts
		 * If you want to overload this in a child theme then include a file
		 * called loop-tag.php and that will be used instead.
		 */
		 get_template_part( 'loop', 'tag' );
		?>
	</section><!-- #content -->
</section><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
