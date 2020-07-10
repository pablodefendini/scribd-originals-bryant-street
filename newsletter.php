<?php
/*
 Template Name: Newsletter Archive
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div>

						<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<section class="page-header reverse">
								<div class="wrap">
									<h1><?php the_title(); ?></h1>
									<div class="signup">
										<p>Sign up for our newsletter to get all the news in your inbox — or check out our archive, here.</p>
										<div id="mc_embed_signup"><!-- Begin Mailchimp Signup Form -->
										<form action="FIXME" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
												<div id="mc_embed_signup_scroll">
													<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Newsletter signup" required>
													<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
													<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0c60ee4cf297215c61d55e861_afc8f5cf09" tabindex="-1" value=""></div>
													<div class="clear"><input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
												</div>
										</form>
									</div><!--End mc_embed_signup-->
									</div>
								</div>
							</section>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article class="wrap" id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<section class="newsletter-archive" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end article section ?>

							</article>

							<?php endwhile; endif; ?>

						</main>

						<?php // get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
