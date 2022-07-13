
<!--
Template Name: Works
-->



<?php get_header(); ?>

<div class="single-work">
	<?php
	$page_id = get_queried_object_id();
	$home_query = new WP_query(
		array(
			'post_type' => 'page',
			'meta_key' => '_wp_page_template',
            'meta_value' => 'Works.php'


		)
	);
	if ($home_query->have_posts()){
		while($home_query->have_posts()) : $home_query->the_post();
		?>
		  <?php  if ($home_query->post->ID == $page_id){?>

                <h2><?php the_title();?></h2>
                <?php wp_get_attachment_image(get_post_thumbnail_id($home_query->post->ID), 'work_size') ?>
                <div id="work-description"><p ><?php the_content();?></p>

			<?php
                break; } ?>
			<?php
		endwhile;
	}
    else{
        echo 'No pages with this template';
    }
	?>



<?php
$query = new WP_Query(
        array(
                'post_type' => 'page',
                'post_parent' => $page_id
        )

);
if($query->have_posts()){
    while($query->have_posts()) {
        $query->the_post();
	    $url = get_page_link($query->post->ID);
        ?>
	    <div id="sketch-button"><button><a href="<?php echo $url?>"><b> Disegna uno sketch</b></a></button></div></div>
    <?php
    }
}
?>
</div>


<?php get_footer(); ?>
