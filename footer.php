<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Terralogiq
 */
?>

	<?php get_template_part( 'template-parts/content-contact' ); ?>

	<footer class="mt-auto">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 mb-4">
					<p>Menu</p>

					<ul class="list-unstyled">
						<li>
							<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/services/">Services</a>
						</li>
						<li>
							<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study/">Case Study</a>
						</li>
						<li>
							<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/projects/">Projects</a>
						</li>
						<li>
							<a href="Https://www.appsensi.com/" target="_blank">Appsensi</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-3 mb-4">
					<p>Information</p>

					<ul class="list-unstyled">
						<li>
							<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/about-us/">About Us</a>
						</li>
						<li>
							<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/blog/">Blog</a>
						</li>
						<li>
							<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/privacy-policy/">Privacy Policy</a>
						</li>
						<li>
							<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/terms-and-conditions/">Terms & Conditions</a>
			 			</li>
					</ul>
				</div>

				<div class="col-sm-3 mb-4">
					<p>About Us</p>

					<p>We are the first and only Google Maps Premier Partner in Indonesia. Focusing on delivering Google geospatial products, solutions and services to add value to our customer's business.</p>
				</div>

				<div class="col-sm-3 mb-4"> 
					<p>Latest Article</p>
					<?php foreach (get_posts(array('numberposts' => 1)) as $post) : setup_postdata($post);?>
						<p><?php the_title(); ?></p>
						<small><?php echo get_the_date(); ?></small><br>

						<a href="<?php the_permalink(); ?>" target="_blank" class="text-white"> Learn More &rarr;</a>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="row border-top pt-3">
				<div class="col-sm-8 footer__copyright">
					Copyright &copy; <?php echo date('Y'); ?> PT. Terralogiq Integrasi Solusi
				</div>

				<div class="col-sm-4 footer__social-media">
					<a href="https://www.linkedin.com/company/terralogiq/" target="_blank">
						<img src="<?php echo get_theme_file_uri( 'assets/images/social-icon--linkedin.webp' ); ?>" alt="">
					</a>
					<a href="https://web.facebook.com/terralogiq.official" target="_blank">
						<img src="<?php echo get_theme_file_uri( 'assets/images/social-icon--facebook.webp' ); ?>" alt="">
					</a>
					<a href="https://www.instagram.com/terralogiq/" target="_blank">
						<img src="<?php echo get_theme_file_uri( 'assets/images/social-icon--instagram.webp' ); ?>" alt="">
					</a>
					<a href="https://www.youtube.com/channel/UCxSxEAF-FFgOI8oEsBmUzuQ" target="_blank">
						<img src="<?php echo get_theme_file_uri( 'assets/images/social-icon--youtube.webp' ); ?>" alt="">
					</a>
				</div>
			</div>
		</div>
		<!-- Start of HubSpot Embed Code -->
		<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/8611993.js"></script>
		<!-- End of HubSpot Embed Code -->
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
