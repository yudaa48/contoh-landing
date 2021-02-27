<?php
/**
 * The Case Study page template file
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#page-templates-within-the-template-hierarchy
 *
 * @package Terralogiq
 */

get_header();
?>

	<section class="section--banner-case-study--bps">
	</section>

	<section class="section--case-study--bps">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mb-5">
					<h2>Wilkerstat: Census and Survey in the Digital Era</h2>
				</div>
				<div class="col-lg-4 mb-5">
					<h3>Google Maps Result</h3>

					<ul>
						<li>Improves location accuracy with precise location data on Google Maps.</li>
						<li>Improve user experience while use the apps.</li>
					</ul>
				</div>
				<div class="col-lg-4 mb-5">
					<h3>About Badan Pusat Statistik</h3>

					<p class="lead">Badan Pusat Statistik is the national agency that provides data to the government and public gathered from census and statistical surveys.<br><br>
					Industry: Government<br>
					Location: Indonesia<br>
					Product: Google Maps Platform</p>
				</div>
			</div>
		</div>
	</section>

	<section class="section--case-study--bps__content">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-12 col-md-12 case-study-bps">
					<h4>Case Study</h4>
					<p>Statistics Indonesia, locally known as BPS (Indonesian: Badan Pusat Statistik, literally Central Agency on Statistics), is a Non-Ministry Government Agency of Indonesia that is responsible for conducting statistical surveys. Its main customer is the government, but statistical data is also available to the public. Annual surveys include national and provincial socio-economics, manufacturing establishments, population and the labour force.<br><br>
					The Google Maps Platform helps Statistics Indonesia ease the problems faced by the agency in verifying census data or field surveys.</p>

					<div class="text-center mt-4 mb-5">
						<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--bps-1.webp' ); ?>" class="w-100" alt="">
					</div>

					<h4>Resolving census officer work area problems</h4>
					<p>During the application development for Statistics Indonesia, the problems they faced when conducting a census or survey directly in the field were difficulties for field officers updating geographic data in the field and supervisors verifying updates in the back office due to inaccurate location data.<br><br>
					During the application development for Statistics Indonesia, the problems they faced when conducting a census or survey directly in the field were difficulties for field officers updating geographic data in the field and supervisors verifying updates in the back office due to inaccurate location data.<br><br>
					The application developed by Statistics Indonesia in collaboration with Google Maps Platform is named Wilkerstat. This application has several features that can make it easier for census or survey officers to do their work in the field.</p>
					<div class="col-md-12 col-12">
						<div class="card bg-primary text-center">
							<div class="card-body text-white">
								<h5>“We chose Google Maps Platform for our Wilkerstat application because of the richness and accuracy of its data. Terralogiq helped us with identifying the right Google Maps APIs.”</h5><br>

								<h5><i>Lisa Ginting, Kasubdit Pengembangan Pemetaan Statistik - Badan Pusat Statistik</i></h5>
							</div>
						</div>
					</div>

					<div class="text-center mt-4 mb-5">
						<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--bps-2.webp' ); ?>" class="w-100" alt="">
					</div>

					<h4>Improve user experience</h4>
					<br><p>Since using Google Maps Platform, in addition to the accuracy and accuracy of the work area of the census officers, it has been obtained. The Statistics Indonesia also enhances the user experience by using an interactive map that allows you to customize the drag, pinch to zoom-in/zoom-out. Field officers did not take long to be able to operate the Wilkerstat application because they were familiar with Google Maps so there was minimal training in using the application as well.</p>

					<div class="text-center mt-4 mb-5">
						<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--bps-3.webp' ); ?>" class="w-50" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--case-study-carousel">
		<div class="container">
			<div id="carouselCaseStudyControlsSM" class="carousel slide d-block d-sm-none" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-12 case-study-ml-5">
								<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-sayurbox/">
									<div class="d-block">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--sayurbox.webp' ); ?>" alt="" class="mb-4">
									</div>

									<h5>First Farm-to-Table e-Commerce concept in Indonesia</h5>
									<img src="<?php echo get_theme_file_uri( 'assets/images/client-sayurbox.webp' ); ?>" class="" alt="">
								</a>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-12 case-study-ml-5">
								<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-halodoc/">
									<div class="d-block">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--halodoc.webp' ); ?>" alt="" class="mb-4">
									</div>

									<h5>Simplifying Access to Indonesian Health Based on Digital Technology</h5>
									<img src="<?php echo get_theme_file_uri( 'assets/images/client-halodoc.webp' ); ?>" class="" alt="">
								</a>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-12 case-study-ml-5">
								<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-paxel/">
									<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--paxel.webp' ); ?>" alt="" class="mb-4">

									<h5>Paxel Fulfill SLA For 99% - 99.5% Successful Delivery On Time</h5>
									<img src="<?php echo get_theme_file_uri( 'assets/images/client-paxel.webp' ); ?>" class="" alt="">
								</a>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-12 case-study-ml-5">
								<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-bps/">
									<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--bps.webp' ); ?>" alt="" class="mb-4 w-100">

									<h5>Wilkerstat: Census and Survey in the Digital Era</h5>
									<img src="<?php echo get_theme_file_uri( 'assets/images/client-bps.webp' ); ?>" class="w-25" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="carouselCaseStudyControlsMD" class="carousel slide d-none d-sm-block d-md-block d-lg-block d-xl-none" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-6 case-study-ml-5">
								<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-sayurbox/">
									<div class="d-block">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--sayurbox.webp' ); ?>" alt="" class="mb-4 img-case-study">
									</div>

									<h5>First Farm-to-Table e-Commerce concept in Indonesia</h5>
									<img src="<?php echo get_theme_file_uri( 'assets/images/client-sayurbox.webp' ); ?>" class="" alt="">
								</a>
							</div>
							<div class="col-6 case-study-ml-5">
								<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-halodoc/">
									<div class="d-block">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--halodoc.webp' ); ?>" alt="" class="mb-4 img-case-study">
									</div>

									<h5>Simplifying Access to Indonesian Health Based on Digital Technology</h5>
									<img src="<?php echo get_theme_file_uri( 'assets/images/client-halodoc.webp' ); ?>" class="" alt="">
								</a>	
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-6 case-study-ml-5">
								<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-paxel/">
									<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--paxel.webp' ); ?>" alt="" class="mb-4 img-case-study">

									<h5>Paxel Fulfill SLA For 99% - 99.5% Successful Delivery On Time</h5>
									<img src="<?php echo get_theme_file_uri( 'assets/images/client-paxel.webp' ); ?>" class="" alt="">
								</a>
							</div>
							<div class="col-6 case-study-ml-5">
								<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-bps/">
									<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--bps.webp' ); ?>" alt="" class="mb-4 img-case-study">

									<h5>Wilkerstat: Census and Survey in the Digital Era</h5>
									<img src="<?php echo get_theme_file_uri( 'assets/images/client-bps.webp' ); ?>" class="logo-case-study-bps" alt="">
								</a>								
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="carouselCaseStudyControlsLG" class="carousel slide d-none d-xl-block" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-6 case-study-ml-5">
								<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-sayurbox/">
									<div class="d-block">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--sayurbox.webp' ); ?>" alt="" class="mb-4 img-case-study">
									</div>

									<h5>First Farm-to-Table e-Commerce concept in Indonesia</h5>
									<img src="<?php echo get_theme_file_uri( 'assets/images/client-sayurbox.webp' ); ?>" class="" alt="">
								</a>
							</div>
							<div class="col-6 case-study-ml-5">
								<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-halodoc/">
									<div class="d-block">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--halodoc.webp' ); ?>" alt="" class="mb-4 img-case-study">
									</div>

									<h5>Simplifying Access to Indonesian Health Based on Digital Technology</h5>
									<img src="<?php echo get_theme_file_uri( 'assets/images/client-halodoc.webp' ); ?>" class="" alt="">
								</a>	
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-6 case-study-ml-5">
								<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-paxel/">
									<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--paxel.webp' ); ?>" alt="" class="mb-4 img-case-study">

									<h5>Paxel Fulfill SLA For 99% - 99.5% Successful Delivery On Time</h5>
									<img src="<?php echo get_theme_file_uri( 'assets/images/client-paxel.webp' ); ?>" class="" alt="">
								</a>
							</div>
							<div class="col-6 case-study-ml-5">
								<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-bps/">
									<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--bps.webp' ); ?>" alt="" class="mb-4 img-case-study">

									<h5>Wilkerstat: Census and Survey in the Digital Era</h5>
									<img src="<?php echo get_theme_file_uri( 'assets/images/client-bps.webp' ); ?>" class="logo-case-study-bps mt-3" alt="">
								</a>								
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselCaseStudyControlsLG" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselCaseStudyControlsLG" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
