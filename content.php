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
		
		<div class="row collapse loop-home">
			
			<div class="small-12 hide-for-large-up columns">
				<a href="<?php the_permalink() ?>">
					<div class="background-overlay"></div>
					<?php the_post_thumbnail('slider-thumbnail'); ?>
				</a>
			</div>
			<div class="show-for-large-up large-4 columns">
				<a href="<?php the_permalink() ?>">
					<div class="background-overlay"></div>
					<?php the_post_thumbnail('news-thumbnail'); ?>
				</a>
			</div>

			<header class="show-for-medium-up medium-1 columns post-date">
				<small><?= get_the_date('j M. Y'); ?></small>
			</header>

			<div class="entry-content small-10 large-7 columns end">

				<a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
				<h5 class="hide-for-medium-up"><?= get_the_date('j M. Y'); ?></h5>
					<?php the_excerpt( __( 'Continue reading...', 'FoundationPress' ) ); ?>
					<a class="link-article" href="<?php the_permalink() ?>">Lire la suite</span><span class="icon-arrow-right"></span></a>
				
			</div>

		</div>

	</article>

</div>
