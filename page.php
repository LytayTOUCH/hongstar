<?php get_header();?>
<?php include (TEMPLATEPATH . '/home.php');?>
  <?php if(have_posts()) :?>
    <div class="post">
        <div class="entry">
        		<?php the_title(); ?>
                <?php the_content(); ?>
        </div>
    </div>
<?php endif; ?>
<?php get_footer(); ?>