# Starter Theme

A clean, minimal WordPress theme boilerplate — semantic HTML5 templates, Customizer settings, widget areas, navigation menus and performance-first asset enqueues. A solid starting point for custom themes and a reference for learning proper theme architecture.

## What's included

| File / directory | Purpose |
|---|---|
| `style.css` | Theme header + small readable baseline stylesheet (CSS variables) |
| `functions.php` | Theme setup, menus, widget areas, asset enqueues, Customizer CSS |
| `header.php` / `footer.php` / `sidebar.php` | Site chrome with `wp_head`, `wp_footer`, `wp_body_open` |
| `index.php` | Main blog/archive loop with pagination |
| `single.php` | Single post template (hero image, content, nav, comments) |
| `page.php` | Static page template |
| `404.php` | Not-found template with search form |
| `template-parts/content.php` | Reusable post card for archive loops |
| `inc/customizer.php` | Customizer settings: accent colour + footer credit text |
| `assets/js/main.js` | Tiny vanilla-JS enhancement (scroll class) |

## Features

- `title-tag`, post thumbnails, HTML5 markup, feed links, custom logo
- Primary + footer navigation menus (page-menu fallback)
- Sidebar + footer widget areas with selective-refresh support
- Custom image sizes: `starter-card` (640×360), `starter-hero` (1600×900)
- Accent colour + footer credit text via the Customizer (`--accent` CSS variable)
- Translation-ready (`starter-theme` text domain)
- Escaped output throughout, no dependencies, no build step

## Install

1. Copy this folder into `wp-content/themes/` (or zip and upload via Appearance → Themes).
2. Activate "Starter Theme".
3. Customise under Appearance → Customize (Site Identity, Colours, Footer).
4. Style freely — `style.css` is meant to be replaced or extended.

## License

MIT — see [LICENSE](LICENSE).
