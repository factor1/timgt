<?php get_header(); ?>

	<section class="blog_content">
		<div class="container-fluid">
			<div id="content" class="row-fluid">
				<div class="span8" role="main">

					<hgroup class="blog_archive_header">
						<?php if (is_category()) { ?>

							<h2><?php _e("Categories", "bonestheme") ?></h2>
							<h3><?php single_cat_title() ?></h3>

						<?php } elseif (is_month()) { ?>

							<h2><?php _e("Monthly Archives", "bonestheme") ?></h2>
							<h3><?php the_time('F Y') ?></h3>

						<?php } ?>
					</hgroup>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part('content', get_post_format()); ?>

					<?php endwhile; ?>

					<?php else : ?>

					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("No Posts Yet", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

					<?php endif; ?>

				</div> <!-- end #main -->

				<div class="span4">
					<?php get_sidebar(); // sidebar 1 ?>
				</div>
			</div> <!-- end #content -->
		</div>
	</section>
	<div class="blog_nav">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span8">

					<?php next_posts_link('Past Updates') ?>
					<?php previous_posts_link('Previous Updates') ?>

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>