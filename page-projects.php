<?php
/**
 * The Projects page template file
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#page-templates-within-the-template-hierarchy
 *
 * @package Terralogiq
 */

get_header();
?>

	<section class="section--banner-projects">
		<div class="container">
			<div class="section--banner-projects__content">
				<div class="row">
					<div class="col-md-10 col-lg-8 col-xl-8 services">
						<h1>Our Projects</h1>

						<p class="lead">Our development approach and process have proven to align and accelerate the implementation of your location intelligence application.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--google-maps">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 section--google-maps__demo section--google-maps__demo--maps">
					<img src="<?php echo get_theme_file_uri( 'assets/images/demo--yakult.webp' ); ?>" alt="" class="w-100">
				</div>
				<div class="col-lg-6 section--google-maps__description">
					<div>
						<h2><span class="font-weight-normal mr-2">Terralogiq for</span> Yakult</h2>

						<p class="lead">Analyze and map your existing data and plan into actionable insights visualized on your rich, interactive dashboard.</p>

						<div class="row">
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-yakult.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--google-maps">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 order-1 order-sm-2 section--google-maps__demo section--google-maps__demo--routes">
					<img src="<?php echo get_theme_file_uri( 'assets/images/demo--pgn.webp' ); ?>" alt="" class="w-100">
				</div>
				<div class="col-lg-6 order-2 order-sm-1 section--google-maps__description">
					<div>
						<h2><span class="font-weight-normal mr-2">Terralogiq for</span> PGN</h2>

						<p class="lead">Gain new levels of insight to your existing mapping solution by adding location tracking features, real-time data of nearby.</p>

						<div class="row">
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-pgn.webp' ); ?>" height="100" alt="" class="mb-3">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--google-maps">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 section--google-maps__demo section--google-maps__demo--places">
					<img src="<?php echo get_theme_file_uri( 'assets/images/demo--jne.webp' ); ?>" alt="" class="w-100">
				</div>
				<div class="col-lg-6 section--google-maps__description">
					<div>
						<h2><span class="font-weight-normal mr-2">Terralogiq for</span> JNE</h2>

						<p class="lead">Integrate your mapping solutions with our mobility solution and instantly track your employees.</p>

						<div class="row">
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-jne.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--our-methodology">
		<div class="container">
			<h2>Our Methodology</h2>

			<div class="row mt-5">
				<div class="col-md-4">
					<div class="section--our-methodology__icons">
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--section--design.svg' ); ?>" alt="" class="mb-3">

						<h3 class="lead">Design</h3>
						<p>We help design an outstanding vision for your application that eventually turns your ideas into actionable plans.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="section--our-methodology__icons">
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--section--develop.svg' ); ?>" alt="" class="mb-3">

						<h3 class="lead">Develop</h3>
						<p>We help turn your vision into reality using agile development cycle that includes quality assurance process every sprint cycle.</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="section--our-methodology__icons">
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--section--support.svg' ); ?>" alt="" class="mb-3">

						<h3 class="lead">Support</h3>
						<p>Ensure your app performs as it should. We provide a monitoring and maintanance service for teams who need the extra mile.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
