<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<div class="row">

	<article <?php post_class('small-12 columns is-cat'); ?>>
		
		<div class="row collapse loop-home">
			
			<div class="small-12 medium-12 columns">
				<div class="background-overlay"></div>
				<?php the_post_thumbnail('cat-thumbnail'); ?>
			</div>

			<div class="entry-content small-12 medium-12 columns end">
				<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<?php the_excerpt(); ?>
				<a class="link-article" href="<?php the_permalink() ?>">Lire la suite</span><span class="icon-arrow-right"></span></a>
			</div>

		</div>

	</article>

</div>
