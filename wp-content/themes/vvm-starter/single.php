<?php get_header(); ?>

<div class="content-area page-content">
	<main id="primary" class="site-main">   

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content' ); ?>

		<?php endwhile; ?>

	</main> <!-- end site-main -->
</div> <!-- end content-area -->

<?php get_footer(); ?>
