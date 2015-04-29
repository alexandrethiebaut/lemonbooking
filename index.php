<?php get_header(); ?>
<div class="row">

	<?php get_sidebar(); ?>

	<div class="small-12 large-8 columns" role="main">

	<div id="customCarousel" class="owl-carousel">

	<?php if ( have_posts() ) : ?>

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php query_posts(array('cat'=>CAT_ARTISTS,'posts_per_page'=>3)); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			
				<div>
					<?php the_post_thumbnail('slider-thumbnail'); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>

		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php //do_action( 'foundationpress_before_pagination' ); ?>

		<?php wp_reset_query(); ?>

	<?php endif;?>

	</div>

	<h3><?= get_the_category_by_ID(CAT_NEWS); ?></h3>

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



	<?php //if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
		<!-- <nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav> -->
	<?php //} ?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>

</div>
<?php get_footer(); ?>
