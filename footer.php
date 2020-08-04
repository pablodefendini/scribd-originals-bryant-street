			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer">


				<div class="signup wrap cf">
					<div class="call-to-action">
						<h2>Sign up for our newsletter</h2>
						<h3>Sign up for our newsletter to get all the news in your inbox.</h3>
					</div>

					<!-- Begin Mailchimp Signup Form -->

					<div id="mc_embed_signup">
						<form action="https://bryantstreetpub.us17.list-manage.com/subscribe/post?u=494eab8650d545c29ccbdd962&amp;id=a7c855f18e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div id="mc_embed_signup_scroll">
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Newsletter signup" required>
								<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0c60ee4cf297215c61d55e861_afc8f5cf09" tabindex="-1" value=""></div>
								<div class="clear"><input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
								</div>
						</form>
					</div>

					<!--End mc_embed_signup-->

				</div>

				<div class="footer-nav wrap cf">
					<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo home_url(); ?>/wp-content/themes/scribd-originals-bryant-street/library/images/logo.svg" id=logo ></a>

					<nav role="navigation">
						<?php wp_nav_menu(array('menu' => __( 'Main Menu'), 'theme_location' => 'main_nav', 'container' => '', 'menu_id' => 'footeritems')); ?>

					</nav>
				</div>

					<p class="source-org copyright">Copyright &copy; <?php echo date('Y'); ?> Scribd, Inc.<br/>
					 Privacy Policy | Terms of Service</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
