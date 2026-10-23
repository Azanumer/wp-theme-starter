/**
 * Starter Theme front-end script.
 *
 * Vanilla JS only — add progressive enhancements here.
 */

(function () {
	'use strict';

	// Add a class when the page has scrolled, useful for sticky-header styling.
	function onScroll() {
		document.body.classList.toggle('is-scrolled', window.scrollY > 10);
	}

	window.addEventListener('scroll', onScroll, { passive: true });
	onScroll();
})();
