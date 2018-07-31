<?php get_header();?>
<div class="clear"></div>
<?php  get_template_part("introtext")?>

<!-- Start content_container -->
	<div id="content_container">
		<div id="content_fullwidth" class="margin30">

<div id="content">
	<div id="main_content">
	
<!-- Start blog -->

<div id="blogview" class="">

		<!-- Blog item -->
		<?php
			while( have_posts() ): the_post();  
		?>
		 
		<div class="items-row cols-1 row-0 row-fluid">
					<div class="span12">
				<div class="item column-1">
					
						<div class="published pull-left">
					<span class="day"><?php the_time('d');?></span>
					<span class="month"><?php the_time('M');?></span>
				</div>
			
			<div class="blogview-item-wrapper">

<div class="item-header">

		<div class="page-header">

				<h4>
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</h4>

<div class="category-name">Category: <?php the_category(', ');?></div>
<div class="createdby">Written by: <?php the_author();?></div>

			<br /><br />
	</div>
		<div class="clearfix"></div>
</div>




<div class="blogview-item-body">

<br />

<?php 
	if(!is_singular()){
	the_excerpt();
	echo '<a class="button" href="';
		 the_permalink();
	echo '">Continue Reading</a>';
	}else{
		the_content();
	}
?>



</div>

</div>
					<div class="clearfix"></div>
				</div><!-- end item -->
							</div><!-- end spann -->
						
		</div>
	<?php endwhile; ?>
		<!-- end blog item -->

		
</div><!-- End blog -->

<!-- Start pagination -->


            <div class="pagination" style="margin-left: 30px;">
                <?php the_posts_pagination(array(
					'screen_reader_text' => ' ',
					'next_text'=>'Old post',
					'prev_text'=>'New post',
	
					));?>
            </div><!-- End pagination -->
	
	</div>
</div>
<?php dynamic_sidebar('category_sidebar');?>		
</div>
	</div><!-- End content_container -->

<?php get_footer();?>