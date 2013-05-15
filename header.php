<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Melany
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="container hfeed site">
	<?php do_action( 'before' ); ?>
	<header class="navbar navbar-fixed-top navbar-inverse" role="banner">
		<div class="navbar-inner">
			<div class="container">

				<!-- toggle collapsed navbar content -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="brand" rel="home"><?php bloginfo( 'name' ); ?></a>
				<!-- ## Site description ##
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				-->
				<nav id="nav-collapse collapse">
					<h1 class="menu-toggle"><?php _e( 'Menu', 'melany' ); ?></h1>
					<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'melany' ); ?>"><?php _e( 'Skip to content', 'melany' ); ?></a></div>

					<?php wp_nav_menu( array( 'theme_location' => 'primary',
						'container' => false,
						'menu_class' => 'nav',
						'items_wrap' => '<ul class="%2$s">%3$s</ul>' ) ); ?>
				</nav>

				<?php get_search_form( true ); ?>
			</div>
		</div>
	</header>

	<section id="main" class="container-fluid">
		<div class="row-fluid">