<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/hamburgers.min.css" rel="stylesheet">
  	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-M6N68NG');</script>
	<!-- End Google Tag Manager -->
	<?php wp_head();?>
</head>

<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6N68NG"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="nav" data-aos="fade-down">
		<div class="nav-items">
			<ul>
				<li><a class="nav-item" href="#story">Story</a></li>
				<li><a class="nav-item" href="#menu">Menu</a></li>
				<li><a class="nav-item" href="#gallery">Gallery</a></li>
				<li><a class="nav-item" href="#visit-us">Visit us</a></li>
			</ul>
			<img class="" src="<?php echo get_bloginfo( 'template_directory' );?>/img/logo.png" alt="">
			<!-- <button class="primary-button">Book a table</button> -->
			<p><span class="label">Book a table:</span><ion-icon name="call" class="icon"></ion-icon><a href="tel:<?php echo get_option('support_phone'); ?>" class="number"> <?php echo get_option('support_phone'); ?></a></p>
		</div>
	</div>
