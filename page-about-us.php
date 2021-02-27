<?php
/**
 * The About Us page template file
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#page-templates-within-the-template-hierarchy
 *
 * @package Terralogiq
 */

get_header();
?>

<main>
	<section class="section--banner-about">
		<div class="container">
			<div class="section--banner-about__content">
				<div class="row">
					<div class="col-md-10 col-lg-8 col-xl-8 mobile services">
						<h1>About Us</h1>

						<p class="lead">Established in 2013, Terralogiq Integrasi Solusi has been leading Indonesian technology company specializing in Location Intelligence, bringing solutions to Startups, Private and State-Owned Enterprises, as well as Government bodies and agencies.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--why-us">
		<div class="container">
			<h2>Why Us?</h2>

			<div class="row">
				<div class="col-md-4">
					<div class="section--why-us__icons">
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--trophy.svg' ); ?>" alt="" class="mb-3">

						<h3 class="lead">Best Certified Talents</h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="section--why-us__icons">
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--monas.svg' ); ?>" alt="" class="mb-3">

						<h3 class="lead">Number One Google Premium Partner in Indonesia</h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="section--why-us__icons">
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--grow.svg' ); ?>" alt="" class="mb-3">

						<h3 class="lead">Supporting Local Talents to Grow</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--our-story">
		<div class="container">
			<h2>Our Story</h2>

			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<p> Terralogiq is the leading local tech company and Google Cloud Premier Partner that provides Geospatial, Location Intelligence and Mobility Solution in Indonesia.</p>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-6 offset-lg-3 col-lg-3 col-12 mt-5">
					<div class="card border-primary">
						<div class="card-body text-center">
							<p>8 Years</p>
							<p class="lead">of experience</p>
						</div>
					</div>
				</div>
				<div class="col-6 col-lg-3 col-12 mt-5">
					<div class="card border-primary">
						<div class="card-body text-center">
							<p>108</p>
							<p class="lead">Clients</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--google-maps">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 section--google-maps__demo section--google-maps__demo--maps">
					<img src="<?php echo get_theme_file_uri( 'assets/images/demo--vision.webp' ); ?>" alt="" class="w-100">
				</div>
				<div class="col-sm-6 section--google-maps__description">
					<div>
						<h2>Our Vision</h2>

						<p class="lead">To build a reputation as a knowledgeable and highly regarded company for Geospatial, Location Intelligence & Mobility Solutions in Indonesia.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--google-maps">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 order-1 order-sm-2 section--google-maps__demo section--google-maps__demo--routes">
					<img src="<?php echo get_theme_file_uri( 'assets/images/demo--mission.webp' ); ?>" alt="" class="w-100">
				</div>
				<div class="col-sm-6 order-2 order-sm-1 section--google-maps__description">
					<div>
						<h2>Our Mission</h2>

						<p class="lead">Terralogiq is a Tech Company and Google Cloud Premier Partner that provides Geospatial, Location Intelligence and Mobility Solution in Indonesia.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
