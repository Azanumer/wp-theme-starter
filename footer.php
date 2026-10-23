<?php
/**
 * Theme footer.
 *
 * @package Starter_Theme
 */
?>

		<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<aside class="widget-area footer-widget-area">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</aside>
		<?php endif; ?>

	</div><!-- .site-wrap -->
</main><!-- #primary -->

<footer class="site-footer">
	<div class="site-wrap">
		<div class="footer-credit">
			<?php
			$footer_text = get_theme_mod( 'starter_footer_text', '' );
			if ( '' !== $footer_text ) {
				echo wp_kses_post( $footer_text );
			} else {
				printf(
					/* translators: %s: current year. */
					esc_html__( '© %s — Proudly powered by WordPress.', 'starter-theme' ),
					esc_html( gmdate( 'Y' ) )
				);
			}
			?>
		</div>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'footer',
			'menu_class'     => 'footer-menu',
			'depth'          => 1,
			'fallback_cb'    => false,
		) );
		?>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
