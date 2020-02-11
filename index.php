<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package parfemlevne
 */

get_header();
?>
	<div class="fh5co-hero-bg">
	</div>

	<div id="fh5co-content-section" class="">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
					<h3>Blog</h3>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
					if ( have_posts() ) :
						$counter=1;
						while ( have_posts() ) :

							the_post();
					    set_query_var( 'counter', $counter );
							get_template_part( 'template-parts/content', get_post_type() );
							$counter++;
						endwhile;

						the_posts_navigation();
					else :

						get_template_part( 'template-parts/content', 'none' );
					endif;
				?>

			</div>
		</div>
	</div>

<?php
get_footer();
