<?php
add_theme_support('menus');

register_nav_menus(
	array(
		'primary' => 'Primary Navigation'
	)
);

//function add_specific_menu_location_atts($atts, $item, $args){
//	if ($args->theme_location == 'primary'){
//		$atts['class'] = 'menu-primary';
//	}
//	return $atts;
//}
//
//add_filter('nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3);
//

//if(function_exists('add_theme_support')){
//	add_theme_support('post-thumbnails');
//	set_post_thumbnail_size(150, 150);
//}

if(function_exists('add_image_size')){
	add_image_size('work_size', 750, 750);
	add_image_size('post_size', 350, 350);
	add_image_size('sketch_size', 350, 350);
}

?>
