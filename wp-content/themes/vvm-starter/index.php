<?php get_header(); ?>
<!-- TEST -->
<div class="content-area">
	<main id="primary" class="site-main"> 

		<div class="main-container">

			<?php if( have_posts() ) : ?>

			<div class="posts-list">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'post-item' ); ?>

				<?php endwhile; ?>

			</div> <!-- end posts-list -->

			<?php
				the_posts_pagination( array(
					'prev_text'		=> esc_html__('Next', 'vvm-starter'),
					'next_text'		=> esc_html__('Previous', 'vvm-starter')
				));
			?>

			<?php else : ?>

				<p><?php esc_html_e('There are no published posts!', 'vvm-starter') ?></p>

			<?php endif; ?>

		</div> <!-- end main-container -->

	</main> <!-- end site-main -->
</div> <!-- end content-area -->

<?php get_footer(); ?>