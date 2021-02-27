<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Terralogiq
 */

get_header();
?>

	<section class="section--banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<h1>The First and Only Google Maps Premier Partner in Indonesia</h1>

					<p>We are a Tech Company that provides Geospatial, Location Intelligence and Mobility Solutions</p>

					<p>As used by</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-xl-5 mb-5">
					<div class="section--banner__clients" style="padding: 1rem;">
						<img src="<?php echo get_theme_file_uri( 'assets/images/client-halodoc.webp' ); ?>" height="30" alt="">
						<img src="<?php echo get_theme_file_uri( 'assets/images/client-bca.webp' ); ?>" height="30" alt="">
						<img src="<?php echo get_theme_file_uri( 'assets/images/client-sayurbox.webp' ); ?>" height="30" alt="">
					</div>
				</div>
				<div class="col-md-6 offset-lg-2 offset-xl-3 col-lg-4 card-custom">
					<div class="card bg-primary">
						<div class="card-body">
							<h2 style="word-spacing: 0.1rem; letter-spacing: 0.1rem;">Learn More <br>with Google Maps</h2>

							<a href="https://pages.terralogiq.com/ebook/id" class="section--banner__cta" target="_blank">Start Now &rarr;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--google-maps">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 section--google-maps__demo section--google-maps__demo--map">
					<div class="embed-responsive embed-responsive-4by3">
						<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="embed-responsive-item">
							<source src="<?php echo get_theme_file_uri( 'assets/images/demo--maps.webp' ); ?>" type="image/webp"/>
						</video>
					</div>
				</div>
				<div class="col-sm-6 section--google-maps__description">
					<div>
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--section--maps.svg' ); ?>" height="30" alt="" class="mr-3"> <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study/"> <h3>Maps</h3></a>

						<p class="lead">Build customized, agile experiences that bring the real world to your users with static and dynamic maps, Street View imagery and 360&deg; views.</p>

						<div class="row">
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-telkomsel.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-xl-axiata.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-pertamina.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-prodia.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-fore.webp' ); ?>" height="30" alt="" class="mb-3">
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
				<div class="col-sm-6 order-1 order-sm-2 section--google-maps__demo section--google-maps__demo--route">
					<div class="embed-responsive embed-responsive-4by3">
						<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="embed-responsive-item">
							<source src="<?php echo get_theme_file_uri( 'assets/images/demo--routes.webp' ); ?>" type="image/webp"/>
						</video>
					</div>
				</div>
				<div class="col-sm-6 order-2 order-sm-1 section--google-maps__description">
					<div>
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--section--routes.svg' ); ?>" height="30" alt="" class="mr-3"> <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study/"><h3>Routes</h3></a>
						
						<p class="lead">Help your users find the best way to get from A to Z with comprehensive data and real-time traffic.</p>

						<div class="row">
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-gojek.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-paxel.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-djarum.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-jne.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-id-express.webp' ); ?>" height="30" alt="" class="mb-3">
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
				<div class="col-sm-6 section--google-maps__demo section--google-maps__demo--place">
					<div class="embed-responsive embed-responsive-4by3">
						<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="embed-responsive-item">
							<source src="<?php echo get_theme_file_uri( 'assets/images/demo--places.webp' ); ?>" type="image/webp"/>
						</video>
					</div>
				</div>
				<div class="col-sm-6 section--google-maps__description">
					<div>
						<img src="<?php echo get_theme_file_uri( 'assets/images/icon--section--places.svg' ); ?>" height="30" alt="" class="mr-3"> <a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study#places/"><h3> Places</h3> </a>

						<p class="lead">Help users discover the world with rich location data for over 100 million places. Enable them to find specific places using phone numbers, addresses, and real-time signals.</p>

						<div class="row">
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-mcd.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-bca.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-pln.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-alfamart.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
							<div class="col-4">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client-sari-roti.webp' ); ?>" height="30" alt="" class="mb-3">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--client-testimoni">
		<div class="container">
			<h2>Clients Testimonial</h2>
			<p class="text-center mb-5">What happy clients said about us</p>

			<div id="carouselClientTestimoniControls" class="carousel slide d-block d-sm-none" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselClientTestimoniControls" data-slide-to="0" class="active"></li>
					<li data-target="#carouselClientTestimoniControls" data-slide-to="1"></li>
					<li data-target="#carouselClientTestimoniControls" data-slide-to="2"></li>
					<li data-target="#carouselClientTestimoniControls" data-slide-to="3"></li>
					<li data-target="#carouselClientTestimoniControls" data-slide-to="4"></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-12">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>We choose Google Maps Platform for our Wilkerstat application because of the richness and accuracy of its data. Terralogiq helped us with identifying the right Google Maps APIs.</p><br>

										<div class="row">
											<div class="col-8">
												<div class="section--client-testimoni__client-id">
													<span>Lisa Ginting</span><br>
													<span>Head of Sub Directorate -</span><br>
													<span>Badan Pusat Statistik</span>
												</div>
											</div>
											<div class="col-4">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-bps.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-12">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>The kind of relationship that we have enjoyed with Terralogiq, I think has been proven very important to us. Like you are able to help us. Bring us some insight into new offerings from Google directly.</p><br>

										<div class="row">
											<div class="col-8">
												<div class="section--client-testimoni__client-id">
													<span>Erick Soedjasa</span><br>
													<span>CTO - Paxel</span>
												</div>
											</div>
											<div class="col-4">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-paxel.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-12">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>It's simple, you guys (Terralogiq) give solutions that work and it's proven. My cost reduces nearly by 50%. So nothing can beat that.</p><br><br>

										<div class="row">
											<div class="col-8">
												<div class="section--client-testimoni__client-id">
													<span>Rama Notowidigdo</span><br>
													<span>CTO - Sayurbox</span>
												</div>
											</div>
											<div class="col-4">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-sayurbox.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-12">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>Our partnership with Google Maps and Terralogiq really helped us in implementing an application that is very user friendly with fast data updating.</p><br>

										<div class="row">
											<div class="col-8">
												<div class="section--client-testimoni__client-id">
													<span>Darmawan Apriyadi</span><br>
													<span>Head of Administration -</span><br>
													<span>Dinas PM & PTSP Provinsi DKI Jakarta</span>
												</div>
											</div>
											<div class="col-4">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-ptsp-dki-jakarta.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-12">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>Terralogiq  are highly specialized and experienced in what they do. The project was our first step in our digital transformation journey, we had to have the right partner.</p><br>

										<div class="row">
											<div class="col-8">
												<div class="section--client-testimoni__client-id">
													<span>John Rembet</span><br>
													<span>Kabid E-Government</span><br>
													<span>DKIPS Sulut</span>
												</div>
											</div>
											<div class="col-4">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-dkips-sulut.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="carouselClientTestimoniControlsSM" class="carousel slide d-none d-sm-block d-md-block d-lg-block d-xl-none" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselClientTestimoniControlsSM" data-slide-to="0" class="active"></li>
					<li data-target="#carouselClientTestimoniControlsSM" data-slide-to="1"></li>
					<li data-target="#carouselClientTestimoniControlsSM" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-6">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>We choose Google Maps Platform for our Wilkerstat application because of the richness and accuracy of its data. Terralogiq helped us with identifying the right Google Maps APIs.</p>

										<div class="row">
											<div class="col-8 col-lg-9">
												<div class="section--client-testimoni__client-id">
													<span>Lisa Ginting</span><br>
													<span>Head of Sub Directorate -</span><br>
													<span>Badan Pusat Statistik</span>
												</div>
											</div>
											<div class="col-4 col-lg-3">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-bps.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>The kind of relationship that we have enjoyed with Terralogiq, I think has been proven very important to us. Like you are able to help us. Bring us some insight into new offerings from Google directly.</p>

										<div class="row">
											<div class="col-8 col-lg-9">
												<div class="section--client-testimoni__client-id">
													<span>Erick Soedjasa</span><br>
													<span>CTO - Paxel</span>
												</div>
											</div>
											<div class="col-4 col-lg-3">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-paxel.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-6">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>It's simple, you guys (Terralogiq) give solutions that work and it's proven. My cost reduces nearly by 50%. So nothing can beat that.</p><br>

										<div class="row">
											<div class="col-8 col-lg-9">
												<div class="section--client-testimoni__client-id">
													<span>Rama Notowidigdo</span><br>
													<span>CTO - Sayurbox</span>
												</div>
											</div>
											<div class="col-4 col-lg-3">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-sayurbox.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>Our partnership with Google Maps and Terralogiq really helped us in implementing an application that is very user friendly with fast data updating.</p><br>

										<div class="row">
											<div class="col-8 col-lg-9">
												<div class="section--client-testimoni__client-id">
													<span>Darmawan Apriyadi</span><br>
													<span>Head of Administration -</span><br>
													<span>Dinas PM & PTSP Provinsi DKI Jakarta</span>
												</div>
											</div>
											<div class="col-4 col-lg-3">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-ptsp-dki-jakarta.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-6 offset-3">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>Terralogiq  are highly specialized and experienced in what they do. The project was our first step in our digital transformation journey, we had to have the right partner.</p><br>

										<div class="row">
											<div class="col-8 col-lg-9">
												<div class="section--client-testimoni__client-id">
													<span>John Rembet</span><br>
													<span>Kabid E-Government</span><br>
													<span>DKIPS Sulut</span>
												</div>
											</div>
											<div class="col-4 col-lg-3">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-dkips-sulut.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="carouselClientTestimoniControlsXL" class="carousel slide d-none d-xl-block" data-ride="carousel">
				<div class="carousel-inner ml-5">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-5 ml-5">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>We choose Google Maps Platform for our Wilkerstat application because of the richness and accuracy of its data. Terralogiq helped us with identifying the right Google Maps APIs.</p>

										<div class="row">
											<div class="col-8">
												<div class="section--client-testimoni__client-id">
													<span>Lisa Ginting</span><br>
													<span>Head of Sub Directorate -</span><br>
													<span>Badan Pusat Statistik</span>
												</div>
											</div>
											<div class="col-4">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-bps.webp' ); ?>" alt="" class="w-75" style="margin-left: 15px;">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-5">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>The kind of relationship that we have enjoyed with Terralogiq, I think has been proven very important to us. Like you are able to help us. Bring us some insight into new offerings from Google directly.</p>

										<div class="row">
											<div class="col-8">
												<div class="section--client-testimoni__client-id">
													<span>Erick Soedjasa</span><br>
													<span>CTO - Paxel</span>
												</div>
											</div>
											<div class="col-4">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-paxel.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-5 ml-5">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>It's simple, you guys (Terralogiq) give solutions that work and it's proven. My cost reduces nearly by 50%. So nothing can beat that.</p><br>

										<div class="row">
											<div class="col-8">
												<div class="section--client-testimoni__client-id">
													<span>Rama Notowidigdo</span><br>
													<span>CTO - Sayurbox</span>
												</div>
											</div>
											<div class="col-4">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-sayurbox.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-5">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>Our partnership with Google Maps and Terralogiq really helped us in implementing an application that is very user friendly with fast data updating.</p><br>

										<div class="row">
											<div class="col-8">
												<div class="section--client-testimoni__client-id">
													<span>Darmawan Apriyadi</span><br>
													<span>Head of Administration -</span><br>
													<span>Dinas PM & PTSP Provinsi DKI Jakarta</span>
												</div>
											</div>
											<div class="col-4">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-ptsp-dki-jakarta.webp' ); ?>" alt="" class="w-100">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-5 ml-5">
								<div class="card border-0">
									<div class="card-body">
										<div class="d-block">
											<img src="<?php echo get_theme_file_uri( 'assets/images/icon--quotes.svg' ); ?>" alt="" class="mb-4">
										</div>

										<p>Terralogiq  are highly specialized and experienced in what they do. The project was our first step in our digital transformation journey, we had to have the right partner.</p><br>

										<div class="row">
											<div class="col-8">
												<div class="section--client-testimoni__client-id">
													<span>John Rembet</span><br>
													<span>Kabid E-Government</span><br>
													<span>DKIPS Sulut</span>
												</div>
											</div>
											<div class="col-4">
												<div class="section--client-testimoni__client-logo">
													<img src="<?php echo get_theme_file_uri( 'assets/images/client-dkips-sulut.webp' ); ?>" alt="" class="w-75" style="margin-left: 0.7rem;">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<a class="carousel-control-prev" href="#carouselClientTestimoniControlsXL" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselClientTestimoniControlsXL" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>

	<section class="section--clients">
		<div class="container">
			<h2>Our Respected Clients</h2>
			<p class="text-center mb-5">What happy clients said about us</p>

			<div id="carouselClientsControls" class="carousel slide d-block d-sm-none" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselClientsControls" data-slide-to="0" class="active"></li>
					<li data-target="#carouselClientsControls" data-slide-to="1"></li>
					<li data-target="#carouselClientsControls" data-slide-to="2"></li>
					<li data-target="#carouselClientsControls" data-slide-to="3"></li>
					<li data-target="#carouselClientsControls" data-slide-to="4"></li>
					<li data-target="#carouselClientsControls" data-slide-to="5"></li>
					<li data-target="#carouselClientsControls" data-slide-to="6"></li>
					<li data-target="#carouselClientsControls" data-slide-to="7"></li>
					<li data-target="#carouselClientsControls" data-slide-to="8"></li>
					<li data-target="#carouselClientsControls" data-slide-to="9"></li>
					<li data-target="#carouselClientsControls" data-slide-to="10"></li>
					<li data-target="#carouselClientsControls" data-slide-to="11"></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-1-xs.webp' ); ?>" height="55" alt="" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-2-xs.webp' ); ?>" height="55" alt="" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-3-xs.webp' ); ?>" height="55" alt="" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-4-xs.webp' ); ?>" height="55" alt="" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-5-xs.webp' ); ?>" height="55" alt="" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-6-xs.webp' ); ?>" height="55" alt="" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-7-xs.webp' ); ?>" height="55" alt="" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-8-xs.webp' ); ?>" height="55" alt="" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-9-xs.webp' ); ?>" height="55" alt="" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-10-xs.webp' ); ?>" height="55" alt="" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-11-xs.webp' ); ?>" height="55" alt="" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-12-xs.webp' ); ?>" height="55" alt="" class="my-3 mx-3">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="carouselClientsControlsSM" class="carousel slide d-none d-sm-block d-md-block d-lg-block d-xl-none" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselClientsControlsSM" data-slide-to="0" class="active"></li>
					<li data-target="#carouselClientsControlsSM" data-slide-to="1"></li>
					<li data-target="#carouselClientsControlsSM" data-slide-to="2"></li>
					<li data-target="#carouselClientsControlsSM" data-slide-to="3"></li>
					<li data-target="#carouselClientsControlsSM" data-slide-to="4"></li>
					<li data-target="#carouselClientsControlsSM" data-slide-to="5"></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-1-sm.webp' ); ?>" class="my-3 mx-3 carousel-sm carousel-m">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-2-sm.webp' ); ?>" class="my-3 mx-3 carousel-sm carousel-m">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-3-sm.webp' ); ?>" class="my-3 mx-3 carousel-sm carousel-m">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-4-sm.webp' ); ?>" class="my-3 mx-3 carousel-sm carousel-m">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-5-sm.webp' ); ?>" class="my-3 mx-3 carousel-sm carousel-m">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-6-sm.webp' ); ?>" class="my-3 mx-3 carousel-sm carousel-m">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="carouselClientsControlsLG" class="carousel slide d-none d-xl-block" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselClientsControlsLG" data-slide-to="0" class="active"></li>
					<li data-target="#carouselClientsControlsLG" data-slide-to="1"></li>
					<li data-target="#carouselClientsControlsLG" data-slide-to="2"></li>
					<li data-target="#carouselClientsControlsLG" data-slide-to="3"></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-1.webp' ); ?>" height="60" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-2.webp' ); ?>" height="60" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-3.webp' ); ?>" height="60" class="my-3 mx-3">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="wrapper">
								<img src="<?php echo get_theme_file_uri( 'assets/images/client--slide-4.webp' ); ?>" height="60" class="my-3 mx-3">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<script>

</script>
<?php
get_footer();
