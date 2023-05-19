<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

	<header id="masthead" class="site-header">
		<?php vvm_starter_theme_logo(); ?>

		<nav id="site-navigation" class="main-navigation">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main_navigation',
						'menu_id'        => 'primary-menu',
						'container'		 => ''
					)
				); 
			?>
		</nav>
	</header>

	<div class="hamburger-switch">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>

	<div id="site-mobile-navigation" class="mobile-navigation-wrapper">
		<nav class="mobile-navigation">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'mobile_navigation',
						'menu_id'        => 'mobile-menu',
					)
				); 
			?>
		</nav>
	</div>
