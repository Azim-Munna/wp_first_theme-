<div class="container">

<!-- Start introtext --><div class="intro">

<ul>
	<li> 
		<div class="introtext" >
	
<h4 style="color:<?php echo get_post_meta(get_the_ID($post->ID),'title_text_color',true);?>; " >
	<?php
	if(get_post_meta(get_the_ID( $post->ID ),'title_47',true)){
		 echo get_post_meta(get_the_ID( $post->ID ),'title_47',true);
}else{
	the_title();
}
 
?>
</h4>
<p style="color:<?php echo get_post_meta(get_the_id($post-> ID),'text_color',true);?>;">
	<?php
	if(get_post_meta(get_the_ID($post->Id),'title_sub',true)){
		echo get_post_meta(get_the_id($post->id),'title_sub',true);
	}else{
		echo 'Lorem ipsum dolor sit amet consecteur.';
	}
	?>
</p>

</div>

<div class="clr"></div>
    
</li>
		</ul>
	</div><!-- End introtext -->
</div>