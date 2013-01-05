<?php
/**
 * The main template file.
 *
 *
 * @package WordPress
 * @subpackage pixel_perfect
 * @since pixel perfect 1.0
 */

get_header(); ?>
<section id="main" class="index">
	<section id="coming_up">
		<h1 class="section_title">Coming up</h1>
		<ul>
			<?php $my_query = new WP_Query('category_name=Workshops&posts_per_page=3');
			while ($my_query->have_posts()) : $my_query->the_post();
			$do_not_duplicate[] = $post->ID ?>
			<?php if (has_tag( 'Upcoming')): ?>
			<li class="post">
				<?php if ( has_post_thumbnail() ) {
				    the_post_thumbnail();
				} ?>
				<header class="header">
					<h3><?php the_category(); ?></h3>
					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
				</header>
				<div class="excerpt">
					<?php the_excerpt(); ?>
				</div>
			</li>
			<?php endif; ?>
			<?php endwhile; ?>
		</ul>	
	</section>
	<section id="news" class="posts">
		<h1 class="section_title">News</h1>
		<?php query_posts(array('post__not_in'=>$do_not_duplicate, 'category_name' => 'News'));
		 if (have_posts()) : while (have_posts()) : the_post();
		 ?>		
		   <!-- Do stuff... -->
  		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<div class="entry-meta">
				<?php twentyten_posted_on(); ?>
			</div>

			<div class="entry-content">
				<?php the_content( __( 'More <span class="meta-nav">»</span>', 'twentyten' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
			</div>

			<div class="entry-utility">
				<?php
					$tags_list = get_the_tag_list( '', ', ' );
					if ( $tags_list ):
				?>
					<span class="tag-links">
						<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
					</span>
					<span class="meta-sep">|</span>
				<?php endif; ?>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?></span>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</div>
		</div>
		<?php comments_template( '', true ); ?>
		<?php endwhile; endif; ?>		
		
		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<div id="nav-below" class="navigation">
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
		</div>
		<?php endif; ?>
	</section>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
