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

	<section class="section--banner-case-study">
		<div class="container">
			<div class="section--banner-case-study__content">
				<div class="row">
					<div class="col-md-10 col-lg-8 col-xl-8 services">
						<h1>Case Study</h1>

						<p class="lead">Terralogiq is working together with Google to help businesses have the maximum benefit that Google Maps Platform can offer by leveraging on our expertise and Google's best practices. We are also the only partner with a certified local technical support team that can offer on-site assistance whenever necessary.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section--case-study">
		<div class="container">
			<div class="row">
				<div class="bs-example">
				    <ul class="nav nav-tabs nav-justified">
				        <li class="nav-item">
				            <a href="#all" class="nav-link active text-white" data-toggle="tab">All</a>
				        </li>
				        <li class="nav-item">
				            <a href="#maps" class="nav-link text-white" data-toggle="tab">Maps</a>
				        </li>
				        <li class="nav-item">
				            <a href="#routes" class="nav-link text-white" data-toggle="tab">Routes</a>
				        </li>
				        <li class="nav-item">
				            <a href="#places" class="nav-link text-white" data-toggle="tab">Places</a>
				        </li>
				    </ul>
				    <div class="tab-content">
				        <div class="tab-pane fade show active" id="all">
				        	<div class="row">
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-paxel/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--paxel.webp' ); ?>" class="w-100" alt="">

										<h2>Paxel Fulfill SLA For 99% - 99.5% Successful Delivery On Time</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-paxel.webp' ); ?>" style="width: 10rem;" alt="">
									</a>
								</div>
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-halodoc/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--halodoc.webp' ); ?>" class="w-100" alt="">

										<h2>Simplifying Access to Indonesian Health Based on Digital Technology</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-halodoc.webp' ); ?>" style="width: 10rem;" alt="">
									</a>
								</div>
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-sayurbox/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--sayurbox.webp' ); ?>" class="w-100" alt="">

										<h2>First Farm-to-Table e-Commerce concept in Indonesia</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-sayurbox.webp' ); ?>" style="width: 10rem;" alt="">
									</a>
								</div>
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-bps/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--bps.webp' ); ?>" class="w-100" alt="">

										<h2>Wilkerstat: Census and Survey in the Digital Era</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-bps.webp' ); ?>" class="logo-case-study" alt="">
									</a>
								</div>
				        	</div>
				        </div>
				        <div class="tab-pane fade" id="maps">
				        	<div class="row">
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-paxel/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--paxel.webp' ); ?>" class="w-100" alt="">

										<h2>Paxel Fulfill SLA For 99% - 99.5% Successful Delivery On Time</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-paxel.webp' ); ?>" style="width: 10rem;" alt="">
									</a>
								</div>
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-halodoc/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--halodoc.webp' ); ?>" class="w-100" alt="">

										<h2>Simplifying Access to Indonesian Health Based on Digital Technology</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-halodoc.webp' ); ?>" style="width: 10rem;" alt="">
									</a>
								</div>
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-sayurbox/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--sayurbox.webp' ); ?>" class="w-100" alt="">

										<h2>First Farm-to-Table e-Commerce concept in Indonesia</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-sayurbox.webp' ); ?>" style="width: 10rem;" alt="">
									</a>
								</div>
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-bps/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--bps.webp' ); ?>" class="w-100" alt="">

										<h2>Wilkerstat: Census and Survey in the Digital Era</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-bps.webp' ); ?>" class="logo-case-study" alt="">
									</a>
								</div>
				        	</div>
				        </div>
				        <div class="tab-pane fade" id="routes">
				        	<div class="row">
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-paxel/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--paxel.webp' ); ?>" class="w-100" alt="">

										<h2>Paxel Fulfill SLA For 99% - 99.5% Successful Delivery On Time</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-paxel.webp' ); ?>" style="width: 10rem;" alt="">
									</a>
								</div>
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-sayurbox/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--sayurbox.webp' ); ?>" class="w-100" alt="">

										<h2>First Farm-to-Table e-Commerce concept in Indonesia</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-sayurbox.webp' ); ?>" style="width: 10rem;" alt="">
									</a>
								</div>
				        	</div>
				        </div>
				        <div class="tab-pane fade" id="places">
				        	<div class="row">
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-paxel/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--paxel.webp' ); ?>" class="w-100" alt="">

										<h2>Paxel Fulfill SLA For 99% - 99.5% Successful Delivery On Time</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-paxel.webp' ); ?>" style="width: 10rem;" alt="">
									</a>
								</div>
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-halodoc/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--halodoc.webp' ); ?>" class="w-100" alt="">

										<h2>Simplifying Access to Indonesian Health Based on Digital Technology</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-halodoc.webp' ); ?>" style="width: 10rem;" alt="">
									</a>
								</div>
								<div class="col-lg-4 py-3">
									<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study-sayurbox/">
										<img src="<?php echo get_theme_file_uri( 'assets/images/case-study--sayurbox.webp' ); ?>" class="w-100" alt="">

										<h2>First Farm-to-Table e-Commerce concept in Indonesia</h2>
										<img src="<?php echo get_theme_file_uri( 'assets/images/client-sayurbox.webp' ); ?>" style="width: 10rem;" alt="">
									</a>
								</div>
				        	</div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
