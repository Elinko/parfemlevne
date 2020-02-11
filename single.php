<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package parfemlevne
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :

		the_post();

	endwhile;

else :

	get_template_part( 'template-parts/content', 'none' );
endif;

?>

	<div class="fh5co-hero-bg">
	</div>

	<div id="fh5co-content-section" class="">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h3><?php the_title() ?></h3>
				</div>
			</div>
		</div>
		<div class="container">
			<?php the_content() ?>
		</div>
	</div>

<?php
get_footer();
