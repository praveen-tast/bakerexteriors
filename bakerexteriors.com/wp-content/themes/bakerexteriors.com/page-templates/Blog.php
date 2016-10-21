<?php
/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<section class="blog_section">
			<div class="container">
				<div class="row">
				<div class="empaty_row"></div>
				<div class="blog_page_heading">
					<h2 class="text-center  scrollpoint sp-effect1 active animated fadeInLeft">Blog</h2>
				</div>
					<div class="col-md-8">
						<div class="row">
						<?php $args = array( 'post_type' => 'post','post_status' => 'publish','cat' =>12,'posts_per_page' => 3,'order'=> 'ASC', 'orderby' => 'date','link' =>'lightbox','paged' => $paged );
  $the_query = new WP_Query($args); ?>
   <?php if($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();?>
							<div class="col-sm-6">
								<div class="blogout_line">
									<h3>
										<a href="<?php the_permalink();?>"><?php the_title();?></a>
									</h3>
									<p class="">
										<a href="<?php the_permalink();?>"><?php the_author();?></a>
									</p>
									<p><span class="fa fa-clock-o"></span><?php echo the_time('d M Y');  ?></p>
									<?php if(has_post_thumbnail() ) 
									{
									the_post_thumbnail(array(300,194),array( 'class' => 'img-responsive blog_image' ));
									} ?>
									<hr>
									<p><?php the_content();?></p>
									<a class="btn btn-primary" href="<?php the_permalink();?>">Read More <span class="fa fa-chevron-right"></span></a>
								</div>
							</div>
							
							<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
  <?php endif; ?>
							<!--div class="col-xs-12">
							<hr>
								<ul class="pager">
									<li class="previous">
										<a href="#">← Older</a>
									</li>
									<li class="next">
										<a href="#">Newer →</a>
									</li>
								</ul>
							<hr>
							</div-->
						</div>
					</div>
					<div class="col-md-4">
						<div class="well well_new">
							<h4>Blog Search</h4>
							<div class="input-group">
								<input type="text" class="form-control">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<span class="fa fa-search"></span>
								</button>
								</span>
							</div>
						</div>
						<div class="well well_new">
							<h4>Blog Categories</h4>
							<div class="row">
								<div class="col-xs-12">
								<?php 
  $categories=get_categories(

    array( 'parent' => 11 )

); ?>
									<ul class="list-unstyled">
									<?php 
							foreach($categories as $val) {
								$categories_id_arr[] = $val->cat_ID;
							?>
							<li><a href="<?php echo get_category_link($val->cat_ID);?>" target="_blank"><?php echo $val->cat_name;?></a></li>
							<?php 
							} 
							//print_r($categories_id_arr);die;
							?>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="well well_new">
							<h4>Side Widget Well</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
						</div>
					</div>
				</div>
			</div>
		</section>


<?php
//get_sidebar();
get_footer();
