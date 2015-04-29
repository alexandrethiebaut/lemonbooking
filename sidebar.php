<aside id="sidebar" class="small-12 large-4 columns show-for-medium-up">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php //dynamic_sidebar( 'sidebar-widgets' ); ?>
		
	<!-- Emplacement logo -->
	<h1 class="textalignright"><a href="<?= home_url(); ?>"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /></a></h1>
	<!-- // -->
	
	<?php 
		// Emplacement menu lang 
		//wp_nav_menu('');
	?>

	<p class="textalignright"><?= bloginfo('description') ?></p>

	<?php 
		// Menu Réseaux sociaux
		//wp_nav_menu('');
	?>

	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
