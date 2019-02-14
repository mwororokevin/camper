<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package camper
 */

?>

	</div><!-- #content -->
	<footer class="footer-distributed">
		<div class="footer-left">
			<div class="co-logo">
				<?php the_custom_logo(); ?>
			</div>
			<div class="footer-links">
				<?php
					wp_nav_menu([
						'theme_location'	=> 'secondary',
					]);
				?>
			</div>
			<div class="footer-links">
				<?php
					wp_nav_menu([
						'theme_location'	=> 'services',
					]);
				?>
			</div>
			<p>
				Camp Stephen Group &copy; <?php echo date('Y') ?>
			</p>
		</div>
		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p>
					<span>5th Floor Royal Square,</span>Ngong Road Nairobi, Kenya
				</p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p>+254 712 345 678</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p>
					<a href="mailto:info@campstephen.com">info@campstephen.com</a>
				</p>
			</div>
		</div>
		<div class="footer-right">
			<h4>About Camp Stephen Group</h4>
			<p class="footer-company-about">				
			Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
			</p>
			<p class="footer-company-about">Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.</p>
			<p class="footer-company-about">Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.</p>
			<div class="footer-icons">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-youtube"></i></a>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
