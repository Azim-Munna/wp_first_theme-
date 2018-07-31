<?php
	/*Template Name: Homepage*/
	global $we_deb_opt ;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
<meta name="viewport" content="width=device-width" />

 
 <?php wp_head();?>
</head>

<body <?php body_class();?>>
<!-- Start body_wrapper --><div id="body_wrapper">
	<!-- Start wrapper --><div id="wrapper">
<?php
	echo "<pre>";
	print_r($we_deb_opt['home_slide']);
	echo "</pre>";
?>
<div id="top_section">
	<div class="container">
		<div id="logo_container">
		<!-- Start logo --><a href="<?php echo esc_url(home_url('/'));?>" id="logo"></a><!-- End Logo -->
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

<!-- Start header_section --><div id="header_section">
	<!-- Start header_container --><div id="header_container">

<!-- Start slider --><div id="slider_container">

<!-- Start camera-slider -->
<div id="camera-slideshow">
	<?php
	
	$slide_items = $we_deb_opt['home_slide'] ;
	if($we_deb_opt['home_slide']){ 
	foreach ($slide_items as $item) :
		# code...
	?>

	<div data-src="<?php if($item['image']){echo $item['image'];}else{ echo get_template_directory_uri().'/images/slider/slider2.jpg' ; } ?>" data-link=" <?php echo $item['url'] ?>" data-thumb="<?php echo $item['thumb'] ?>">
		    <div class="camera_caption fadeFromBottom">
			  <div class="clr"></div>
			</div>
	</div>
	<?php endforeach; } else{ ?>
	
	<div data-src="<?php echo get_template_directory_uri(); ?>/images/slider/slider2.jpg" data-link="#" data-thumb="<?php echo get_template_directory_uri(); ?>/images/slider/slider_thumb2.jpg">
		<div class="camera_caption fadeFromBottom">
		<div class="clr"></div>
	</div>
	</div>
						
	<div data-src="<?php echo get_template_directory_uri(); ?>/images/slider/slider3.jpg" data-link="#" data-thumb="<?php echo get_template_directory_uri(); ?>/images/slider/slider_thumb3.jpg">
		<div class="camera_caption fadeFromBottom">
		<div class="clr"></div>
	</div>
	</div>
	
	<div data-src="<?php echo get_template_directory_uri(); ?>/images/slider/slider4.jpg" data-link="#" data-thumb="<?php echo get_template_directory_uri(); ?>/images/slider/slider_thumb4.jpg">
		<div class="camera_caption fadeFromBottom">
		<div class="clr"></div>
	</div>
	</div>
	</div> 
	<?php } ?>
	<!-- End camera-slider -->

</div><!-- End slider -->

</div><!-- End header_container -->
	</div><!-- End header_section -->

<div class="container">

<!-- Start introtext --><div class="intro">

<ul>
	<li>
		<div class="introtext">
    	
<h4>We are Stride, a creative design agency located in Sweden</h4>
<p>Lorem ipsum dolor sit amet consecteur.</p>

</div>

<div class="clr"></div>
    
</li>
		</ul>
	</div><!-- End introtext -->
</div>

<!-- Start content_container -->
	<div id="content_container">
		<div id="content_fullwidth">

<!-- Start title -->
	<div class="page-title">
		<h2>Recent Projects</h2>
		<br />
			<div class="clear"></div>
		<div class="bolded-line"></div>
	</div>
<!-- End title -->

<div class="clear"></div>

<div id="main_content">

<!-- Start portfolio -->

<nav class="protfolioBox1 clearfix">
	<ul class="ourHolder column3">
		<li class="small_PicBoxAll trigger" data-id="id-1" data-type="web">
                                <div class="small_PicBox get_mar2">
                                    <a href="portfolio_single.html"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/port_thumb1.jpg" alt="" /></a>
                                   </div>
                                   <div class="boxHover"><a href="portfolio_single.html"><span>Lorem ipsum</span></a>
                                    <span class="subtext">ILLUSTRATION / GRAPHIC</span>
                                </div>
                            </li>
                            <li class="small_PicBoxAll trigger" data-id="id-2" data-type="print">
                                <div class="small_PicBox get_mar2">
                                    <a href="portfolio_single.html"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/port_thumb2.jpg" alt="" /></a>
                                   </div>
                                   <div class="boxHover"><a href="portfolio_single.html"><span>Lorem ipsum</span></a>
                                    <span class="subtext">IICON / LOGO</span>
                                </div>
                            </li>
                            <li class="small_PicBoxAll trigger" data-id="id-3" data-type="photo">
                                <div class="small_PicBox get_mar2">
                                    <a href="portfolio_single.html"><img src="<?php echo get_template_directory_uri(); ?>/images/portfolio/port_thumb3.jpg" alt="" /></a>
                                   </div>
                                   <div class="boxHover"><a href="portfolio_single.html"><span>Lorem ipsum</span></a>
                                    <span class="subtext">VIMEO / VIDEO</span>
                                </div>
                            </li>
                         </ul>
                        <div class="clrflt"></div>
                    </nav><!-- Portfolio Columns End -->

