<?php
/**
 * Main archive / blog loop.
 *
 * @package Starter_Theme
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', get_post_type() );
	endwhile;

	the_posts_pagination( array(
		'mid_size'  => 2,
		'prev_text' => __( '&larr; Previous', 'starter-theme' ),
		'next_text' => __( 'Next &rarr;', 'starter-theme' ),
	) );
else :
	?>
	<section class="no-results">
		<h1><?php esc_html_e( 'Nothing found', 'starter-theme' ); ?></h1>
		<p><?php esc_html_e( 'Try a different search or browse the menu above.', 'starter-theme' ); ?></p>
		<?php get_search_form(); ?>
	</section>
	<?php
endif;

get_sidebar();
get_footer();
