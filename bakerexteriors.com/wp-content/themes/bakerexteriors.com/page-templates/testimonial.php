<?php
/**
 * Template Name: Testimonial
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!---------------- section ---------------s-->
		<div class="outer_banner_row">	
			<div class="inner_banners_section">
				<div class="faqs_sec" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/head_bg_img.png); background-position: center top;">
                    <div class="container">
                        <div class="imgover_contant">
                            <h3 class="scrollpoint sp-effect1">Read below for some of our reviews:</h3>
                            <p class="scrollpoint sp-effect3">We have 5-star ratings on Home Advisor, Angie's List, and everywhere else you look!</p>
                        </div>
                    </div>
                </div>
				<div class="page_heading">
					<h2 class="text-center  scrollpoint sp-effect1">Testimonials</h2>
				</div>
			</div>
		</div>		
		<div class="wrapper">
			<section class="contact_boxes" id="speakers1">
				<div class="container">
					<div class="col-md-8 col-md-offset-2">
						<?php												
							$categories = get_categories( array( 'parent' => 11 ));
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
					<div id="content">
						<?php 
						foreach ($categories_id_arr as $ckey => $cval) {
						$cat_post_count = 0;
						$get_category = get_category($cval);
						$cat_post_count = $get_category->category_count;						
						//print_r( $cat_post_count);die;
						//$cat_post_count_inc = 1;
						?>
						<!-------tab-s------->
						<div class="tab_div" id="cat_tab_<?php echo $cval;?>">
							<div class="row text-center">
								<div class="col-md-8 col-md-offset-2">
									<br>
									<div id="tesimonial-example-generic<?php echo $cval;?>" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators carousel-indicators-set">
										<?php 
										$xi = 1; 
										for ($x = 0; $x <= ($cat_post_count-1); $x++)
											{ 
											$active_clas='';
											if($xi == 1)
												$active_clas = 'active';
											$xi++;
										?>
										 <li data-target="#tesimonial-example-generic<?php echo $cval;?>" data-slide-to="<?php echo $x;?>" class="<?php echo $active_clas; ?>"></li>
										<?php } ?>
										</ol>							
										<div class="carousel-inner">
						<?php
							$args = array( 'post_type' => 'post','post_status' => 'publish','cat' =>$cval,'posts_per_page' => 6,'order'=> 'ASC', 'orderby' => 'date','link' =>'lightbox','paged' => $paged );
							$the_query = new WP_Query($args); 
							//if($the_query->have_posts()) {
							$xi2 = 1; 
							while ($the_query->have_posts()) {
								$the_query->the_post();
								$active_clas2='';
								if($xi2 == 1)
									$active_clas2 = 'active';
								$xi2++;
							?>														
										<!--- post -s--> 
										
											<div class="item <?php echo $active_clas2; ?>">
												<div class="testimonial-section">
													<p><b>Here's a recent Google Review:</b></p>
													<p><?php the_content(); ?></p>
												</div>
												<div class="testimonial-section-name">
													<img src="images/user-dummy-img.png" alt="testimonials in bootstrap" class="img-circle">
													-  arolyn H
												</div>
											</div>
										
										<!--- post -e-->
						<?php 
						} //endwhile;  
						wp_reset_postdata(); 
						?>
						</div>
									</div>
								</div>
							</div>	
						</div>
						<!-------tab-e------->
					<?php	
						// } //endif;
					} // foreach
					?>					
					</div>
				</div>
			</section>
		</div> 
		<!---------------- section ---------------e-->
<?php
//get_sidebar();
get_footer();