<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<!-- THIS IS A NEW ONE -->
			<section class="blog_head">
				<h1>Weekly Wrap Up</h1>
			</section>

			<div class="blog_main">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span8">
							<section id="content" class="blog_past_wrapups">

								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
									<h1><?php the_title(); ?></h1>
									<?php the_content(); ?>
								</article> <!-- end article -->

								<?php endwhile; ?>

								<?php else : ?>

								<article id="post-not-found">
							    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
							    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
								</article>

								<?php endif; ?>

								<!-- Pagenation -->
								<div class="blog_pagenations">
									<div class="container-fluid">
										<div class="row-fluid">
											<div class="span6">
												<a href="" style="button left">Previous</a>
											</div>
											<div class="span6">
												<a href="" style="button">Next</a>
											</div>
										</div>
									</div>
								</div>

							</section>
						</div>
						<div class="span4">
							<?php //get_sidebar(); // sidebar 1 ?>
							<?php get_sidebar('sidebar2'); // sidebar 2 ?>
						</div>
					</div>
				</div>
			</div>

<?php get_footer(); ?>