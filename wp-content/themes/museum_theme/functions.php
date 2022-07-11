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
//?>
