<?php
/*Template Name: Le opere*/
get_header();
?>

<div class="content-main">
	<?php
	$home_query = new WP_query(
		array(
			'post_status' => 'publish',
			'cat' => 2,
			'post_type' => 'post'

		)
	);
	if ($home_query->have_posts()){
		while($home_query->have_posts()){
			$home_query->the_post();
			?>

            <div class="works">
	            <?php wp_get_attachment_image(get_post_thumbnail_id($home_query->post->ID), 'post_size') ?>
                <p><?php the_content();?></p>
            </div>
			<?php
		}
	}
	?>

</div>

<?php get_footer(); ?>