<div class="clear"></div>

<div id="line"></div>
	   
<div class="two_third">

<!-- Start title -->
	<div class="page-title">
		<h2>Why Stride?</h2>
		<br />
			<div class="clear"></div>
		<div class="bolded-line"></div>
	</div>
<!-- End title -->

<div class="services margin10">
	<img src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" alt="HTML5/CSS3" />
		<br />
		<div class="align-right">
		<p>Stride is a clean and responsive template built with the latest techniques using <strong>HTML5</strong> and <strong>CSS3</strong>.</p>
		<a class="button" href="#">Learn More</a>
	</div>
</div>

</div>

<div class="one_third last">

<!-- Start title -->
	<div class="page-title">
		<h2>Recent from the Blog</h2>
		<br />
			<div class="clear"></div>
		<div class="bolded-line"></div>
	</div>
<!-- End title -->

<div id="blogview">		
		
<!-- Blog item -->

<div class="item">
	<div class="published pull-left date-position">
		<span class="day">10</span>
		<span class="month">Mar</span>
</div>
		
<div class="blogview-item-wrapper blog-item-first">

<div class="item-header">

<div class="page-header">
	<h4 class="recent_blog_text">
		<a href="#">Lorem ipsum</a>
</h4>

<div class="createdby">Written by Admin</div>
			<br /><br />
	</div>
		<div class="clearfix"></div>
</div>

<div class="blogview-item-image">
			
			<div class="img-intro-left item-image">
			
		</div>
	</div>
</div>

<div class="clearfix"></div>
	</div><!-- end item -->
		
<div class="clear"></div>

<div id="line"></div>

<div class="item">
	<div class="published pull-left date-position">
		<span class="day">10</span>
		<span class="month">Mar</span>
</div>
		
<div class="blogview-item-wrapper">

<div class="item-header">

<div class="page-header">
	<h4 class="recent_blog_text">
		<a href="#">Lorem ipsum</a>
</h4>

<div class="createdby">Written by Admin</div>
			<br /><br />
	</div>
		<div class="clearfix"></div>
</div>

<div class="blogview-item-image">
			
			<div class="img-intro-left item-image">
			
		</div>
	</div>
</div>

<div class="clearfix"></div>
	</div><!-- end item -->
	</div>

</div>

	</div><!-- End main_content -->
		
</div>
	</div><!-- End content_container -->

<!-- Start footer_section -->
	<div id="footer_section">
		<div id="footer">
			<div id="footer_container">

	<ul class="footer_menu">
		<li class="current active"><a href="index.html"><span>Home</span></a></li>
		<li><a href="#"><span>Features</span></a></li>
		<li><a href="#"><span>Portfolio</span></a></li>
		<li><a href="#"><span>Blog</span></a></li>
		<li><a href="#"><span>Contact</span></a></li>
	</ul>
	
	<p class="copyright"><span class="copyright_text">Copyright &copy; </span>Stride 2013</p>
	
			</div>
		</div>

</div><!-- End footer_section -->

	</div><!-- End wrapper -->
</div><!-- End body_wrapper -->

<!-- Start style_switcher --><div id="style_switcher">

<input type="hidden" value="">
	<a class="color orange" href="../Orange/index.html"></a>
    <a class="color blue" href="../Blue/index.html"></a>
    <a class="color red" href="../Red/index.html"></a>
    <a class="color green" href="index.html"></a>

</div><!-- End style_switcher -->

<?php
	wp_footer();
?>
<!-- Starting the plugin -->
<script type="text/javascript">
	$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>

</body>
</html>