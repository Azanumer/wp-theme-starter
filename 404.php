<?php
/**
 * 404 Not Found template.
 *
 * @package Starter_Theme
 */

get_header();
?>

<section class="error-404 not-found">
	<h1 class="page-title"><?php esc_html_e( 'Page not found', 'starter-theme' ); ?></h1>
	<p><?php esc_html_e( 'The page you are looking for was moved, removed or never existed.', 'starter-theme' ); ?></p>
	<?php get_search_form(); ?>
	<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return to the homepage', 'starter-theme' ); ?></a></p>
</section>

<?php
get_footer();
