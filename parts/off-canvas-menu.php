<aside class="left-off-canvas-menu" aria-hidden="true">

	<div class="menu-wrapper">
		<h1 class="textalignright"><a href="<?= home_url(); ?>"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /></a></h1>
		<p><?= bloginfo('description'); ?></p>
		<?php foundationpress_mobile_off_canvas(); ?>
    </div>

</aside>