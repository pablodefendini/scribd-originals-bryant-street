<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<style>
			@import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,600;1,400;1,600&display=swap');
		</style>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo home_url(); ?>/wp-content/themes/scribd-originals-bryant-street/library/images/logo.svg" id=logo ></a>

					<nav id="#hamnav" role="navigation">

						<label for="hamburger" id="hamburgericon">&#9776;</label>
						<input type="checkbox" id="hamburger"/>

						<?php wp_nav_menu(array('menu' => __( 'Main Menu'), 'theme_location' => 'main_nav', 'container' => '', 'menu_id' => 'hamitems')); ?>

					</nav>
					
					<?php  if ( is_page('Bryant Street Pub Newsletter') ) { ?>
					<div></div>
					<?php  } else { ?>
					<!-- Begin Mailchimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="https://bryantstreetpub.us17.list-manage.com/subscribe/post?u=494eab8650d545c29ccbdd962&amp;id=a7c855f18e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						    <div id="mc_embed_signup_scroll">
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="your email here" required>
						    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0c60ee4cf297215c61d55e861_afc8f5cf09" tabindex="-1" value=""></div>
						    <div class="clear"><input type="submit" value="Sign up for BSP’s newsletter" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						    </div>
						</form>
					</div>
					<!--End mc_embed_signup-->
					<?php  } ?>

				</div>

			</header>
