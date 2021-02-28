<?php
/**
 * The single post template file
 *
 * Used when a single post is queried. For this and all other query templates,
 * index.php is used if the query template is not present.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Landing Page
 */

get_header();
?>

<main>
	<div class="container">
		<?php
		if ( have_posts() ) {
			$i = 0;

			while ( have_posts() ) {
				$i++;

				the_post();

				get_template_part( 'template-parts/content-single', get_post_type() );
			}
		}
		?>
	</div>
</main>

<?php get_footer(); ?>
