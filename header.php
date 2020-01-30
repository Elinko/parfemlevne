<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package parfemlevne
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>Parfemlevne.cz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="eliass.sk" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap&subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/icomoon.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/superfish.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/custom.css?1v1">

	<!-- Modernizr JS -->
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/respond.min.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="fh5co-page" class="site">
	<div id="fh5co-wrapper">

		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo">
							<a href="<?= get_home_url();  ?>"> <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/dsf.png" alt="PARFÉM LEVNE">	parfémlevne.cz</a>
						</h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="index.html">Home</a>
								</li>
								<li>
									<a href="portfolio.html" class="fh5co-sub-ddown">Work</a>
									<ul class="fh5co-sub-menu">
										<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
										<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
										<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
										<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
										<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
										<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
									</ul>
								</li>
								<li>
									<a href="services.html" class="fh5co-sub-ddown">Services</a>
									<ul class="fh5co-sub-menu">
										<li><a href="left-sidebar.html">Web Development</a></li>
										<li><a href="right-sidebar.html">Branding &amp; Identity</a></li>
										<li>
											<a href="#" class="fh5co-sub-ddown">Free HTML5</a>
											<ul class="fh5co-sub-menu">
												<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
												<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
												<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
												<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
												<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
												<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
											</ul>
										</li>
										<li><a href="#">UI Animation</a></li>
										<li><a href="#">Copywriting</a></li>
										<li><a href="#">Photography</a></li>
									</ul>
								</li>
								<li><a href="about.html">About</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>


	<div id="content" class="site-content">
