
<?php 

	add_action('after_setup_theme','theme_set_up');
  function theme_set_up(){
  	// title 
	add_theme_support('title-tag'); 
	// fe0ed	 link
	add_theme_support('automatic_feed_links');
	// background
	add_theme_support('custom-background');
	// header
	add_theme_support('custom-header');
	// post-thumblains
	add_theme_support('post-thumbnails');
	// formats
	add_Theme_support('post-formats', array('aside', 'gallery', 'quote', 'link','status','chat','audio','video'));
	// html5
	add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption'));
	// nav
		register_nav_menu('header_menu','Header Menu');
		register_nav_menu('footer_men','Footer Menu');


	 }
	// sidebar function
	 add_action ('widgets_init','side_bar_reg');
	 function side_bar_reg(){
	 	register_sidebar(
	 		// for all 
	 		array(

	 			'name' => 'right_sidebar',
	 			'description' => 'add something',
	 			'id' => 'right_sidebar_id',
	 			'before_widget' => '<div class="right-sidebar-block">',
	 			'after_widget' => '</div>',
	 			'before_title' => '<h3 class="dotted_line">',
	 			'after_title' => '</h3>',
	 		));
	 	register_sidebar(
	 		// page sdebar
	 		array(
	 			'name' => 'page right sidebar',
	 			'description' => 'page right add something',
	 			'id' => 'page_right_sidebar',
	 			'before_widget' => '<div class="right-sidebar-block">',
	 			'after_widget' => '</div>',
	 			'before_title' => '<h3 class="dotted_line">',
	 			'after_title' => '</h3>',

	 		));
	 	register_sidebar(
	 		// calagory sidebar
	 		array(
	 			'name' => 'category sidebar',
	 			'description' => 'add for category',
	 			'id' => 'category_sidebar',
	 			'before_widget' => '<div class="right-sidebar-block">',
	 			'after_widget' => '</div>',
	 			'before_title' => '<h3 class="dotted_line">',
	 			'after_title' => '</h3>',

	 		)
	 	);
		register_sidebar(
			 		// sinlge page sidebar
			 		array(
			 			'name' => 'single page  sidebar',
			 			'description' => 'add for single page',
			 			'id' => 'single_page',
			 			'before_widget' => '<div class="right-sidebar-block">',
			 			'after_widget' => '</div>',
			 			'before_title' => '<h3 class="dotted_line">',
			 			'after_title' => '</h3>',

			 		)
			 	);

	 }
	 add_filter('widget_text','do_shortcode');
	 // end sidebar function
	

	 // css and js link function
	 add_action('wp_enqueue_scripts','js_css_link');
	 function js_css_link(){
	 	// css link
	 	global $we_deb_opt ;
	 	if($we_deb_opt['st_css_select']){
	 		wp_enqueue_style('styles_colors',get_template_directory_uri().'/css/main_'.$we_deb_opt['st_css_select'].'.css');
	 	}else{
	 		wp_enqueue_style('normalize',get_template_directory_uri().'/css/main_red.css');
	 	}
	 	wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.css');
	 	wp_enqueue_style('superfish',get_template_directory_uri().'/css/superfish.css');
	 	wp_enqueue_style('responsive',get_template_directory_uri().'/css/responsive.css');
	 	wp_enqueue_style('main_css',get_template_directory_uri().'/style.css');
	 	wp_enqueue_style('totop',get_template_directory_uri().'/css/totop.css');
	 	wp_enqueue_style('camera',get_template_directory_uri().'/css/camera.css');
	 	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assest/css/bootstrap.min.css');
	 	wp_enqueue_style('reset',get_template_directory_uri().'/assest/css/reset.css');
	 	wp_enqueue_style('isotop_css',get_template_directory_uri().'/assest/css/isotop_temp.css');
	 	wp_enqueue_style('aws_css',get_template_directory_uri().'/assest/css/font-awesome.min.css');

	 	
	 	// fonts
	 	wp_enqueue_style('Cabin-font','http://fonts.googleapis.com/css?family=Cabin');
	 	wp_enqueue_style('Cabin700-font','http://fonts.googleapis.com/css?family=Cabin:700');
	 	wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.0.13/css/all.css');
	 	// js link 
		wp_enqueue_script('jquery');
		wp_enqueue_script('superfish',get_template_directory_uri().'/scripts/superfish.js',array('jquery','customize'),true,true);
		wp_enqueue_script('jquery_ui',get_template_directory_uri().'/scripts/jquery-ui.min.js',array('jquery'),true,true);
		wp_enqueue_script('mobilemenu',get_template_directory_uri().'/scripts/mobilemenu.js',array('jquery'),true,true);
		wp_enqueue_script('customize',get_template_directory_uri().'/scripts/jquery.mobile.customized.min.js',array('jquery'),true,true);
		wp_enqueue_script('camera_min_js',get_template_directory_uri().'/scripts/camera.min.js',array('jquery'),true,true);
		wp_enqueue_script('cycle.all',get_template_directory_uri().'/scripts/portfolio/jquery.cycle.all.js',array('jquery'),true,true);
		wp_enqueue_script('cycle.all',get_template_directory_uri().'/scripts/portfolio/jquery.quicksand.js',array('jquery'),true,true);
		wp_enqueue_script('portfolio-main',get_template_directory_uri().'/scripts/portfolio/main.js',array('jquery'),true,true);
		wp_enqueue_script('scripts',get_template_directory_uri().'/scripts/scripts.js',array('jquery'),true,true);
		wp_enqueue_script('easing',get_template_directory_uri().'/scripts/totop/easing.js',array('jquery'),true,true);
		wp_enqueue_script('ui_totop',get_template_directory_uri().'/scripts/totop/jquery.ui.totop.js',array('jquery'),true,true);
		wp_enqueue_script('bootstrap',get_template_directory_uri().'/assest/js/bootstrap.min.js',array('jquery'),true,true);
		wp_enqueue_script('isotop','https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js',array('jquery'),true,true);
		wp_enqueue_script('isotop_script',get_template_directory_uri().'/assest/js/skript.js',array('jquery'),true,true);
		
		 }
	 // redux funciton
	 if(file_exists(__dir__.'/inc/option/ReduxCore/framework.php')){
			include_once(__dir__.'/inc/option/ReduxCore/framework.php');
	 }
	
	 include_once(__dir__.'/inc/theme_option_config.php');
	 if(file_exists(__dir__.'/inc/cmb2/init.php')){
	 	include_once(__dir__.'/inc/cmb2/init.php');
	 }
	 include_once(__dir__.'/inc/meta-config.php');
	 include_once(__dir__.'/inc/shortcode.php');
?>
