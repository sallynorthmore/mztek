<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<section id="main" class="category_listing">
	<section class="page_content">
		<h1 class="page_title"><?php single_cat_title(); ?></h1>
		<section class="posts">
			<?php
				$category_description = category_description();
				if ( ! empty( $category_description ) )
					echo '<div class="archive-meta">' . $category_description . '</div>';

			/* Run the loop for the category page to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-category.php and that will be used instead.
			 */
			get_template_part( 'loop', 'category' );
			?>
		</section>
	</section>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
