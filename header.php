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
	<meta name="description" content="Výběr nejprodávanějších a levných parfémů na českém trhu." />
	<meta name="keywords" content="parfem levne, akciovej parfem, luxusne perfemy, levne damske parfemy" />
	<meta name="author" content="eliass.sk" />
	<meta property="og:title" content="Parfemlevne.cz"/>
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory');?>/assets/images/bg.png"/>
	<meta property="og:url" content="http://parfemlevne.cz/"/>
	<meta property="og:site_name" content="Parfemlevne.cz"/>
	<meta property="og:description" content="Výběr nejprodávanějších a levných parfémů na českém trhu."/>
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/assets/images/favicon.png">

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
									<a href="<?= get_home_url();  ?>">Domov</a>
								</li>
								<li>
									<a href="<?= get_home_url();  ?>/produkty?cat=571">Dámske</a>
								</li>
								<li>
									<a href="<?= get_home_url();  ?>/produkty?cat=576">Pánske</a>
								</li>
								<li>
									<a href="<?= get_home_url();  ?>/produkty?cat=vsetky">Všetky</a>
								</li>
								<li>
									<a href="<?= get_home_url();  ?>/blogy">Blog</a>
								</li>

							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>


	<div id="content" class="site-content">
