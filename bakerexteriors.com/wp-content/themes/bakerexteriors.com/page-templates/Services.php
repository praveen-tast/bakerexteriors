<?php
/**
 * Template Name: Services
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="outer_banner_row">	
			<div class="inner_banners_section">
				<div class="faqs_sec" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/head_bg_img.png); background-position: center top;">
                    <div class="container">
                        <div class="imgover_contant">
                            <h3 class="scrollpoint sp-effect1">Our Products and Services</h3>
                            <p class="scrollpoint sp-effect3">At Baker Exteriors, we know the remodeling process can be scary. From navigating an insurance claim to determining the best design for your home, we can help you every step of the way. Whether you are just starting to research your options, or ready to get started, give us a call-our team of experts is ready to help!</p>
                        </div>
                    </div>
                </div>
				<div class="page_heading">
					<h2 class="text-center  scrollpoint sp-effect1">Services</h2>
				</div>
			</div>
		</div>		
		<div class="wrapper">
			<section class="contact_boxes" id="speakers1">
				<div class="container">
					<div class="text-center services_page">
						<h3>Our Products and Services Include:</h3>
						<p>Roofing installation-commercial and residental, metal to architectural, we do it all!</p>
						<p>Gutter installation-we fabricate gutters to your specifications on site.</p>
						<p>Windows and doors-want to have a completely new look? Windows and doors add efficiency, beauty and style to your home.</p>
						<p>Siding-any style, any color, we can make your home look like it came out of a magazine!
						<p>Power washing-improve your exterior's beauty and longevity.</p>
					</div>
					<div class="">
					<?php												
							$categories = get_categories( array( 'parent' => 13 ));
							$categories_id_arr = array();
						?>
						<ul id="tabs">
							<?php 
							foreach($categories as $val) {
								$categories_id_arr[] = $val->cat_ID;
							?>
							<li class="tab_li" >
								<a href="#cat_tab_<?php echo ($val->cat_ID);?>" ><?php echo $val->cat_name;?></a>
							</li>
							<?php 
							} 
							//print_r($categories_id_arr);die;
							?>
						</ul>
					</div>					
					<div id="content" class="tab_content">
						<div id="container">
							<?php foreach ($categories_id_arr as $ckey => $cval) {
					  $args = array( 'post_type' => 'post','post_status' => 'publish','cat' =>$cval,'posts_per_page' => 3,'order'=> 'ASC', 'orderby' => 'date','link' =>'lightbox','paged' => $paged );
                      $the_query = new WP_Query($args); 
                      if($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();?>
							<div class="tab_div" id="cat_tab_<?php echo $cval;?>">
								<div class="inner_tab_row">
									<?php the_content();?>
									
								</div>
							</div>
							<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
  <?php endif; }?>
  
						</div>
						<!-- ROW END -->
						
						<div class="gallery_sec">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-6"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/galler-img1.jpg" /></div>
								<div class="col-md-4 col-sm-4 col-xs-6"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/galler-img2.jpg" /></div>
								<div class="col-md-4 col-sm-4 col-xs-6"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/galler-img3.jpg" /></div>
								<div class="col-md-4 col-sm-4 col-xs-6"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/galler-img4.jpg" /></div>
								<div class="col-md-4 col-sm-4 col-xs-6"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/galler-img5.jpg" /></div>
								<div class="col-md-4 col-sm-4 col-xs-6"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/galler-img6.jpg" /></div>
							</div>
						</div>
						
						
					</div>
				</div>
			</section>
		</div> 

<?php
//get_sidebar();
get_footer();
