<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<div class="row">

	<article <?php post_class('small-12 columns'); ?>>
		
		<div class="row collapse">
			
			<div class="small-12 medium-4 columns">
				<?php the_post_thumbnail('news-thumbnail'); ?>
			</div>
			<header class="small-2 medium-1 columns">
				<h5><?= get_the_date('j M. Y'); ?></h5>
			</header>
			<div class="entry-content small-10 medium-7 columns end">
			<h2><?php the_title() ?></h2>
				<?php the_excerpt( __( 'Continue reading...', 'FoundationPress' ) ); ?>
				<a class="button radius tiny secondary" href="<?php the_permalink() ?>"><span class="icon-arrow-right"></span></a>
			</div>

		</div>

	</article>

</div>
