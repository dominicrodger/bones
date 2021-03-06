<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<?php
		if (get_theme_mod("apple-touch-icon")) {
		?>
			<link rel="apple-touch-icon" href="<?php echo get_theme_mod("apple-touch-icon"); ?>">
		<?php
		}
		?>

		<?php
		if (get_theme_mod("favicon")) {
		?>
			<link rel="icon" href="<?php echo get_theme_mod("favicon"); ?>">
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php get_theme_mod("favicon"); ?>">
			<![endif]-->
		<?php
		}
		?>

		<?php
		if (get_theme_mod("windows-tile-icon")) {
		?>
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_theme_mod("windows-tile-icon"); ?>">
			<meta name="theme-color" content="#121212">
		<?php
		}
		?>

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
					<div id="burger">Menu</div>


					<?php if (has_header_image()) {
					?>
					<a href="<?php echo home_url(); ?>" rel="nofollow" class="header-image-link">
						<img src="<?php echo( get_header_image() ); ?>" />
					</a>
					<?php
					}
					else {
					?>
					<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
					<a href="<?php echo home_url(); ?>" rel="nofollow">
					<?php
						echo bloginfo('name');
					?>
                    </a>
					</p>
					<?php
					}
					?>
			</header>
                    <div class="nav-wrapper">
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="wrap">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>
                    </div>
					<?php wp_nav_menu(array(
    				         'container' => 'div',                           // remove nav container
    				         'container_class' => 'menu-mobile-container',                 // class of container (should you choose to use it)
    				         'menu' => 'Mobile Menu',  // nav name
    				         'menu_class' => 'menu-mobile',               // adding custom nav class
    				         'theme_location' => 'mobile-nav',                 // where it's located in the theme
    				         'before' => '',                                 // before the menu
        			              'after' => '',                                  // after the menu
        			              'link_before' => '',                            // before each link
        			              'link_after' => '',                             // after each link
        			              'depth' => 2,                                   // limit the depth of the nav
    				         'fallback_cb' => ''                             // fallback function (if there is one)
					)); ?>

				</div>
