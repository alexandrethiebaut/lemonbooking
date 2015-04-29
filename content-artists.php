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
		
		<div class="row">
			
			<div class="small-12 medium-12 columns">
				<?php the_post_thumbnail('cat-thumbnail'); ?>
			</div>
			<div class="entry-content small-12 medium-12 columns end">
			<h2><?php the_title() ?></h2>
				<?php the_excerpt( __( 'Continue reading...', 'FoundationPress' ) ); ?>
				<a href="<?php the_permalink() ?>">Lire la suite</a>
			</div>

		</div>

	</article>

</div>
