<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package parfemlevne
 */

?>
<div class="col-md-12 work">
	<div class="row">
		<?php if( ($counter % 2 == 1) ): ?>
			<div class="col-md-6 text-center">
				<a href="<?php echo get_post_permalink() ?>">
					<?php parfemlevne_post_thumbnail(); ?>
				</a>
			</div>
			<div class="col-md-6 animate-box">
				<div class="desc">
					<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
					<?php the_excerpt() ?>

					<p><a class="btn btn-primary" href="<?php echo get_post_permalink() ?>">Čti více</a></p>
				</div>
			</div>
		<?php else: ?>
			<div class="col-md-6 animate-box">
				<div class="desc">
					<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
					<?php the_excerpt() ?>

					<p><a class="btn btn-primary" href="<?php echo get_post_permalink() ?>">Čti více</a></p>
				</div>
			</div>
			<div class="col-md-6  text-center">
				<a href="<?php echo get_post_permalink() ?>">
					<?php parfemlevne_post_thumbnail(); ?>
				</a>
			</div>
		<?php endif ?>
	</div>
</div>
