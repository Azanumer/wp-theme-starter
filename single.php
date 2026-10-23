<?php
/**
 * Single post template.
 *
 * @package Starter_Theme
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="entry-meta">
				<?php
				printf(
					/* translators: 1: date, 2: author. */
					esc_html__( 'Posted on %1$s by %2$s', 'starter-theme' ),
					esc_html( get_the_date() ),
					esc_html( get_the_author() )
				);
				?>
			</div>
		</header>

		<?php if ( has_post_thumbnail() ) : ?>
			<div class="post-thumbnail"><?php the_post_thumbnail( 'starter-hero' ); ?></div>
		<?php endif; ?>

		<div class="entry-content">
			<?php
			the_content();
			wp_link_pages( array(
				'before' => '<nav class="page-links">' . esc_html__( 'Pages:', 'starter-theme' ),
				'after'  => '</nav>',
			) );
			?>
		</div>

		<footer class="entry-footer">
			<?php the_category( ', ' ); ?>
			<?php the_tags( '<span class="tags">', ', ', '</span>' ); ?>
		</footer>
	</article>

	<?php
	// Author box + adjacent navigation.
	the_post_navigation( array(
		'prev_text' => __( '&larr; %title', 'starter-theme' ),
		'next_text' => __( '%title &rarr;', 'starter-theme' ),
	) );

	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

endwhile;

get_sidebar();
get_footer();
