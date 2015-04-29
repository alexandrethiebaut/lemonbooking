<?php get_header(); ?>
<div class="row">

	<?php get_sidebar(); ?>

	<div class="small-12 large-8 columns" role="main">

	<?php if ( have_posts() ) : ?>

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php //get_template_part( 'content', get_post_format() ); ?>
 			
			<div class="small-12 columns">
				<?php //var_dump(get_field('concert_date')) ?>
				<img src="<?= get_field('group_img')['sizes']['thumbnail']; ?>" alt="<?= get_field('group_img')['title']; ?>">
				<h2><?php the_field('group_name'); ?></h2>
				<span><?php the_field('concert_location'); ?> | <?php the_field('concert_date'); ?></span>
				<a href="<?php the_permalink() ?>">En savoir plus</a>

			</div>

		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action( 'foundationpress_before_pagination' ); ?>

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
