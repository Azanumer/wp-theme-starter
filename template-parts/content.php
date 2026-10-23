<?php
/**
 * Single post / page content card used by archive loops.
 *
 * @package Starter_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'starter-card' ); ?></a>
		</div>
	<?php endif; ?>

	<header class="entry-header">
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
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

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
</article>
