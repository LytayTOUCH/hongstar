<?php get_header();?>
<?php include (TEMPLATEPATH . '/home.php');?>
<div class="post">
    <div class="entry">
		<?php //the_title(); ?>
        <?php the_content(); ?>
    </div>
</div>
<?php get_footer(); ?>