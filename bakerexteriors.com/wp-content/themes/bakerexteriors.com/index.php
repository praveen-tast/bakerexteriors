<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<!---------------- section ----------------->
		<div class="outer_banner_row">	
			<div class="slider_section">
				<div id="carousel-example-generic" class="carousel slide" data-interval="9000" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					</ol>   
					<div class="carousel-inner">
						<div class="active item">
							<img src="<?php echo get_template_directory_uri(); ?>/images/slide_1.jpg" alt="First Slide">
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri(); ?>/images/slide_2.jpg" alt="Second Slide">
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left fa fa-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right fa fa-chevron-right"></span>
					</a>
				</div>
			</div>
			<div class="search_bar">
				<div class="input-group  scrollpoint sp-effect3">
					<input type="text" class="form-control" placeholder="Search site">
					<span class="input-group-btn">
						<button type="button" class="btn btn-default">Schedule Us!</button>
					</span>
				</div>
			</div>
			<div class="heading_sec">
				<h3 class="text-center  scrollpoint sp-effect1">Call us at (314) 258-5221 for your free, no pressure home evaluation!</h3>
				<h5 class="text-center  scrollpoint sp-effect2">FOR A LIMITED TIME-OFFERING FREE UPGRADE FROM 3-TAB TO ARCHITECTURAL SHINGLES!</h5>
			</div>
		</div>	
		
		<div class="wrapper">
			<section class="about_service_boxes">
				<div class="container">
				<?php $args = array( 'post_type' => 'post','post_status' => 'publish','cat' =>3,'posts_per_page' => 3,'order'=> 'ASC', 'orderby' => 'date','link' =>'lightbox','paged' => $paged );
  $the_query = new WP_Query($args); ?>
   <?php if($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();?>
					<div class="col-md-4 col-sm-4 product_box scrollpoint sp-effect1">
						<div class="inner_product_box">
							<div class="box_img_sec">
							
							<?php if(has_post_thumbnail() ) 
                            {
							 the_post_thumbnail();
							} ?>
								
							</div>
							<div class="box_text_sec">
								<h3><?php the_title();?></h3>
								<p><?php the_content();?></p>
								<a href="<?php the_permalink();?>" type="submit" class="btn btn-primary btn-lg">View more</a>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
  <?php endif; ?>
					
				</div>
			</section>
		</div> 

<?php
//get_sidebar();
get_footer();
