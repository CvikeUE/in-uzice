<?php get_header(); ?>

<div class="content-area">
	<main id="primary" class="site-main"> 

		<div class="main-container">

			<section class="error-404">

				<div class="error-404-img-wrapper">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/error-404-img.jpg' ?>" alt="<?php echo esc_html_e("Error 404", "vvm-starter"); ?>">
				</div>

				<header>
					<h1><?php echo esc_html_e("Looks like you got lost!", "vvm-starter"); ?></h1>

					<p><?php echo esc_html_e("We couldn't find the page you were looking for.", "vvm-starter"); ?></p>

					<a class="button" href="<?php echo esc_url(site_url()); ?>"><?php esc_html_e("Return Home", "vvm-starter"); ?></a>
				</header>

			</section>

		</div> <!-- end main-container --> 

	</main> <!-- end main -->
</div> <!-- end content-area -->


<?php
get_footer();
