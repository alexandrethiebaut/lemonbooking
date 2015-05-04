<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>
			<?php 
				if ( is_home() || is_front_page() ) {
					bloginfo( 'name' );
				} elseif ( is_404() ) {
					echo 'Error 404 Not Found';
				} elseif ( is_single() ) {
					wp_title( '' );
				} elseif (is_category() ) {
					echo single_cat_title().' | '; bloginfo( 'name' );
				} 
			?>
		</title>

		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.css">


		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	
	<?php do_action( 'foundationpress_layout_start' ); ?>
	
	<nav class="tab-bar show-for-small-only">
		<a class="left-off-canvas-toggle" href="#">
			<section class="left-small">
				<span class="icon-menu"></span>
			</section>
			<section class="middle tab-bar-section"></section>
			<section class="right-small"></section>
		</a>
	</nav>

	<?php get_template_part( 'parts/off-canvas-menu' ); ?>

<div class="fixed">

	<div id="menuToggle" class="top-bar-container contain-to-grid show-for-medium-up">
		<nav class="top-bar" data-topbar role="navigation">
		    <span class="icon-menu"></span>
		</nav>
	</div>

	<div class="bg-menuToggle">
		<div class="row">
			<nav class="hide small-12 columns" data-topbar role="navigation" id="navToggle">
			    <?php 
			        // Menu principale du site
			        wp_nav_menu(array('theme-location' => 'main-menu'));
			    ?>
			</nav>
		</div>
	</div>

</div>

<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>
