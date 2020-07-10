<?php
/*
 Template Name: About Us Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div>

						<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<section itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>

							</article>

							<?php endwhile; endif; ?>

						</main>

						<?php //get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
