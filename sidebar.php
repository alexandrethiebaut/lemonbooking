<aside id="sidebar" class="small-12 medium-4 large-4 columns show-for-medium-up">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php //dynamic_sidebar( 'sidebar-widgets' ); ?>
		
	<!-- Emplacement logo -->
	<h1><a href="<?= home_url(); ?>"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /></a></h1>
	<!-- // -->

	<div class="menu">
		<?php pll_the_languages(); ?>
	</div>

	<p><?= bloginfo('description') ?></p>

	<?php wp_nav_menu(array('theme_location' => 'social-networks')); ?>

	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
