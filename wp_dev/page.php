
<?php get_header();?>
<!-- End header_section -->
<?php get_template_part("introtext");?>

<!-- Start content_container -->
	<div id="content_container">
		<div id="content_fullwidth">

<div id="content">
	<div>
		<div id="main_content">
			<?php while( have_posts() ):the_post();
				 the_content();
				
			 endwhile;
				?>
		</div>
	</div>
</div>

<?php dynamic_sidebar('page_right_sidebar');?>
		
</div>
	</div><!-- End content_container -->

<?php get_footer();?>