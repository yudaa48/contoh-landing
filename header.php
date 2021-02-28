<?php
?>

<!DOCTYPE html>
<html lang="id" class="h-100">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Comika Entertainment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="wp-content/themes/web-landing/assets/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body class="d-flex flex-column h-100">
	<?php wp_body_open(); ?>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="<?php echo get_bloginfo( 'wpurl' ) ?>"><span>Comika Entertainment</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <a href="<?php echo get_bloginfo( 'wpurl' ) ?>"><img src="wp-content/themes/web-landing/assets/img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo get_bloginfo( 'wpurl' ) ?>">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="<?php echo get_bloginfo( 'wpurl' ) ?>/blog/">Our Blog</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>

  <!-- End Header -->