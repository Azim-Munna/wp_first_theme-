
<?php get_header();?>
<!-- End header_section -->


<!-- Start content_container -->
	<div id="content_container">
		<div id="content_fullwidth">

<div id="content">
	<div>
		<div id="main_content">
			<h1>page not found</h1>
			<a href="<?php echo esc_url(home_url('/'));?>">click here to go home</a>
			<?php ?>
		</div>
	</div>
</div>

<?php dynamic_sidebar('page_right_sidebar');?>
		
</div>
	</div><!-- End content_container -->

<?php get_footer();?>