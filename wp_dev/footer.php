<?php global $we_deb_opt ;?>

<!-- Start footer_section -->
	<div id="footer_section">
		<div id="footer">
			<div id="footer_container">
	<?php 
		wp_nav_menu(
			array(
				'theme_location'=>'footer_men',
				'container' => 'nav',
				'menu_class' => 'footer_menu',
			)
		);
	?>
	
	
	
	
	<p class="copyright"><span class="copyright_text"><?php echo $we_deb_opt['footer_text']; ?><?php echo do_shortcode('[sometext][icon] [icon name="twitter" url="www.twitter.com" bg="red" padding="10px"][/sometext]')?></p>
	
	</div>
</div>

</div><!-- End footer_section -->

	</div><!-- End wrapper -->
</div><!-- End body_wrapper -->

<!-- Start style_switcher --><div id="style_switcher">

<input type="hidden" value="">
	<a class="color orange" href="../Orange/blog_right_sidebar.html"></a>
    <a class="color blue" href="../Blue/blog_right_sidebar.html"></a>
    <a class="color red" href="../Red/blog_right_sidebar.html"></a>
    <a class="color green" href="blog_right_sidebar.html"></a>

</div><!-- End style_switcher -->


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

<?php wp_footer(); ?> 
</body>
</html>