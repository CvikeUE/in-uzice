<footer class="site-footer">

	<div class="footer-nav">
		<div class="main-container">

			<div class="wrapper">
				<?php vvm_starter_theme_logo(); ?>

				<nav id="footer-navigation" class="footer-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer_navigation',
							'menu_id'        => 'footer-menu',
						)
					);
					?>
				</nav>
			</div> <!-- end wrapper -->

			<div class="copy-wrapper">
				<p class="copy-text">&copy; <?php esc_html_e('2022 VVM Starter Theme. All rights reserved.', 'vvm-starter'); ?></p>
			</div> <!-- end copy-wrapper -->

		</div> <!-- end main-container -->

	</div> <!-- end footer-nav -->

</footer> <!-- end scu-footer -->

</div><!-- #page -->

<div class="page-overlay"></div>

<?php
echo "test za commit";
wp_footer(); ?>

</body>

</html>