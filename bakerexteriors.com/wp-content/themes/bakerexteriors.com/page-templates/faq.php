<?php
/**
 * Template Name: Faq
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
                            <h3 class="scrollpoint sp-effect1">Frequently Asked Questions</h3>
                            <p class="scrollpoint sp-effect3">At Baker Exteriors, we want to take the guessing game out of exterior repair and renovation. If you are new to a project, you probably have some questions, and hopefully, we can answer them! Here are some of our most frequently asked questions (and remember, no question is too small. If you're not sure, ask us!)</p>
                        </div>
                    </div>
                </div>
				<div class="page_heading">
					<h2 class="text-center  scrollpoint sp-effect1">FAQ's</h2>
				</div>
			</div>
		</div>		
		<div class="wrapper">
			<section class="contact_boxes">
				<div class="container">
					<div class="main">
						<div class="accordion">
						<?php $args = array( 'post_type' => 'post','post_status' => 'publish','cat' =>5,'posts_per_page' => 3,'order'=> 'ASC', 'orderby' => 'date','link' =>'lightbox','paged' => $paged );
  $the_query = new WP_Query($args); ?>
  
   <?php if($the_query->have_posts()) : 
			$temp = 0;
			while ($the_query->have_posts()) : 
			  	$the_query->the_post();
				
				$class = '' ;
				if($temp==0)					   
					$class = 'open' ;
					
				$temp = 1;
	?>
							<div class="accordion-section">
								<a class="accordion-section-title" href="#<?php echo get_the_ID();?>"><?php the_title();?></a>
								
								<div id="<?php echo get_the_ID();?>" class="accordion-section-content <?php echo $class ;?>">
									<p><?php the_content();?></p>
									
								</div><!--end .accordion-section-content-->
							</div><!--end .accordion-section-->
							<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
  <?php endif; ?>
						</div><!--end .accordion-->
					</div>
				</div>
			</section>
		</div> 
		<!---------------- section ----------------->	
<?php
//get_sidebar();
get_footer();
