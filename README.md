# Contoh Landing Page

Custom WordPress theme for Contoh Landing Page

## Installation

1. Install WordPress on your computer.
2. Clone this repository inside `/wp-content/themes` folder.
3. Create empty pages to show the page:
	1. Home: Index page.
	2. Blog: Blog posts page with permalink `blog`.
4. Set index page to display static page:
	1. Set **Your homepage displays** to **A static page** with these settings:
		- Homepage -> Home
		- Posts page -> Blog
	2. Save changes.
5. Open `Settings > Permalink` and set **Common settings** to **Post name**. Save changes.
6. Activate theme on `Appearances > Themes`.

## Development

1. Run `npm install` to download dependencies.
2. Run `npm run watch` to automatically build after changes are saved.
3. Run `npm run build` to build and minimize assets for production.

## References

- [Underscores Starter Theme](https://underscores.me)
- [WordPress Theme Development Handbook](https://developer.wordpress.org/themes/)

### Difference between `/assets/images` and `/src/assets/images`

- `/assets/images` to store icons and other assets
- `/src/assets/images` to store background images called by `url()` from `.scss` files