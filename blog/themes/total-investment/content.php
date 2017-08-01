<article id="post-<?php the_ID(); ?>" <?php post_class('blog_post_summary'); ?>>
	<a href="<?php the_permalink(); ?>" class="post_title"><?php the_title(); ?></a>
	<div class="excerpt"><?php the_excerpt(); ?></div>
	<!-- <a href="<?php the_permalink(); ?>" class="button blog_continue">Continue</a> -->
</article> <!-- end article -->