<?php global $we_deb_opt ;?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
<meta name="viewport" content="width=device-width" />

 <?php wp_head();?>
 <style>
	<?php
		include_once(__dir__.'/inc/style.php');
	?>
	
</style>
</head>
<body <?php body_class();?>>
	<?Php
		if($we_deb_opt['st_css_select']){
			echo $we_deb_opt['st_css_select'];
		}

	 ?>
	<!-- for print array value  -->
<!-- <pre style="background:#fff"><?Php
	/*print_r($we_deb_opt['st_body_bg']);
	*/
	?>
</pre> -->
<!-- Start body_wrapper --><div id="body_wrapper">
	<!-- Start wrapper --><div id="wrapper">

<div id="top_section">
	<div class="container">
		<div id="logo_container">
			
		<!-- Start logo --><a href="<?php echo esc_url(home_url('/'));?>" id="logo">
			<?php if($we_deb_opt['st_logo_img_switch']){ ?>
					
					<img src="<?php echo $we_deb_opt['st_logo_img']['url']; ?>" alt="">
				<?php }else{ ?>
				 
					<?php echo $we_deb_opt['st_logo']; ?>
				<?php } ?>
				<br>
				<?php
					if($we_deb_opt['st_logo_img_sec']){
						echo '<img src="'.$we_deb_opt['st_logo_img']['url'].'"alt="">';
					}else{
						echo $we_deb_opt['st_logo_sec'];
					}
				?>



			</a>

			<!-- End Logo -->
		</div>

	<!--[if (gt IE 9)|!(IE)]><!-->
	<script type="text/javascript">
		jQuery(function(){
			jQuery('.sf-menu').mobileMenu({});
		})
	</script>
	<!--<![endif]-->

<!-- Start main menu -->
<?php wp_nav_menu(array(
	'theme_location' => 'header_menu',
	'container' => 'nav',
	'menu_class' => 'sf-menu',
))?>
<!-- End main menu -->

<script type="text/javascript">
	// initialise plugins
	jQuery(function(){
		jQuery('ul.sf-menu').superfish({
			hoverClass:    'sfHover',         
		    pathClass:     'overideThisToUse',
		    pathLevels:    1,    
		    delay:         200, 
		    animation:     {opacity:'show', height:'show'}, 
		    speed:         'normal',   
		    autoArrows:    false, 
		    dropShadows:   true, 
		    disableHI:     false, 
		    easing:        "easeOutQuad",
		    onInit:        function(){},
		    onBeforeShow:  function(){},
		    onShow:        function(){},
		    onHide:        function(){}
		});
	});
</script>

<div class="clear"></div>

</div><!-- End top_container -->
	</div><!-- End top_section -->

<!-- Start header_section --><div id="header_section" style="min-height: 10px !important;">
	
	</div><!-- End header_section -->
