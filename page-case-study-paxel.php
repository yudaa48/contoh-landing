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

	<section class="section--banner-case-study--paxel">
	</section>

	<section class="section--case-study--paxel">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mb-5">
					<h2>Paxel Fulfill SLA For 99%-99.5% Successful Delivery On Time</h2>
				</div>
				<div class="col-lg-4 mb-5">
					<h3>Google Maps Result</h3>

					<ul>
						<li>Improves delivery accuracy with precise location data on Google Maps.</li>
						<li>Reducing 99% pickup and delivery time.</li>
						<li>Simplifies pickup/delivery process with autocomplete prompts in search bar.</li>
						<li>Easiest drag marker for location pickup/ delivery with mobile dynamic map.</li>
						<li>Improves user experience while using the application.</li>
					</ul>
				</div>
				<div class="col-lg-4 mb-5">
					<h3>About Paxel</h3>

					<p class="lead">Paxel is a modern logistics company that has experience and expertise in freight pick-up and same-day delivery services. Has 1.7 million users and 4.1 million shipments spread across 13 major cities in Indonesia.<br><br>
					Industry: Logistics<br>
					Location: Indonesia<br>
					Product: Google Maps Platform</p>
				</div>
			</div>
		</div>
	</section>

<!-- 	<section class="section--subscription">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-12 col-md-12 card">
					<p>Subscribe for reading the article</p>
					<form method="POST" name="form-subscribe">
						<div class="row">
							<div class="col-12 col-lg-12 col-md-12">
								<p>Name*</p>
								<input type="text" name="subs_name" placeholder="Full Name*" required="">								
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 col-lg-12 col-md-12">
								<p>Email*</p>
								<input type="text" name="subs_email" placeholder="Email Address*" required="">								
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-12 col-lg-12 col-md-12">
								<p><button type="submit" class="btn btn-primary" name="submitForm">Submit</button></p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section> -->

<?php 
	// require_once('./wp-load.php');

 //    function insertuser() {

 //      $name   = $_POST['subs_name'];
 //      $email  = $_POST['subs_email'];  

 //     global $wpdb; 
 //      $table_name = $wpdb->prefix . "subscriber";
 //      $wpdb->insert($table_name, array('subs_name' => $name, 'subs_email' => $email) );
 //      }

	// if( isset($_POST['submitForm']) ) insertuser();
?>

	<section class="section--case-study--paxel__content">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-12 col-md-12 case-study">
					<h4>Case Study</h4>
					<p>Indonesia is a country that is geographically spread over 17,000 islands and stretches for 3,200 miles. With the breadth and number of islands in Indonesia, causing the movement of goods from one location to another is also a special concern for logistics industry players in Indonesia.<br><br>
					Established in 2017 and headquartered in Jakarta, Paxel is established with modern goods pick-up and drop-off services in Indonesia. With an investment value of USD $ 7 million, Paxel is able to grow bigger and better known by the wider community so that it has a number of users of more than 1.7 million people spread across major cities in Indonesia including Jakarta, Bogor, Depok, Tangerang, Bekasi, Bandung, Semarang, Solo, Yogyakarta, Malang, Surabaya, Denpasar, Makassar, and will continue to expand to all logistics markets in Indonesia.<br><br>
					Paxel is the first logistics company in Indonesia to implement the same day delivery service between cities in Indonesia. For a distance of 5-10 km, Paxel has instant same day delivery service, while for shipments between big cities, for example Jakarta-Bandung or Surabaya-Bali, offers same day delivery service with a delivery time of 3-4 hours.</p>

					<div class="text-center mt-4 mb-5">
						<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--paxel-1.webp' ); ?>" class="w-100" alt="">
					</div>

					<h4>Helping couriers deliver goods accurately</h4>
					<p>Paxel realizes that the biggest logistical problem in Indonesia is location and address, and this has become Paxel's concern in developing an application for delivery and pick-up services. When a customer enters the address manually, how can Paxel know that the address is valid, accurate and still valid. There are several indicators that are of concern in writing an address including city name, zip code and others.<br><br>
					When customers enter address information without a system or mechanism that can validate the address, this can cause ‘Hero’ (as Paxel's courier) spends a lot of time making calls to the recipient of the goods and looking for the real address. Paxel is really trying to reduce these risks as soon as possible.<br><br>
					As a new player in the logistics business, Paxel didn't want to spend a lot of time validating one by one whether the addresses were correct or wrong, so Paxel decided to use the Google Maps Platform service. If your address is on Google Maps and within reach of Paxel, then Paxel will send goods to that address.</p>

					<div class="text-center mt-4 mb-5">
						<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--paxel-2.webp' ); ?>" class="w-100" alt="">
					</div>

					<h4>Reduces pick-up and delivery time</h4>
					<div class="col-md-12 col-12">
						<div class="card bg-primary text-center">
							<div class="card-body text-white">
								<h5>“The result is that after Paxel used GMP, Paxel can also achieve SLAs in pick-up and <br> delivery services with up to 99 - 99.5% punctuality”</h5><br>

								<h5><i>Erick Soedjasa - CTO Paxel</i></h5>
							</div>
						</div>
					</div>
					<br><p>Since using the Google Maps Platform, in addition to the accuracy and accuracy of the addresses obtained, Paxel can also achieve SLAs in shuttle and pick-up services with up to 99 - 99.5% timeliness. This is important because Paxel has a policy on service guarantee (SLA) for Paxel users, where moreover there is a delay in the delivery and pick-up service, a full refund of shipping costs will be applied to its customers. By ensuring address accuracy and by building the right system, Paxel can fulfill its service guarantee policy (SLA) without risking the company's revenue.</p>

					<div class="text-center mt-4 mb-5">
						<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--paxel-3.webp' ); ?>" class="w-50" alt="">
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
