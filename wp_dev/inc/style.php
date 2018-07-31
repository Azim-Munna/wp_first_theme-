
		body{
		<?Php if( $we_deb_opt['bg_switch']){ ?>
		 background-image:url(<?php echo $we_deb_opt['st_body_bg']['background-image']; ?>);
		background-repeat: <?php echo $we_deb_opt['st_body_bg']['background-repeat'];?>;
	    background-attachment: <?php echo $we_deb_opt['st_body_bg']['background-attachment'];?>;
	    background-position: <?php echo $we_deb_opt['st_body_bg']['background-position'];?>;
	    background-size: <?php echo $we_deb_opt['st_body_bg']['background-size'];?>;
	    background-color:<?php echo $we_deb_opt['st_body_bg']['background-color'];?>;
		<?php } ?>
		
}
<?php
if( $we_deb_opt['st_css']){
	echo $we_deb_opt['st_css'];
}
?>
<?php
if(get_post_meta(get_the_id($post->ID),'introtext_bg',true)){
	echo '.introtext{
		background-color: '.get_post_meta(get_the_id($post->ID),'introtext_bg',true).';
		 }
		 ';
		}

?>

