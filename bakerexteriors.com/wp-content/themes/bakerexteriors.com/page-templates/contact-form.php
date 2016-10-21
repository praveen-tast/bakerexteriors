<?php
/**
 * Template Name: contact-form
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!---------------- section ----------------->
		<div class="outer_banner_row">	
			<div class="inner_banners_section">
				<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d6218.614470740694!2d-90.770888!3d38.802513!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d38.802212!2d-90.771231!5e0!3m2!1sen!2sin!4v1476336458887" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="page_heading">
				<h2 class="text-center  scrollpoint sp-effect1">CONTACT US</h2>
			</div>
		</div>	
		
		<div class="wrapper">
			<section class="contact_boxes">
				<div class="container">
					<?php echo do_shortcode('[contact-form-7 id="41" title="Contact form 1"]');?>
				</div>
				<div class="container">
					<div class="col-md-12 contact_address">
						<h3>Baker Exteriors SHOWROOM</h3>
						<div class="row">
							<div class="col-md-4 col-sm-4 scrollpoint sp-effect1">
								<p>50 Centre On The Lk</br>
								Lake St Louis, MO</br>
								63367</p>
								<p>Mailing Address:</br>
								18 Lamplighter Ln.</br>
								O'Fallon MO 63368</p>
							</div>
							<div class="col-md-4 col-sm-4 scrollpoint sp-effect3">
								<p>Wil Baker</br>
								Tel: (636) 887-1911</br>
								Email: wil_baker@yahoo.com</p>
								<p>Lisa Baker</br>
								Tel: (314) 258-5221</br>
								Email: lisa@bakerexteriors.com</p>
							</div>
							<div class="col-md-4 col-sm-4 scrollpoint sp-effect2">
								<p>Luke Theisman</br>
								Email: luke@bakerexteriors.com</p>
								<p>Kristen DiBello</br>
								Tel: (314) 443-1629</br>
								Email: kristen@bakerexteriors.com</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div> 
		<!---------------- section ----------------->	

<?php
//get_sidebar();
get_footer();
