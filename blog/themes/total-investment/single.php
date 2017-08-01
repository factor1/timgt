<?php get_header(); ?>

<section class="blog_content clearfix row-fluid">
	<h2>Weekly Market Updates</h2>
	<div class="container-fluid">
		<div class="row-fluid">
			<div id="main" class="span8">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header>

						<?php the_post_thumbnail( 'wpbs-featured' ); ?>

						<div class="page-header"><h2 class="single-title" itemprop="headline"><?php the_title(); ?></h2></div>

					</header> <!-- end article header -->

					<section class="post_content clearfix" itemprop="articleBody">
						<?php the_content(); ?>

						<?php wp_link_pages(); ?>
					</section> <!-- end article section -->

					<footer>

						<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', '</p>'); ?>

						<?php
						// only show edit button if user has permission to edit posts
						if( $user_level > 0 ) {
						?>
						<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","bonestheme"); ?></a>
						<?php } ?>

					</footer> <!-- end article footer -->

				</article> <!-- end article -->

						</div> <!-- end #main -->
			<div class="span4">
				<?php get_sidebar(); // sidebar 1 ?>
			</div>
		</div>
	</div>
</section> <!-- end #content -->

<div class="blog_nav">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span8">

				<?php next_post_link('%link', 'Previous') ?>
				<?php previous_post_link('%link', 'Next') ?>

			</div>
		</div>
	</div>
</div>

				<?php endwhile; ?>

				<?php else : ?>

				<article id="post-not-found">
				    <header>
				    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
				    </header>
				    <section class="post_content">
				    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
				    </section>
				    <footer>
				    </footer>
				</article>

				<?php endif; ?>



<?php get_footer(); ?>