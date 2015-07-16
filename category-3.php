<!-- TEMPLATE CATEGORIE CONCERT -->

<?php get_header(); ?>
<div class="row">

	<?php get_sidebar(); ?>

	<div class="small-12 medium-8 columns" role="main">

	<h2 class="cat-title">
		<?php if(get_locale()=="fr_FR") : ?>
			Prochains concerts
		<?php else : ?>
			Upcoming concerts
		<?php endif; ?>
	</h2>

	<?php if ( have_posts() ) : ?>

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
 			
			<div class="small-12 columns is-concert">
				<?php //var_dump(get_field('concert_date')) ?>
				<img src="<?= get_field('group_img')['sizes']['thumbnail']; ?>" alt="<?= get_field('group_img')['title']; ?>">
				<div class="infos-concert">
					<h2><?php the_field('group_name'); ?></h2>
					<span><?php the_field('concert_location'); ?> | <?php the_field('concert_date'); ?></span>
				</div>
				<a href="<?php the_permalink() ?>">En savoir plus</a>

			</div>

		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action( 'foundationpress_before_pagination' ); ?>

	<?php endif;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>

</div>
<?php get_footer(); ?>
