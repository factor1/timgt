<?php get_header(); ?>

<section class="blog_current_wrapup">
	<h2>Weekly Market Update</h2>
	<div class="container-fluid">

		<?php $posts = get_posts(array('numberposts' => 1, 'category' => '2')); ?>

		<?php foreach( $posts as $post ) : setup_postdata($post); ?>

			<?php get_template_part('content-pass', get_post_format()); ?>

		<?php endforeach; ?>

	</div>
</section>

<section class="blog_content">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span8">
				<h3>Previous Market Updates</h3>

				<?php wp_reset_postdata(); ?>

				<?php

                                    $ppp = get_option('posts_per_page');

                                    if (get_query_var('paged')) {
				        //Manually determine page query offset (offset + current page (minus one) x posts per page)
				        $page_offset = 0 + ((get_query_var('paged') - 1) * $ppp);

				        //Apply adjust page offset
				        // $query->set('offset', $page_offset);
				    }
				    else {
				        //This is the first page. Just use the offset...
				        // $query->set('offset', $offset);
				        $page_offset = 0;
				    }

                                    $posts = get_posts(array('offset' => 1 + $page_offset, 'numberposts' => 10, 'category' => '2'));

				?>

				<?php foreach( $posts as $post ) : setup_postdata($post); ?>

					<?php get_template_part('content', get_post_format()); ?>

				<?php endforeach; ?>

			</div>
			<div class="span4">
				<?php get_sidebar(); // sidebar 1 ?>
			</div>
		</div>
	</div>
</section>
<div class="blog_nav">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span8">

				<?php next_posts_link('Previous') ?>
				<?php previous_posts_link('Next') ?>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
