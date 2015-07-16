<?php get_header(); ?>
<div class="row">

	<?php get_sidebar(); ?>

	<div class="small-12 medium-8 columns" role="main">

	<div id="customCarousel" class="owl-carousel">

		<?php if ( have_posts() ) : ?>

			<?php do_action( 'foundationpress_before_content' ); ?>

			<?php query_posts(array('cat'=>CAT_ARTISTS,'posts_per_page'=>3)); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				
					<div>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('slider-thumbnail'); ?>
						<div class="slide-content show-for-medium-up">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p><?php the_excerpt(); ?></p>
							<a class="button small secondary see-more in-slide" href="<?= the_permalink() ?>">En savoir plus</a>
						</div>
						<a href="<?php the_permalink(); ?>" class="show-for-small-only">
							<h2><?php the_title(); ?></h2>
						</a>
					</a>
					</div>

			<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php wp_reset_query(); ?>

		<?php endif;?>

	</div>

	<!-- Loop articles actualités -->
	<h3 class="cat-title"><?= get_the_category_by_ID(CAT_NEWS); ?></h3>

	<?php if ( have_posts() ) : ?>

		<?php query_posts(array('cat'=>CAT_NEWS,'posts_per_page'=>3)); ?>

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action( 'foundationpress_before_pagination' ); ?>

		<?php wp_reset_query(); ?>

	<?php endif;?>
	<!-- // -->

	<br class="separator">

	<a class="button small secondary see-more" href="<?= get_category_link(CAT_NEWS); ?>">Voir tous les articles</a>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>

</div>
<?php get_footer(); ?>
