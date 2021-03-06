<?php
/*Template Name: Le opere*/
get_header();
?>

<div class="content-main">
	<?php
	$home_query = new WP_query(
		array(
			'post_status' => 'publish',
			'cat' => '2, 5',
			'post_type' => 'post'

		)
	);


	if ($home_query->have_posts()){
		while($home_query->have_posts()){
			$home_query->the_post();
			?>

            <div class="works">
	            <?php
	                $post_thumbnail_id = get_post_thumbnail_id( $home_query->post->ID );
                    $size = get_thumbnail_correct_size($post_thumbnail_id);
                    echo wp_get_attachment_image(get_post_thumbnail_id($home_query->post->ID), 'full'); ?>
                <p><?php echo wp_trim_words(get_post(get_post_thumbnail_id($home_query->post->ID))->post_content, 20); the_content();?> </p>
            </div>
			<?php
		}
	}
	?>

</div>


<?php get_footer(); ?>