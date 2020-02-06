<?php
/*
	Template Name: Products
*/
/**
 * The template for displaying all pages
 *
 * This is the template th
 at displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package parfemlevne
 */

	get_header();

	if(!empty(htmlspecialchars($_GET["cat"]))) {
		$catActual =  htmlspecialchars($_GET["cat"]);
		$catName = get_category($catActual);
 	  $catName->name = explode('-',$catName->name);
	  $catName->name = $catName->name[0];

	  $catParent = get_category($catName->parent);
	  $catParent = $catParent->name;


		if(!empty(htmlspecialchars($_GET["pa"]))) {
			$pa = htmlspecialchars($_GET["pa"]);
			$page = $pa*12;
		} else {
			$page=0;
		}

		$args = array(
				'post_type' => 'parfemy',
				'post_status' => 'publish',
				'cat' => $catActual, // Whatever the category ID is for your aerial category
				'posts_per_page' => 12,
	    	'offset' => $page,
				'orderby' => 'ID', // Purely optional - just for some ordering
				'order' => 'ASC' // Ditto
		);
		$products = new WP_Query( $args );
		//
		// echo "<pre>";
		// print_r($products);
		// echo "</pre>";


	}


?>
		<div class="fh5co-hero-bg">
		</div>

		<div id="fh5co-blog-section">
			<div class="container">
				<div class="heading-section">

					<h3 class="text-center"><?php if($catParent) {echo 'Levné ' .($catParent) .' parfémy značky '. ucfirst($catName->name ); } else { echo 'Levné '. ($catName->name) . ' parfémy' ;}   ?></h3>
				</div>
				<div class="row">
					<div class="col-md-3 col-lg-3 sidebar">
						<h3>Kategórie</h3>
						<?php
							$args = array(
									'post_type' => 'parfemy',
									'hide_empty' => 0,
									'orderby' => 'parent', // Purely optional - just for some ordering
									'order' => 'ASC' // Ditto
							);

							$categories = get_categories($args);
							$uniqeCat = '';
						?>

							<?php foreach ($categories as $key => $value) {
									$value->name = explode('-', $value->name);
									$value->name = ucfirst($value->name[0]);

									if($value->parent != $uniqeCat) {

										$uniqeCat = $value->parent;
										$tmp = get_category($uniqeCat);

										if($key == $last) {
													echo '</ul>';
											echo '</ul>';
										} else {
											if($uniqeCat == '') {
												echo '<ul>';
													echo '<li>';
														echo '<a href="'. get_home_url() . '/produkty?cat='. $tmp->term_id . '">' .ucfirst($tmp->name). '</a>';
													echo '</li>';
													echo '<ul>';
											} else {
													echo '</ul>';
													echo '<li>';
														echo '<a href="'. get_home_url() . '/produkty?cat='. $tmp->term_id . '">' .ucfirst($tmp->name). '</a>';
													echo '</li>';
													echo '<ul>';
											}
										}

									} else {
										if( $key > 3) {
											echo '<li>';
											echo '<a href="'. get_home_url() . '/produkty?cat='. $value->term_id . '">' .$value->name. '</a>';
											echo '</li>';

										}
									}

								}
							?>
					</div>

					<div class="col-md-9  col-lg-9 tab-content">

						<div class="row row-bottom-padded-md ">

							<?php while ( $products->have_posts() ):  ?>
								<?php
								$products-> the_post();
								$cat = get_the_category($value->ID);
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
						<div class="row">
							<div class="col-sm-4 text-center">
								<?php
									if($pa) {
										echo '<a href="' .get_home_url() .'/produkty?cat='. $catActual .'&pa='.($pa-1) . '" class="btn btn-primary">Spat</a>';
									}
								?>
							</div>

							<div class="col-sm-4 text-center">

							</div>

							<div class="col-sm-4 text-center">
								<?php
									if(count($products->posts) ==12) {
										echo '<a href="' .get_home_url() .'/produkty?cat='. $catActual .'&pa='.($pa+1) .'" class="btn btn-primary">Dalsi</a>' ;
									}
								?>
							</div>

						</div>
						<br>
				</div>

			</div>
		</div>



<?php
// get_sidebar();
get_footer();
