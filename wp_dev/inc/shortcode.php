<?php
	add_shortcode('sometext','first_shortcode');
	function first_shortcode($ops,$browser_text){
		$browser_color = shortcode_atts(array(
			'color' => 'red',
		),$ops);

		return '<h2 style="color:'.$browser_color['color'].';">'.do_shortcode($browser_text).'</h2>';
		
		}

		add_shortcode('add_L','drop_l');
		function drop_l($opsss,$from_br_l){
			return "<span class='dropcap'>" .$from_br_l. "</span>";
		}
		add_shortcode('highlight','st_highlight');
		function st_highlight($opsss,$from_br_l){
			return "<span class='highlight3'>".$from_br_l."</span>";
		}
		add_shortcode('icon','st_icon');
		function st_icon($opsss){
			$icon_style =shortcode_atts(array(
				'name' => 'phone',
				'url' => 'www.facebook.com',
				'bg' => 'green',
				'size' => '20px',
				'padding' => '5px',
				'margin' => '0px',
				'color' => '#fff',
				'redius'=>'0'
			),$opsss);
			return '
			<a href="'.$icon_style['url'].'" style="
			 background-color:'.$icon_style['bg'].';
			 font-size:'.$icon_style['size'].';
			 padding:'.$icon_style['padding'].';
			 margin:'.$icon_style['margin'].';
			 border-radius:'.$icon_style['redius'].';
			 color:'.$icon_style['color'].';">
			 <i class="fa fa-'.$icon_style['name'].'"></i>
			 </a>';
		}




	
?>