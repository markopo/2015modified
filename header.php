<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/featherlight/featherlight.css" rel="stylesheet" type="text/css" >
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/featherlight/featherlight.gallery.css" rel="stylesheet" type="text/css" >

    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/photostack/component.css" rel="stylesheet" type="text/css" >
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/photostack/utomhuspedagogik.css" rel="stylesheet" type="text/css" >

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/featherlight/featherlight.js" ></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/featherlight/featherlight.gallery.js" ></script>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/photostack/modernizr.min.js" ></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/photostack/classie.js" ></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/photostack/photostack.js" ></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
