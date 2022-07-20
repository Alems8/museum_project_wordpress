
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
	$new_home_query = new WP_query(
		array(
			'post_status' => 'publish',
			'cat' => '2, 5',
			'post_type' => 'post'

		)
	);
	if ($new_home_query->have_posts() && $home_query->have_posts()){
		while($home_query->have_posts()){

            $home_query->the_post();
//            echo $home_query->post->ID;
//            echo '/';
//            echo $page_id;
//	        echo '/';
            if ($home_query->post->ID == $page_id){
//                echo the_title();
	            $page_title = get_the_title($page_id);

	            while($new_home_query->have_posts()){
		            $new_home_query->the_post();

//                    echo $page_title;
//                    echo '/';
//                    echo get_post(get_post_thumbnail_id($new_home_query->post->ID))->post_title;
//                    echo '//';
		    ?>
		            <?php
                    if ( strcmp(get_post(get_post_thumbnail_id($new_home_query->post->ID))->post_title , $page_title) == 0){?>

                        <h2><?php echo get_post(get_post_thumbnail_id($new_home_query->post->ID))->post_title;?></h2>
                        <?php echo wp_get_attachment_image(get_post_thumbnail_id($new_home_query->post->ID), 'full'); ?>
                        <div id="work-description">
                            <p><b>Descrizione:</b> <?php echo get_post(get_post_thumbnail_id($new_home_query->post->ID))->post_content;?></p>

			    <?php

                    } ?>

        <?php
                }
                break;
            }

        }
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
	                            <div id="sketch-button"><button><a href="<?php echo $url?>"><b> Disegna uno sketch</b></a></button></div>
                </div>
                        <?php
                            }
                        }
                        else{
                            echo 'nope';
                        }
                        ?>
</div>


<?php get_footer(); ?>
