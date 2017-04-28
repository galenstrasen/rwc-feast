<?php
/*
Template Name: Feast Page
*/
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/assets/css/feast.css" media="all">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="<?php bloginfo('template_url')?>/assets/js/main.js"></script>
		<script src="<?php bloginfo('template_url')?>/assets/js/jquery.bxslider/jquery.bxslider.min.js"></script>
		<link href="<?php bloginfo('template_url')?>/assets/js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
</div>
</div>
<script type="text/javascript"> 
$(document).ready(function(){ var j = jQuery.noConflict(); $('.testimonial_slider').bxSlider({ }); }); 
</script>
<?php while (have_posts()) : the_post(); ?>

<!-- End Kill -->
<div class="feastmain">
<div class="section" id="intro">
	<div class="container">
		<div class="row navtop">
			<a href="http://rachelwcole.com/" target="_blank">
			<div class="col-sm-12 backto">
				<img src="<?php bloginfo('template_url')?>/assets/img/icon_arrow.png"> Return to RachelWCole.com
			</div>
			</a>
		</div>
		<div class="row vertical-center">
			<div class="col-sm-12 title">
				<div class="logo">
					<img src="<?php bloginfo('template_url')?>/assets/img/image_feast.png">
				</div>
				<div class="subtitle">
					A 3-month journey to becoming a Well-fed Woman
				</div>
				<div class="signature">
					From Rachel W. Cole
				</div>
				<div class="divider"></div>
			</div>
		</div>
	</div>
</div>
<div id="navigation">
	<div id="nav-bar">
		<div class="holder clearfix">
		<a href="#" class="logo"><img src="<?php bloginfo('template_url');?>/assets/img/image_feast.png"/></a>
		<div id="mobile-nav">
			<a href="#" id="mobile-nav-icon">
				<ul>
					<li class="line"></li>
					<li class="line"></li>
					<li class="line"></li>
				</ul>
	
			</a>
		</div>
		<div id="full-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'primary_navigation' ) ); ?>
		</div>
		</div>
	
	
</div>

<div id="mobile-menu">
	<?php wp_nav_menu( array( 'theme_location' => 'primary_navigation' ) ); ?>
	</div>
	
</div>	
	
<div id="section1" class="section">
	<div class="holder clearfix">
		<?php the_field('section_1_content')?>
	</div>
</div>
<div id="section2" class="section">
	<div class="holder clearfix">
		<?php the_field('section_2_content')?>
	</div>
</div>
<div id="section3" class="section">
	<div class="holder clearfix">
		<?php the_field('section_3_content')?>
	</div>
</div>
<div id="section4" class="section">
	<div class="holder clearfix">
		<?php the_field('section_4_content')?>
	</div>
</div>
<div id="section5" class="section">
	<div class="holder clearfix">
		<div class="half fleft" id="section5_left">
		<img src="<?php the_field('section_5_content_left_image')?>"/>
		<?php the_field('section_5_content_left')?>
		</div>
		<div class="half fright">
		<?php the_field('section_5_content_right')?>		
		</div>
		<div class="clearfix"></div>
		<div id="section5_content">
		<?php the_field('section_5_content_bottom')?>
		</div>
	</div>
</div>
<div id="section6" class="section">
	<div class="holder clearfix">
		<?php the_field('section_6_content')?>
		<p><img src="<?php bloginfo('template_url')?>/assets/img/icon_arrow-more.png"/></p>
	</div>
</div>
<div id="section7" class="section">
	<div class="holder clearfix">
		<div class="half fleft">
		<?php the_field('section_7_content')?>
		</div>
		<div class="half fright">
			<ul>
			<?php while(have_rows('section_7_schedule')):the_row();?>
				<li>
					<?php the_sub_field('feast_schedule')?>
				</li>
			<?php endwhile?>
			</ul>
		</div>		
	</div>
</div>

<div id="section8" class="section">
	<div class="holder clearfix">
		<div class="half fleft">
		<div class="underline"><span> Weekly Schedule</span></div>
		</div>
		<div class="half fright">
			<ul>
			<?php while(have_rows('section_8_schedule')):the_row();?>
				<li>
					<?php the_sub_field('weekly_info')?>
				</li>
			<?php endwhile?>
			</ul>
		</div>		
	</div>
</div>


<div id="section9" class="section">
	<div class="holder clearfix">
		<div class="square"><span>Plus</span></div>	
		<ul id="large_bubbles">
			<?php while(have_rows('section_9_large_bubbles')):the_row();?>
				<li>
					<?php if (get_sub_field('image')):?>
					<img src="<?php the_sub_field('image')?>"/>
					<?php else: ?>
					<img src="<?php bloginfo('template_url')?>/assets/img/large_bubble_holder.jpg"/>
					<?php endif;?>
					<p><?php the_sub_field('caption')?></p>
				</li>
			<?php endwhile?>
		</ul>

	<?php the_field('section_9_content')?>
		
		<ul id="small_bubbles">
			<?php while(have_rows('section_9_small_bubbles')):the_row();?>
				<li>
					<?php if (get_sub_field('image')):?>
					<img src="<?php the_sub_field('image')?>"/>
					<?php else: ?>
					<img src="<?php bloginfo('template_url')?>/assets/img/small_bubble_holder.jpg"/>
					<?php endif;?>
					<p><?php the_sub_field('caption')?></p>
				</li>
			<?php endwhile?>
		</ul>
	</div>
</div>
	
