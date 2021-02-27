<?php
/**
 * The Services page template file
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#page-templates-within-the-template-hierarchy
 *
 * @package Terralogiq
 */

get_header();
?>
	<section class="section--banner-services">
		<div class="container">
			<div class="section--banner-services__content">
				<div class="row">
					<div class="col-md-10 col-lg-8 col-xl-8 services">
						<h1>Our Service</h1>

						<p class="lead">Our services have also developed beyond Google Maps. We offer platform and software development that specifically answers your business application requirements by exploiting the powerful capabilities of the Google Maps Platform. Our development approach and process have proven to align and accelerate the implementation of your location intelligence application.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--what-we-do">
		<div class="container">
			<h2>What We Do?</h2>

			<div class="row">
				<div class="col-md-4">
					<div class="section--what-we-do__icons">
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--geospatial.svg' ); ?>" alt="" class="mb-3">

						<h3>Geospatial</h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="section--what-we-do__icons">
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--location-intelligence.svg' ); ?>" alt="" class="mb-3">

						<h3>Location Intelligence</h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="section--what-we-do__icons">
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--mobility-solution.svg' ); ?>" alt="" class="mb-3">

						<h3>Mobility Solution</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--google-maps">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 section--google-maps__demo section--google-maps__demo--maps">
					<img src="<?php echo get_theme_file_uri( 'assets/images/demo--geospatial.webp' ); ?>" alt="" class="w-100">
				</div>
				<div class="col-sm-6 section--google-maps__description">
					<div>
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--section--geospatial.svg' ); ?>" height="30" alt="" class="mr-3"> <h3>Geospatial</h3>

						<p class="lead">Analyze and map your existing data and plan into actionable insights visualized on your rich, interactive dashboard, so you can get to the “where” as well as the “why”.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--google-maps">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 order-1 order-sm-2 section--google-maps__demo section--google-maps__demo--routes">
					<img src="<?php echo get_theme_file_uri( 'assets/images/demo--location-intelligence.webp' ); ?>" alt="" class="w-100">
				</div>
				<div class="col-sm-6 order-2 order-sm-1 section--google-maps__description">
					<div>
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--section--location-intelligence.svg' ); ?>" height="30" alt="" class="mr-3"><h3> Location Intelligence</h3>

						<p class="lead">Gain new levels of insight to your existing mapping solution by adding location tracking features, real-time data of nearby locations and even latest street-level pictures of your locations.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--google-maps">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 section--google-maps__demo section--google-maps__demo--places">
					<img src="<?php echo get_theme_file_uri( 'assets/images/demo--mobility-solution.webp' ); ?>" alt="" class="w-100">
				</div>
				<div class="col-sm-6 section--google-maps__description">
					<div>
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--section--mobility-solution.svg' ); ?>" height="30" alt="" class="mr-3"><h3> Mobility Solution</h3>

						<p class="lead">Integrate your mapping solutions with our mobility solution and instantly track your employees, assets, or even receive real-time reports including pictures and videos from your mobile workforce on the field.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--how-we-do">
		<div class="container">
			<h2>How We Do It?</h2>

			<div class="row mb-5">
				<div class="col-sm-8 offset-sm-2">
					We assist our clients to understand how Google Maps Platform Technology and our own Geospatial solutions can solve their operational and business issues.
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="section--how-we-do__icons">
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--support.svg' ); ?>" alt="" class="mb-3">

						<h3>Support & Account Management</h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="section--how-we-do__icons">
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--implementation.svg' ); ?>" alt="" class="mb-3">

						<h3>Implementation Services</h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="section--how-we-do__icons">
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--training.svg' ); ?>" alt="" class="mb-3">

						<h3>Training & Workshop</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
