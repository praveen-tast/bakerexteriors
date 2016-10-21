<?php
/**
 * Template Name: Ourteam
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<!---------------- section ----------------->
		<div class="outer_banner_row">	
			<div class="inner_banners_section">
				<div class="faqs_sec" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/head_bg_img.png); background-position: center top;">
                    <div class="container">
                        <div class="imgover_contant">
                            <h3 class="scrollpoint sp-effect1">People behind Baker Bxteriors</h3>
                            <p class="scrollpoint sp-effect3">At Baker Exteriors, we want to take the guessing game out of exterior repair and renovation. If you are new to a project, you probably have some questions, and hopefully, we can answer them! Here are some of our most frequently asked questions (and remember, no question is too small. If you're not sure, ask us!)</p>
                        </div>
                    </div>
                </div>
				<div class="page_heading">
					<h2 class="text-center  scrollpoint sp-effect1">Meet the team</h2>
				</div>
			</div>
		</div>		
		<div class="wrapper">
			<section class="contact_boxes" id="speakers">
				<div class="container">
					<!-- First Row of Speakers -->
					<div class="row1">
						<!-- Speaker 1 -->
						<?php $args = array( 'post_type' => 'post','post_status' => 'publish','cat' =>6,'posts_per_page' => 3,'order'=> 'ASC', 'orderby' => 'date','link' =>'lightbox','paged' => $paged );
  $the_query = new WP_Query($args); ?>
   <?php if($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();?>
						<div class="col-sm-4 col-md-4 team_outer team_outer team_outer team_outer team_outer">
							<a href="javascript:void(0)" class="member-profile">
								<div class="hover_img">
								<?php if(has_post_thumbnail() ) 
                                {
							 the_post_thumbnail();
							  } ?>
								<span><?php the_title();?></span>
								</div>
							</a>	
							<ul>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							<div class="member_detail">
								<?php the_content();?>
							</div>
						</div>
						<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
  <?php endif; ?>
						<!-- Speaker 2 -->
						
					</div> <!-- End First Row -->
					<div class="clear"></div>
					<!-- Second Row of Speakers -->
					<div class="col-sm-8 col-sm-offset-2 row2">
					<?php $args = array( 'post_type' => 'post','post_status' => 'publish','cat' =>7,'posts_per_page' => 3,'order'=> 'ASC', 'orderby' => 'date','link' =>'lightbox','paged' => $paged );
  $the_query = new WP_Query($args); ?>
   <?php if($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();?>
						<!-- Speaker 4 -->
						<div class="col-sm-6 col-md-6 team_outer">
							<a href="javascript:void(0)" class="member-profile">
								<div class="hover_img">
								<?php if(has_post_thumbnail() ) 
                                {
							 the_post_thumbnail();
							  } ?>
								<span>Luke Theisman</span>
								</div>
							</a>					
							<ul>
								<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							<div class="member_detail">
								<p><b>Account Manager</b></p> 
								<p>luke@bakerexteriors.com</p>
							</div>							
						</div>
						
						<!-- Speaker 5 -->	
						<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
  <?php endif; ?>
					</div>
					<!-- View All Button -->
					<div class="col-xs-12">
						<button class="btn btn-transparent fadeIn">View All</button>
					</div>	
				</div>
			</section>
		</div> 
		<!---------------- section ----------------->		


<?php
//get_sidebar();
get_footer();
