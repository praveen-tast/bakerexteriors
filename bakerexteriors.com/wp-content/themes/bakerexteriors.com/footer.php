<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<!---------------- section ----------------->		
        <footer>
			<div class="outer_footer">
				<div class="container">
					<div class="menu_list scrollpoint sp-effect1">
						<h4>Navigation</h4>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'footer_nav' ,'menu' =>'footer_menu','fallback' =>false,'') ); ?>
					</div>
					<div class="social_icons scrollpoint sp-effect2">
						<h4>Follow Us</h4>
						<a href="<?php echo get_post_meta('8','facebook',true ); ?>" class="scrollpoint" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
						<a href="<?php echo get_post_meta('8','twitter',true ); ?>" class="scrollpoint" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
						<a href="<?php echo get_post_meta('8','google+',true ); ?>" class="scrollpoint" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
						<a href="<?php echo get_post_meta('8','you_tube',true ); ?>" class="scrollpoint" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
					</div>
				</div>
				<div class="copy_rights">
					<p class="text-center  scrollpoint sp-effect3">Copyright &copy; 2016  bakerexteriors</p>
				</div>
			</div>
        </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/placeholdem.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            appMaster.preLoader();
            $('.home-ad .close').on('click', function(){
                $(this).parent().toggle('fast');
            });
        });
    </script>
	<script>
			$(document).ready(function(){
			  $(".fadeIn").click(function(){
				$("div.row2").fadeIn();
				$("button.fadeIn").hide();
			  });
			});
		</script>
	<?php wp_footer(); ?>
</body>
</html>