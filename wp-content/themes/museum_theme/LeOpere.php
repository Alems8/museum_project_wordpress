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

<!--	<div class="works"><img src="https://via.placeholder.com/350"><p>Description <a href="Venere.html">Leggi di più</a> </p></div>-->
<!--	<div class="works"><img src="https://via.placeholder.com/350"><p>Description <a href="opera2.html">Leggi di più</a> </p></div>-->
<!--	<div class="works"><img src="https://via.placeholder.com/350"><p>Description <a href="opera21.html">Leggi di più</a> </p></div>-->
<!--	<div class="works"><img src="https://via.placeholder.com/350"><p>Description <a href="opera22.html">Leggi di più</a> </p></div>-->
<!--	<div class="works"><img src="https://via.placeholder.com/350"><p>Description <a href="opera23.html">Leggi di più</a> </p></div>-->
<!--	<div class="works"><img src="https://via.placeholder.com/350"><p>Description <a href="opera24.html">Leggi di più</a> </p></div>-->
<!--	<div class="works"><img src="https://via.placeholder.com/350"><p>Description <a href="opera25.html">Leggi di più</a> </p></div>-->
<!--	<div class="works"><img src="https://via.placeholder.com/350"><p>Description <a href="opera26.html">Leggi di più</a> </p></div>-->
<!--	<div class="works"><img src="https://via.placeholder.com/350"><p>Description <a href="opera27.html">Leggi di più</a> </p></div>-->
</div>

<?php get_footer(); ?>