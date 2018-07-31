<?php
	
	add_action('cmb2_admin_init','st_page_metabox');
	function st_page_metabox(){
		$cmb2_meta_box = new_cmb2_box(array(
			'title' => 'header title setting',
			'id' => 'header_title_seting',
			'object_types' => array('page','post'),

		));
		$cmb2_meta_box -> add_field(array(
			'name' => 'title_text',
			'id' => 'title_47',
			'type' => 'text',
		));
		$cmb2_meta_box -> add_field(array(
			'name' => 'title_sub_text',
			'id' => 'title_sub',
			'type' => 'textarea',
		));
		$cmb2_meta_box -> add_field(array(
			'name' => 'title_text_color',
			'id' => 'title_text_color',
			'type' => 'colorpicker',
		));
		$cmb2_meta_box -> add_field(array(
			'name' => 'text_color',
			'id' => 'text_color',
			'type' => 'colorpicker',
		));
		$cmb2_meta_box -> add_field(array(
			'name' => 'introtext_bg',
			'id' => 'introtext_bg',
			'type' => 'colorpicker',
		));

	}


?>