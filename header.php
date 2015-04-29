<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title( '' ); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html( $s ).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title( '' );
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>

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
	        wp_nav_menu('main-menu');
	    ?>
	</nav>
	</div>
	</div>
</div>



	<?php //get_template_part( 'parts/top-bar' ); ?>

	<!-- <nav class="row show-for-medium-up">
		<div class="small-12 columns">
			<div id="menu-toggle">
				<?php 
					// Menu principale du site
					wp_nav_menu('main-menu');
				?>
			</div>
		</div>
	</nav> -->

<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>
