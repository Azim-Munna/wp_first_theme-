<?php
	get_header(); 
?>

<div class="container">

<!-- Start introtext -->
<?php  get_template_part('introtext');?>
<!-- End introtext -->
</div>  

<!-- Start content_container -->
	<div id="content_container">
		<div id="content_fullwidth" class="margin30">

<div id="content">
	<div id="main_content">
	
<!-- Start blog --><div id="blogview" class="">

			<?php while( have_posts() ) : the_post();?>
		<!-- Blog item --><div class="items-row cols-1 row-0 row-fluid">
					<div class="span12">
				<div class="item column-1">
					
						<div class="published pull-left">
					<span class="day"><?php the_time('d')?></span>
					<span class="month"><?php the_time('M')?></span>
				</div>

			<div class="blogview-item-wrapper">

<div class="item-header">

		<div class="page-header">

				<h4>
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</h4>
				

<div class="category-name">Category:<?php the_category(', ');?></div>
<div class="createdby">Written by: <?php the_author();?></div>
			<br /><br />
	</div>
		<div class="clearfix"></div>
</div>


<div class="blogview-item-image">
			
			<div class="img-intro-left item-image">
				<?php 
					the_post_thumbnail(
						array('200','400'),array('class'=>'image_border')
					)
				?>
			 </div>
	</div>

<div class="blogview-item-body">

<br />

<?php the_content();?>

<article class="comment_quote"> <!--comment_quote Start-->
                                   		Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. 
                                        Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. 
                                        Cras mattis consectetur purus sit amet fermentum.
                                    </article>

</div>

</div>
					<div class="clearfix"></div>
				</div><!-- end item -->
							</div><!-- end spann -->
						
		</div>
	<?php endwhile;?>
		<!-- end blog item -->					
</div><!-- End blog -->

<div class="clear"></div>

<div id="line"></div>

<h3 class="dotted_line">Comments</h3>

<!-- start comment --><div class="comment margin30">
	<div class="avatar"><img src="images/user_female.jpg" class="image_border" alt="" /></div>
		<div class="comm-text-wrap">
			<div class="comm-text">
				<p style="font-family: Verdana;"><a class="strong" href="#">Jane Doe</a>, 2013.03.02</p>
				<div class="bubble">
			<div class="bubble-bg"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<a class="selection" href="#" style="font-family: verdana;">Reply</a>
			</div>
		</div>
	</div>
</div><!-- [END] comment -->

<!-- start comment --><div class="comment margin30">
	<div class="avatar"><img src="images/user_male.jpg" class="image_border" alt="" /></div>
		<div class="comm-text-wrap">
			<div class="comm-text">
				<p style="font-family: Verdana;"><a class="strong" href="#">John Doe</a>, 2013.03.02</p>
				<div class="bubble">
			<div class="bubble-bg"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<a class="selection" href="#" style="font-family: verdana;">Reply</a>
			</div>
		</div>
	</div>
</div><!-- [END] comment -->


<?php comment_form();?>

	
	</div>
</div>

<?Php
	dynamic_sidebar('single_page');
?>
		
</div>
	</div><!-- End content_container -->

<!-- Start footer_section -->
	<?php
		get_footer();
	?>