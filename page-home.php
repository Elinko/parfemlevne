<?php
/*
	Template Name: Home Page
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package parfemlevne
 */

get_header();
?>
		<div class="fh5co-hero">
			<div class="fh5co-cover text-center">
				<div class="desc animate-box">
					<h2>LEVNÉ A KVALITNÍ <br>PARFÉMY</h2>
					<span>Výběr nejprodávanějších <br> a levných parfémů na českém trhu.</span>
					<p><a class="btn btn-primary btn-lg btn-learn" href="#">Všechny produkty</a></p>
				</div>
			</div>
		</div>

		<div id="fh5co-blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Nejprodávanější parfémy</h3>
						<p>Představujeme výběr najpredávanejžších parfémů z našeho sortimentu</p>
					</div>
				</div>
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active "><a href="#all" class="btn-primary" aria-controls="all" role="tab" data-toggle="tab">Všechny</a></li>
					<li role="presentation"><a href="#man" class="btn-primary" aria-controls="man" role="tab" data-toggle="tab">Pánské</a></li>
					<li role="presentation"><a href="#woman" class="btn-primary" aria-controls="woman" role="tab" data-toggle="tab">Dámské</a></li>
				</ul>
			</div>
			<div class="container">
				<div class="tab-content ">

					<?php
						$args = array(
								'post_type' => 'parfemy',
								'post_status' => 'publish',
								'cat' => 221, // Whatever the category ID is for your aerial category
								'posts_per_page' => 7,
								'orderby' => 'ID', // Purely optional - just for some ordering
								'order' => 'ASC' // Ditto
						);
						$man = new WP_Query( $args );
					?>

					<?php
						$args = array(
								'post_type' => 'parfemy',
								'post_status' => 'publish',
								'cat' => 218, // Whatever the category ID is for your aerial category
								'posts_per_page' => 6,
								'orderby' => 'ID', // Purely optional - just for some ordering
								'order' => 'ASC' // Ditto
						);
						$woman = new WP_Query( $args );
					?>

				  <div role="tabpanel" class="tab-pane fade in active" id="all">
						<div class="row row-bottom-padded-md">

							<?php for ($i=0; $i < 6; $i++): ?>

								<div class="col-lg-4 col-sm-6">
									<div class="fh5co-blog animate-box">
											<div class="blog-text" onclick="location.href='https://<?= the_field('url', $woman->posts[$i]->ID);  ?>'">
												<div class="prod-title">
														<div class="price-wrap">
															<span class="amount"><?= the_field('recenzie', $woman->posts[$i]->ID);  ?></span>
															<span class="price">od <?= the_field('cena', $woman->posts[$i]->ID);  ?> Kč </span>
														</div>
														<img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($woman->posts[$i]->ID, 'full' );  ?>" alt="">
														<h3><?= $woman->posts[$i]->  ?></h3>
														<a href="https://<?= the_field('url', $woman->posts[$i]->ID);  ?>" class="btn btn-primary">Koupit</a>
													</div>
											</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="fh5co-blog animate-box">
											<div class="blog-text" onclick="location.href='https://<?= the_field('url', $man->posts[$i]->ID);  ?>'">
												<div class="prod-title">
														<div class="price-wrap">
															<span class="amount"><?= the_field('recenzie', $man->posts[$i]->ID);  ?></span>
															<span class="price">od <?= the_field('cena', $man->posts[$i]->ID);  ?> Kč </span>
														</div>
														<img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($man->posts[$i]->ID, 'full' );  ?>" alt="">
														<h3><?= the_title();  ?></h3>
														<a href="https://<?= the_field('url', $man->posts[$i]->ID);  ?>" class="btn btn-primary">Koupit</a>
													</div>
											</div>
									</div>
								</div>

							<?php endfor; ?>
						</div>
					</div>
				  <div role="tabpanel" class="tab-pane fade" id="man">
						<div class="row row-bottom-padded-md ">

							<?php while ( $man->have_posts() ):  ?>
								<?php
									$man-> the_post();
									$cat = get_the_category($value->ID);
									$parent = get_category_parents($cat[0]->term_id);
									$parent = explode('/', $parent);
									$parent = $parent[0];
								?>
								<div class="col-lg-4 col-sm-6">
									<div class="fh5co-blog animate-box">
											<div class="blog-text" onclick="location.href='https://<?= the_field('url');  ?>'">
												<div class="prod-title">
														<div class="price-wrap">
															<span class="amount"><?= the_field('recenzie');  ?> </span>
															<span class="price">od <?= the_field('cena');  ?> Kč </span>
														</div>
														<img class="img-responsive" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );  ?>" alt="">
														<h3><?= the_title();  ?></h3>
														<a href="https://<?= the_field('url');  ?>" class="btn btn-primary">Koupit</a>
													</div>
											</div>
									</div>
								</div>
							<?php endwhile; ?>

							<?php
								wp_reset_query();
							?>

						</div>
					</div>
				  <div role="tabpanel" class="tab-pane fade" id="woman">
						<div class="row row-bottom-padded-md">
							<?php while ( $woman->have_posts() ):  ?>
								<?php
									$woman-> the_post();
									$cat = get_the_category($value->ID);
									$parent = get_category_parents($cat[0]->term_id);
									$parent = explode('/', $parent);
									$parent = $parent[0];
								?>
								<div class="col-lg-4 col-sm-6">
									<div class="fh5co-blog animate-box">
											<div class="blog-text" onclick="location.href='https://<?= the_field('url');  ?>'">
												<div class="prod-title">
														<div class="price-wrap">
															<span class="amount"><?= the_field('recenzie');  ?> </span>
															<span class="price">od <?= the_field('cena');  ?> Kč </span>
														</div>
														<img class="img-responsive" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' );  ?>" alt="">
														<h3><?= the_title();  ?></h3>
														<a href="https://<?= the_field('url');  ?>" class="btn btn-primary">Koupit</a>
													</div>
											</div>
									</div>
								</div>
							<?php endwhile; ?>

							<?php
								wp_reset_query();
							?>
						</div>
					</div>
				</div>

			</div>
		</div>


		<div id="fh5co-partner">
			<div class="container">
				<div class="partner-wrap">
					<div class="wrap">
						<div class="partner animate-box">
							<div class="inner">
								<img class="img-responsive" src="images/logo-1.png" alt="">
							</div>
						</div>
						<div class="partner animate-box">
							<div class="inner">
								<img class="img-responsive" src="images/logo-2.png" alt="">
							</div>
						</div>
						<div class="partner animate-box">
							<div class="inner">
								<img class="img-responsive" src="images/logo-3.png" alt="">
							</div>
						</div>
						<div class="partner animate-box">
							<div class="inner">
								<img class="img-responsive" src="images/logo-4.png" alt="">
							</div>
						</div>
						<div class="partner animate-box">
							<div class="inner">
								<img class="img-responsive" src="images/logo-5.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-work">
			<div class="container">
				<div class="row">
					<div class="col-md-12 work">
						<div class="row">
							<div class="col-md-6 col-md-pull-2">
								<div class="half-inner" style="background-image:url(images/work-1.jpg);">
								</div>
							</div>
							<div class="col-md-6 animate-box">
								<div class="desc">
									<h3><a href="#">Guitar Music</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p><a class="btn btn-primary" href="#">Learn More</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 work">
						<div class="row">
							<div class="col-md-6 col-md-push-6">
								<div class="half-inner half-inner2" style="background-image:url(images/work-2.jpg);">
								</div>
							</div>
							<div class="col-md-6 col-md-pull-6 animate-box">
								<div class="desc desc2">
									<h3><a href="#">A Cube of Ice</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p><a class="btn btn-primary" href="#">Learn More</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-features">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">

							<div class="feature-left">
								<span class="icon">
									<i class="icon-laptop"></i>
								</span>
								<div class="feature-copy">
									<h3>Retina Ready</h3>
									<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								</div>
							</div>

						</div>

						<div class="col-md-4 animate-box">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-mobile"></i>
								</span>
								<div class="feature-copy">
									<h3>Responsive Layout</h3>
									<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								</div>
							</div>

						</div>
						<div class="col-md-4 animate-box">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-browser"></i>
								</span>
								<div class="feature-copy">
									<h3>Clean &amp; Minimal</h3>
									<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>What We Do</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row text-center">
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-browser"></i></span>
							<h3>Web Development</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-mobile"></i></span>
							<h3>Mobile Apps</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-tools"></i></span>
							<h3>UX Design</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-video"></i></span>
							<h3>Video Editing</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-search"></i></span>
							<h3>SEO Ranking</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="services animate-box">
							<span><i class="icon-cloud"></i></span>
							<h3>Cloud Based Apps</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- END What we do -->

		<div id="fh5co-content-section" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Happy Clients</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="testimony">
							<blockquote>
								&ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
							</blockquote>
							<figure>
								<img class="img-responsive" src="images/person_1.jpg" alt="user">
							</figure>
							<p class="author">John Doe</p>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="testimony">
							<blockquote>
								&ldquo;Me and my wife had a delightful weekend get away here, the staff were so friendly and attentive. Highly Recommended&rdquo;
							</blockquote>
							<figure>
								<img class="img-responsive" src="images/person_2.jpg" alt="user">
							</figure>
							<p class="author">Rob Smith</p>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="testimony">
							<blockquote>
								&ldquo;If you’re looking for a top quality hotel look no further. We were upgraded free of charge to the Premium Suite, thanks so much&rdquo;
							</blockquote>
							<figure>
								<img class="img-responsive" src="images/person_3.jpg" alt="user">
							</figure>
							<p class="author">Jane Doe</p>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
// get_sidebar();
get_footer();
