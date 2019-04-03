<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dj
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer dj-footer-bg">
		<div class="container dj-footer">
			<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="DJ banner"></a></div>
			<div class="">
						<?php
			wp_nav_menu( array(
			  'theme_location' => 'menu-3',
			  'menu_class'        => 'dj-social-icons'
			) );
			?>
			</div>
			<div class="copyright">Copyright &copy; <?php echo date('Y'); ?>, All rights reserved by Dr. A <span>| </span> Powered by <a href="http://dzineden.com/" rel="nofollow" target="blank">dzineden</a></div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- <script src="js/darkbox.js"></script> -->
<script src='https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js'></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js'></script>

<!-- music -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script src='https://connect.soundcloud.com/sdk/sdk-3.0.0.js'></script>




</body>
</html>
