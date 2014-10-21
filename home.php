<?php while ( have_posts() ) : the_post(); ?>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="entry-page-image">
			<?php the_post_thumbnail(); ?>
		</div><!-- .entry-page-image -->
	<?php endif; ?>
	<?php //get_template_part( 'content', 'page' ); ?>
<?php endwhile; // end of the loop. ?>