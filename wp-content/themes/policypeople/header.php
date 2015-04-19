<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package policypeople
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'policypeople' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img id="ns_logo" src='http://localhost:8888/northstar/wp-content/themes/policypeople/img/northstar.png'></a>
		</div><!-- .site-branding -->

		<nav id="policynav">
			<?php
				$policy_menu_top = array (
					'theme_location' => 'sub-nav',
					'container' => 'nav',
					'container_id' => 'header-policy-nav',
				);
			?>
			<?php wp_nav_menu( $policy_menu_top ); ?>
		</nav>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php
				$main_menu_bottom = array (
					'theme_location' => 'main-nav',
					'container' => 'nav',
					'container_id' => 'header-main-nav',
				);
			?>
			<?php wp_nav_menu( $main_menu_bottom ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
