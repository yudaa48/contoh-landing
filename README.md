# Terralogiq

Custom WordPress theme for [Terralogiq website](https://terralogiq.com/).

## Installation

1. Install WordPress on your computer.
2. Clone this repository inside `/wp-content/themes` folder.
3. Create empty pages to show the page:
	1. Home: Index page.
	2. Blog: Blog posts page with permalink `blog`.
	3. About Us: About Us page with permalink `about-us`.
	4. Services: Services page with permalink `services`.
	5. Projects: Projects page with permalink `projects`.
	6. Appsensi: Appsensi page with permalink `appsensi`.
	7. Case Study: Case Study page with permalink `case-study`.
	8. Case Study Paxel: Case Study page with permalink `case-study-paxel`.
	9. Case Study Halodoc: Case Study page with permalink `case-study-halodoc`.
	10. Case Study Sayurbox: Case Study page with permalink `case-study-sayurbox`.
	11. Case Study BPS: Case Study page with permalink `case-study-BPS`.
	12. Privacy Policy: Privacy Policy page with permalink `privacy-policy`.
	12. Terms and Conditions: Terms and Conditions page with permalink `terms-and-conditions`.
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

### Contact Form Product/Services list

We use WPForm to generate contact form. Don't forget to change form id in `/template-parts/content-contact.php`.

```
<?php echo do_shortcode('[wpforms id="{{ form_id }}" title="false" description="false"]'); ?>
```

- Google Maps
- Geospatial
- Location Intelligence
- Mobility Solutions
- Projects
- Consultations
- Others

## Licenses

- Underscores is licensed under [GPLv2](https://opensource.org/licenses/gpl-2.0.php).
