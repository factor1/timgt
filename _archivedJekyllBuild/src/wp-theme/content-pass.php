<article id="post-<?php the_ID(); ?>" <?php post_class(array('blog_post_summary','top')); ?>>
        <a href="<?php echo get_permalink(); ?>" class="post_title"><?php the_title(); ?></a>
	<?php the_excerpt(); ?>
</article> <!-- end article -->
