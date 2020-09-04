			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">
					<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo home_url(); ?>/wp-content/themes/scribd-originals-bryant-street/library/images/logo.svg" id=logo ></a>

					<nav id="#footernav" class="footer-nav" role="navigation">

						<?php wp_nav_menu(array('menu' => __( 'Main Menu'), 'theme_location' => 'main_nav', 'container' => '', 'menu_id' => 'footeritems')); ?>

					</nav>
				</div>

				<p class="source-org copyright">Copyright &copy; <?php echo date('Y'); ?> Scribd, Inc.<br/>
				 Privacy Policy | Terms of Service</p>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
