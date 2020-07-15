<?php
/*
 Template Name: Usage Guide Page
*/
?>

<?php get_header(); ?>

			<div id="content">

						<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<section class="page-header reverse">
								<div class="wrap">
									<h1><?php the_title(); ?></h1>
									<!--p>Sign up for our newsletter to get all the news in your inbox — or check out our archive, here.</p-->
								</div>
							</section>

							<section class="wrap side-toc">

								<div class="toc">
									<label>Contents</label>
									<?php wp_nav_menu(array('menu' => __( 'Usage Guide TOC'), 'container' => '', 'menu_id' => 'toc')); ?>
								</div>

								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
									<section itemprop="articleBody">
										<?php the_content(); ?>
									</section> <?php // end article section ?>
								</article>

								<?php endwhile; endif; ?>
							</section>

						</main>

			</div>

<?php get_footer(); ?>
