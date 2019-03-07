<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<!-- <link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet"> -->
  <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

  <!-- <div class="blog-masthead">
    <div class="container-fluid">
      <nav class="blog-nav">
        <a class="blog-nav-item active" href="#">Home</a>
        <?php wp_list_pages( '&title_li=' ); ?>
      </nav>
    </div>
  </div> -->

	<!-- <div class="nav">
		<div class="burger"></div>
		<div class="social-icons">
			<ul>
				<li><a href="#"></a></li>
			</ul>
		</div>
	</div> -->

	<div class="nav" data-aos="fade-down">
		<div class="container">
			<div class="row">
				<div class="nav-items">
					<div class="left">
						<ul>
							<li><a class="left active" href="#story">Story</a></li>
							<li><a class="left" href="#gallery">Gallery</a></li>
							<li><a class="left" href="#visit-us">Visit us</a></li>
						</ul>
					</div>
					<div class="center">
						<img class="" src="<?php echo get_bloginfo( 'template_directory' );?>/img/logo.png" alt="">
					</div>
					<div class="right">
						<ul>
							<li><a class="right" href="#">Book a table</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
