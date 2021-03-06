<?php
/**
 * Template Name: List Product with all category template
 *
 * @package Matata
 */

get_header(); ?>
	<aside id="firstary_product" class="widget-area" role="complementary">
		<!-- Cay thu muc san pham-->
		<div id="sidebar">
			<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
				<ul style="overflow: hidden; width: auto; height: auto;">
					<li>
						<a href="<?php echo get_home_url(); ?>">Trang chủ</a>
					</li>
					<li class="active">
						<a href="<?php echo get_page_link(79);?>">Nhóm sản phẩm</a>
					</li>
					<li>
						<a href="#">Sản phẩm</a>
						<ul class="product-menu sub-menu sub-menu-lv-1 ">
							<li>
								<?php
									left_menu( 'san_pham', 'danh_muc_san_pham' );			
								?>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<!-- <li>End cay thu muc san pham</li>-->	
	</aside>
	
	<!-- View san pham-->
	<div id="primary_product" class="content-area">
		<main id="main" class="site-main" role="main" style="padding: 10px;">
			<?php
				product_all_category( 'san_pham', 'danh_muc_san_pham' );			
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<!-- End view san pham-->
	
	<!-- right column-->
	<aside id="secondary_product" class="widget-area" role="complementary">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/NPGroup/slick/slick.css'; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/NPGroup/slick/slick-theme.css'; ?>">
		<style type="text/css">
		* {
		  box-sizing: border-box;
		}
		
		.slider {
			width: 80%;
			margin: 10px auto;
		}
		
		.slick-slide {
		  margin: 0px 2px !important;
		  width: 55px !important;
		  height: 50px !important;
		}
		
		.slick-slide img {
		  width: 50px !important;
		  height: 50px !important;
		  border-radius: 7px !important;
		}
		.slick-slide img:hover {
		  border-radius: 7px !important;
		  border: 1px #87CEFA solid !important;
		}
		
		.slick-prev:before,
		.slick-next:before {
			color: black;
		}
		.slick-dots{
			display: none !important;
		}
		.slick-track, .slick-list{
			height: 60px !important;
		}
		body{
			overflow-x: visible !important;
		}
		</style>
  
  
		<section id="advps-slideshow-customer" class="widget widget_categories">
		<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> <?php echo __("Customers", "matata"); ?></h2> 
		<section class="regularc slider">
		<?php
			$wp_query_args = array();
			$query_args = array(
				'post_type' => 'khach_hang',
				'post_status' => 'publish',
				'posts_per_page' => '-1',
				'ignore_sticky_posts' => true,
				'paged' => '-1'
			);
			$query_args = wp_parse_args( $wp_query_args, $query_args );
			$my_query = new WP_Query( $query_args );		
		
			if( $my_query->have_posts() ) { 
				while ($my_query->have_posts()) : $my_query->the_post();?>
		
			<div>
				<a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" style="display:inline-block;" id="my-tooltipc<?php echo the_ID(); ?>">
					<?php the_post_thumbnail('matata-featured'); ?>
				</a>
			</div>  	
		<?php 
			endwhile; 
		}
		wp_reset_query();
		?>
		</section>
		</section>
  
		<section id="advps-slideshow-partner" class="widget widget_categories">
		<h2 class="widget-title"><i class="fa fa-slideshare" aria-hidden="true"></i> <?php echo __("Partners", "matata"); ?></h2> 
		<section class="regularp slider">
		<?php
			$wp_query_args = array();
			$query_args = array(
				'post_type' => 'doi_tac',
				'post_status' => 'publish',
				'posts_per_page' => '-1',
				'ignore_sticky_posts' => true,
				'paged' => '-1'
			);
			$query_args = wp_parse_args( $wp_query_args, $query_args );
			$my_query = new WP_Query( $query_args );		
		
			if( $my_query->have_posts() ) { 
				while ($my_query->have_posts()) : $my_query->the_post();?>
		
			<div>
				<a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" style="display:inline-block;" id="my-tooltipp<?php echo the_ID(); ?>">
					<?php the_post_thumbnail('matata-featured'); ?>
				</a>
			</div>  	
		<?php 
			endwhile; 
		}
		wp_reset_query();
		?>
		</section>
		</section>
  
  
		<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri().'/NPGroup/slick/slick.js'; ?>" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".regularc").slick({
			dots: true,
			infinite: false,
			slidesToShow: 3,
			slidesToScroll: 3
		  });
		  $(".regularp").slick({
			dots: true,
			infinite: false,
			slidesToShow: 3,
			slidesToScroll: 3
		  });
		});
		</script>
  
        <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/NPGroup/hovercard/tooltipster.css'; ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/NPGroup/hovercard/hc.css'; ?>" type="text/css" />
  
  
        <!-- loading js at bottom for faster page load -->
        <script src="<?php echo get_template_directory_uri().'/NPGroup/hovercard/jquery.tooltipster.js'; ?>" type="text/javascript"></script>
         <script type="text/javascript">
			$(function() {
					<?php
						$wp_query_args = array();
						$query_args = array(
							'post_type' => 'khach_hang',
							'post_status' => 'publish',
							'posts_per_page' => '-1',
							'ignore_sticky_posts' => true,
							'paged' => '-1'
						);
						$query_args = wp_parse_args( $wp_query_args, $query_args );
						$my_query = new WP_Query( $query_args );		
				
						if( $my_query->have_posts() ) { 
							while ($my_query->have_posts()) : $my_query->the_post();
							
							?>
							
							<?php 
								  $address = "";
								  if (get_option("WPLANG") == "") {
									$address = get_post_meta($post->ID, 'address_en', true);
								  }elseif(get_option("WPLANG") == "vi") {
									$address = get_post_meta($post->ID, 'address_vi', true);
								  }	
								  $website = get_post_meta($post->ID, 'link', true);
								  $facebook = get_post_meta($post->ID, 'facebook', true);
							?> 
						$('#my-tooltipc<?php echo the_ID(); ?>').tooltipster({
							interactive: true,
							content: 'Loading...',
							contentCloning: false,
							contentAsHTML: true,
							animation: 'fade',
							functionBefore: function(origin, continueTooltip) {
								continueTooltip();
								origin.tooltipster('content', '<div class="hovercard"> <div> <div class="display-pic"> <div class="cover-photo"> <div class="display-pic-gradient"></div><img src="http://localhost/leolink/wp-content/themes/matata/NPGroup/hovercard/dp.jpg"> </div><div class="profile-pic"> <div class="pic"> <?php the_post_thumbnail('matata-featured'); ?> </div><div class="details"> <ul class="details-list"> <li class="details-list-item"> <p> <span class="glyph glyph-home"></span> <span> <?php echo $address; ?> </span> </p></li></ul> </div></div></div><div class="display-pic-gradient"></div><div class="title-container"> <a class="title" href="#" title="Visit Page"> <?php the_title(); ?> </a> <p class="other-info"></p></div><div class="info"> <div class="info-inner"> <div class="interactions"> <a href="<?php echo $website; ?>" class="btn" target="_blank" >Website</a> <a href="<?php echo $facebook; ?>" class="btn" target="_blank" >Facebook</a> </div></div></div></div></div>');
							}
						});  	
					<?php 
						endwhile; 
					}
					wp_reset_query();
					?>
					
					
					
					<?php
						$wp_query_args = array();
						$query_args = array(
							'post_type' => 'doi_tac',
							'post_status' => 'publish',
							'posts_per_page' => '-1',
							'ignore_sticky_posts' => true,
							'paged' => '-1'
						);
						$query_args = wp_parse_args( $wp_query_args, $query_args );
						$my_query = new WP_Query( $query_args );		
				
						if( $my_query->have_posts() ) { 
							while ($my_query->have_posts()) : $my_query->the_post();
							
							?>
							
							<?php 
								  $address = "";
								  if (get_option("WPLANG") == "") {
									$address = get_post_meta($post->ID, 'address_en', true);
								  }elseif(get_option("WPLANG") == "vi") {
									$address = get_post_meta($post->ID, 'address_vi', true);
								  }	
								  $website = get_post_meta($post->ID, 'link', true);
								  $facebook = get_post_meta($post->ID, 'facebook', true);
							?> 
						$('#my-tooltipp<?php echo the_ID(); ?>').tooltipster({
							interactive: true,
							content: 'Loading...',
							contentCloning: false,
							contentAsHTML: true,
							animation: 'fade',
							functionBefore: function(origin, continueTooltip) {
								continueTooltip();
								origin.tooltipster('content', '<div class="hovercard"> <div> <div class="display-pic"> <div class="cover-photo"> <div class="display-pic-gradient"></div><img src="http://localhost/leolink/wp-content/themes/matata/NPGroup/hovercard/dp.jpg"> </div><div class="profile-pic"> <div class="pic"> <?php the_post_thumbnail('matata-featured'); ?> </div><div class="details"> <ul class="details-list"> <li class="details-list-item"> <p> <span class="glyph glyph-home"></span> <span> <?php echo $address; ?> </span> </p></li></ul> </div></div></div><div class="display-pic-gradient"></div><div class="title-container"> <a class="title" href="#" title="Visit Page"> <?php the_title(); ?> </a> <p class="other-info"></p></div><div class="info"> <div class="info-inner"> <div class="interactions"> <a href="<?php echo $website; ?>" class="btn" target="_blank" >Website</a> <a href="<?php echo $facebook; ?>" class="btn" target="_blank" >Facebook</a> </div></div></div></div></div>');
							}
						});  	
					<?php 
						endwhile; 
					}
					wp_reset_query();
					?>
			});
		</script>
  </aside>
	<!-- End right column-->
<?php
get_footer();