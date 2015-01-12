	<div class="Footer">
		<div class="u-gridContainer">
				<div class="u-gridRow footer-bg">
					<div class="u-gridCol3">
            			<a href="/home"><img class="logo-footer" src="<?php echo get_stylesheet_directory_uri();?>/img/logo-footer.png"></a>
					</div>
					
					<div class="u-gridCol6">
						<h4>Contactgegevens</h4>
						<hr class="hr-footer">
							<div class="footer-box-child">
								<p>
									De Mérodestraat 30 <br>
									3319 BG Dordrecht
								</p>
							</div>
							<div class="footer-box-child">
								<p>
								   t: 0180 - 499 771 <br>
								   f: 0180 - 499 774 <br>
								   e: info@dVplusR.nl
								</p>
							</div>

							<div class="footer-box-child-right">
            					<a target="_Blank" href="https://nl-nl.facebook.com/dVplusRadministratiesBV"><img class="social-media-button" src="<?php echo get_stylesheet_directory_uri();?>/img/facebook.svg"></a>
            					<img class="social-media-button twitter" src="<?php echo get_stylesheet_directory_uri();?>/img/twitter.svg">
							    <img class="ecabo" src="<?php echo get_stylesheet_directory_uri();?>/img/ecabo.png">
							</div>
					</div>

					<div class="u-gridCol3">
						<h4>Sitemap</h4>
						<hr class="hr-footer">
						<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
						<div class="Footer-inner u-gridRow">
							<?php dynamic_sidebar( 'footer-widgets' ); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
		</div>
	</div>


	<div class="Socket">
		<div class="u-gridContainer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
					<a href="http://www.lokaalgevonden.nl" target="_blank">Lokaal<span class="oranje-tekst">Gevonden</span></a>
			</p>
		</div>
	</div>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/show-more.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
