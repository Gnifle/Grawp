<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LR_Malerier
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">

	<nav id="menu" role="main-navigation">
		<?php
		$menu_args = array(
			'menu'          =>  'main-menu',
			'menu_id'       =>  '',
			'menu_class'    =>  '',
			'container'     =>  '',
		);
		wp_nav_menu( $menu_args );
		?>
	</nav>
	
	<header role="banner">
		<div class="site-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		</div>
	</header>

	<a href="#" class="open-panel">Open</a>
	<a href="#" class="close-panel">Close</a>

	<div id="content">
