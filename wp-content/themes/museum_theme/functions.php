<?php
add_theme_support('menus');

register_nav_menus(
	array(
		'primary' => 'Primary Navigation'
	)
);


if(function_exists('add_theme_support')){
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(150, 150);
}

if(function_exists('add_image_size')){
	add_image_size('work_size', 750, 750);
	add_image_size('post_size', 350, 350);
	add_image_size('sketch_size', 350, 350);
}

add_filter('page_link', function( $permalink ) // Change to post_type_link for custom post type posts
{
	if (      $cat = get_queried_object()
	) {

		$permalink = esc_url( add_query_arg( array( 'ref' => $cat->ID ), $permalink ) );
	}
	return $permalink;
});

add_filter( 'query_vars', function ( $vars )
{
	$vars[] = 'ref';
	return $vars;
});

?>
