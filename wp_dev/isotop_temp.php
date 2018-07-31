<?php
	/* Template Name: isotop_temp */

?>
<!DOCTYPE html>
<html <?php language_attributes();?>> 
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
	
	<div id="top_section">
	<div class="container">
		<div id="logo_container">
		<!-- Start logo --><a href="<?php echo esc_url(home_url('/'));?>" id="logo"></a><!-- End Logo -->
		</div>

<!-- Start main menu -->

<?php wp_nav_menu(array(
	'theme_location' => 'header_menu',
	'container' => 'nav',
	'menu_class' => 'sf-menu',
))?>

<!-- End main menu -->



<div class="clear"></div>

</div><!-- End top_container -->
	</div>
	<section class="sectionp">
		<div class="container">
			<div class="isotop_area">
				<div class="header">
					<div class="h2">isotop filter</div>
				</div>
				<div class="item_menu">
					<nav class="port-menu">
                    <ul>
                        <li data-filter="*"><a>all catagory</a></li>
                        <li data-filter=".grap"><a>graphic design</a></li>
                        <li data-filter=".logo"><a>logo design</a></li>
                        <li data-filter=".brand"><a>branding</a></li>
                        <li data-filter=".photo"><a> photograhy</a></li>
                    </ul>
                </nav>
				</div>
				<div class="product-area " style="width:100%;">
					
				
					<div class="single_item grap">
						<div class="product_img"><img src="<?php echo get_template_directory_uri();?>/assest/img/doll (1).jpg" alt=""></div>
					</div>
					<div class="single_item grap">
						<div class="product_img"><img src="<?php echo get_template_directory_uri();?>/assest/img/doll (2).jpg" alt=""></div>
					</div>
					<div class="single_item logo">
						<div class="product_img"><img src="<?php echo get_template_directory_uri();?>/assest/img/doll (3).jpg" alt=""></div>
					</div>
					<div class="single_item logo">
						<div class="product_img "><img src="<?php echo get_template_directory_uri();?>/assest/img/doll (4).jpg" alt=""></div>
					</div>
					<div class="single_item brand">
						<div class="product_img"><img src="<?php echo get_template_directory_uri();?>/assest/img/doll (5).jpg" alt=""></div>
					</div>
					<div class="single_item brand">
						<div class="product_img "><img src="<?php echo get_template_directory_uri();?>/assest/img/doll (6).jpg" alt=""></div>
					</div>
					<div class="single_item photo">
						<div class="product_img"><img src="<?php echo get_template_directory_uri();?>/assest/img/doll (7).jpg" alt=""></div>
					</div>
					<div class="single_item photo">
						<div class="product_img"><img src="<?php echo get_template_directory_uri();?>/assest/img/doll (8).jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- js section -->
	<?php
	get_footer();
	?>