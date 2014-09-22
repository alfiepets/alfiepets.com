<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Alfiepets
 * @since Twenty Fourteen 1.0
 */
?>

	<?php /*?>	</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?><?php */?>
    		<!-- Footer -->
				<div class="purchase">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<p><strong>Alfie</strong> LLC is Atlanta's most pawsome dog walking company.<br />
						<span>Reach out to learn more about our services!</span></p>
					</div>
					<div class="col-md-2 purchase-button">
						<form method="get" action="contact.html">
							<button type="submit" class="btn btn-default btn-green">Request An Appointment</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 contact-info">
						<h6>A Little About Us</h6>
						<p><strong>The Alfie team formed in 2014 from a group of Atlanta's best and most experienced dog walkers and pet sitters. Bonded, insured, passionate and proven, you can rest assured that Alfie will take the very best care of you, your pup, and your home.</strong></p>
					</div>
					<div class="col-md-3 contact-info">
						<h6>Keep in touch</h6>
						<p>Follow Alfie for all the latest news, and special offers.</p>
						<p class="social">
							<a href="http://www.facebook.com/alfiepets" class="facebook" target="_blank"></a> <a href="http://www.instagram.com/alfiepets" class="instagram" target="_blank"></a> <a href="http://www.twitter.com/alfiepets" class="twitter" target="_blank"></a>
						</p>
						<p class="c-details">
							<span>Email</span> <a href="mailto:info@alfiepets.com" title="">info@alfiepets.com</a><br >
							<span>Phone</span> (770) 712 0871
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 copyright">
						<p>&copy; Copyright 2014. All rights reserved. Alfie LLC</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer end -->
		
		<!-- Javascript plugins -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/carouFredSel.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/ekkoLightbox.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
       <script src="<?php echo get_template_directory_uri(); ?>/js/gmap3.min.js"></script>
	   <script src="<?php echo get_template_directory_uri(); ?>js/jquery-ui.min.js"></script>
</body>
</html>