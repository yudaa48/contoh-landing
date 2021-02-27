<?php
/**
 * Header file for the theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Terralogiq
 */
?>
<!DOCTYPE html>
<html lang="id" class="h-100">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NWZC7M2');</script>
	<!-- End Google Tag Manager -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163834280-1"></script>
	<script>
	 window.dataLayer = window.dataLayer || []
	 function gtag () { dataLayer.push(arguments) }
	 gtag('js', new Date())

	 gtag('config', 'UA-163834280-1')
	</script>
	
	<!-- Tag - Linkedin -->
	<script type="text/javascript">
	_linkedin_partner_id = "2750044";
	window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
	window._linkedin_data_partner_ids.push(_linkedin_partner_id);
	</script><script type="text/javascript">
	(function(){var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);})();
	</script>
	<noscript>
	<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2750044&fmt=gif" />
	</noscript>

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '743259756262873'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=743259756262873&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="d-flex flex-column h-100">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWZC7M2"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php wp_body_open(); ?>

	<nav class="navbar-main fixed-top d-none">
		<button type="button" class="navbar-main__hide">
			<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
			</svg>
		</button>

		<div class="navbar-main__menu">
			<ul class="nav nav-pills nav-fill flex-column">
				<li class="nav-item">
					<a href="<?php echo get_bloginfo( 'wpurl' ) ?>" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/services/" class="nav-link">Services</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/about-us/" class="nav-link">About Us</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/blog/" class="nav-link">Blog</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/case-study/" class="nav-link">Case Study</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/projects/" class="nav-link">Projects</a>
				</li>
				<li class="nav-item">
					<a href="https://appsensi.com" target="_blank" class="nav-link">Appsensi</a>
				</li>

				<li class="nav-item divider">
					<div class="nav-link divider"></div>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/privacy/" class="nav-link">Privacy & Policy</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo get_bloginfo( 'wpurl' ) ?>/terms-and-conditions/" class="nav-link">Terms & Conditions</a>
				</li>
			</ul>
		</div>
	</nav>

<main>
	<header>
		<nav class="navbar fixed-top navbar-expand-sm bg-primary">
			<div class="container-fluid">
				<button class="navbar-main__show" type="button">
					<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-list text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
					</svg>
				</button>
				<a class="navbar-brand pl-2 mr-auto" href="<?php echo get_bloginfo( 'wpurl' ) ?>">
					<img src="<?php echo get_theme_file_uri( 'assets/images/terralogiq-brand.webp' ); ?>" height="30" alt="">
				</a>

				<div class="collapse navbar-collapse">
					<ul class="navbar-nav nav-pills ml-auto">
						<li class="nav-item">
							<a href="mailto:info@terralogiq.com" class="nav-link navbar--cta">CONTACT US</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>