<div id="section10" class="section">
	<div class="holder clearfix">
		<div class="half fleft" id="section10_left">
		<?php the_field('section_10_content_left')?>
		</div>
		<div class="half fright" id="section10_right">
		<?php the_field('section_10_right')?>		
		</div>
		<div class="clearfix"></div>
			
	</div>
</div>

<div id="section11" class="section">
	<div class="holder clearfix">
		
		<?php the_field('section_11_content')?>
		
	</div>
</div>

<div id="section12" class="section">
	<div class="holder clearfix">
		
		<?php the_field('section_12_content')?>
		
	</div>
</div>

<div id="section13" class="section">
	<div class="holder clearfix">
		<div class="half fleft">
		<?php the_field('section_13_content_left')?>
		</div>
		<div class="half fright">
		<?php the_field('section_13_right')?>		
		</div>
		<div class="clearfix"></div>
			
	</div>
</div>

<div id="section14" class="section">
	<div class="holder clearfix">
			<div class="underline"><span>Praise</span></div>
			
			<ul class="testimonial_slider">
						<?php while(have_rows('testimonial_slider')):the_row();?>
							<li>
								
								<div class="testimonial_holder">
									<div id="testimonial_before" class="fleft half">
									<h2>Before</h2>
									<?php the_sub_field('testimonial_before')?>
									</div>
									<div id="testimonial_after" class="fleft half">
									<h2>After</h2>
									<?php the_sub_field('testimonial_after')?>
									</div>
									<div class="clearfix"></div>
									
								</div>
							</li>
						<?php endwhile?>
					</ul>
						<?php $counter = 0; ?>
					<ul class="testimonials">
						<?php while(have_rows('section_14_testimonials')):the_row();
						$testimonial = get_sub_field('testimonial');
						?>
						<?php $counter++; ?>
						<?php if( $counter > 6 ): ?>
						<?php break; ?>
						<?php endif?>
							<li>
								<div class="testimonial_holder excerpt">
									<a href="#<?php echo 'testimonial-id-' . $counter; ?>" class="fancybox-inline">
										
										<?php 
										echo substr($testimonial, 0, strpos($testimonial," ",240)); ?>
											<div class="readmore">...Read More</div>
												<div class="divider"></div>
											<div class="author"><?php the_sub_field('author')?></div>
									</a>
								</div>
								
								
								<div class="testimonial_holder full">
								<div id="<?php echo 'testimonial-id-' . $counter; ?>" class="testimonial_container">
										<?php echo $testimonial ?>
										<div class="divider"></div>
										<div class="author"><?php the_sub_field('author')?></div>
								</div>
								</div>
							</li>
						<?php endwhile?>
					</ul>
					<div id="viewmore"><a href="#">View More</a></div>
					<ul class="testimonials testimonials_hidden">
						<?php while(have_rows('section_14_testimonials')):the_row();
						$testimonial = get_sub_field('testimonial');?>
						
						<?php if( $counter > 6 ): ?>
						
							<li>
								<div class="testimonial_holder excerpt">
									<a href="#<?php echo 'testimonial-id-' . $counter; ?>" class="fancybox-inline">
										<?php echo substr($testimonial, 0, strpos($testimonial," ", 240)); ?>
											<div class="readmore">...Read More</div>
												<div class="divider"></div>
											<div class="author"><?php the_sub_field('author')?></div>
									</a>
								</div>
								
								
								<div class="testimonial_holder full">
								<div id="<?php echo 'testimonial-id-' . $counter; ?>" class="testimonial_container">
										<?php echo $testimonial?>
										<div class="divider"></div>
										<div class="author"><?php the_sub_field('author')?></div>
								</div>
								</div>
							</li>
							<?php endif?>
						<?php endwhile?>
					</ul>
					<div id="viewless"><a href="#">View Less</a></div>
				</div>
	</div>


<div id="section15" class="section">
	<div class="holder clearfix">
	<div class="underline"><span><?php the_field('section_15_header')?></span></div>
			<ul>
			<?php while(have_rows('section_15_faqs')):the_row();?>
				<li>
					<?php the_sub_field('question')?>
					<?php the_sub_field('answer')?>
				</li>
			<?php endwhile?>
			</ul>
		
	</div>
</div>

<div id="section16" class="section">
	<div class="holder clearfix">	
		<?php the_field('section_16')?>
	</div>	
</div>



<div class="section" id="footer">
	<div class="container">
		<div class="row">
			<a href="http://rachelwcole.com/" target="_blank">
			<div class="col-sm-4 spacebottom">
				<img src="/wp-content/themes/rachelcole/assets/img/icon_arrow.png"> Return to RachelWCole.com
			</div>
			</a>
			<div class="col-sm-4 spacebottom">
				<img src="/wp-content/themes/rachelcole/assets/img/image_feast-footer.png">
			</div>
			<div class="col-sm-4 socials">
				<a href="https://www.facebook.com/feedyourlife" target="_blank"><img src="/wp-content/themes/rachelcole/assets/img/icon_social-facebook.png"></a>
				<a href="https://twitter.com/rachelwcole" target="_blank"><img src="/wp-content/themes/rachelcole/assets/img/icon_social-twitter.png"></a>
				<a href="http://pinterest.com/rachelwcole/" target="_blank"><img src="/wp-content/themes/rachelcole/assets/img/icon_social-pinterest.png"></a>
				<a href="http://instagram.com/rachelwcole" target="_blank"><img src="/wp-content/themes/rachelcole/assets/img/icon_social-instagram.png"></a>
			</div>
		</div>
	</div>
</div>

</div>
<?php endwhile; ?>
