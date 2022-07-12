<!--
Template Name: Sketch
-->
<!--//			$attachments = get_attached_media("image", $post->post_parent );-->
<!--//            foreach($attachments as $attachment){-->
<!--//                echo $attachment->ID;-->
<!--//-->
<!--//            }-->
<?php get_header();?>

	<div class="skecth">
		<div id="sketch-container">
			<canvas id="areaDiDisegno" tabindex="0" ></canvas>
		</div>
		<div id="right-container">
            <?php
                $page_id = get_queried_object_id();
                $home_query = new WP_query(
            	    array(
            		    'post_type' => 'page',
            		    'meta_key' => '_wp_page_template',
            		    'meta_value' => 'Sketch.php'
            	    )
                );
                if ($home_query->have_posts()){
            	    while($home_query->have_posts()) : $home_query->the_post();
            		    if ($home_query->post->ID == $page_id){
            			    echo 'ziopera';
            			    echo '/';
            			    echo $home_query->post->ID;
            			    echo '/';
			                $attachments = get_attached_media("image", $page_id);
			                foreach($attachments as $attachment){
				                echo $attachment->ID;
			                }
            			    echo wp_get_attachment_image_src(get_post_thumbnail_id($home_query->post->ID));
            			    break;
            		    }
            	    endwhile;
                }



            ?>

            <div id="controls">
				<label for="buttonColor">Scegli il colore</label>
				<input id="buttonColor" class="bottone" type="color">
				<label for="buttonSize">Scegli la dimensione</label>
				<input id="buttonSize" class="bottone" type="number" value="5">
				<label for="buttonDetails">Scegli la trasparenza</label>
				<input id="buttonDetails" class="bottone" type="range" min="0" max="100" value="100">
				<label>Scegli il tratto</label>
				<div id="buttonPen">
					<input id="circle" type="radio" value="round" checked name="lineCap">
					<label for="circle">Pennello</label>
					<input id="square" type="radio" value="square" name="lineCap">
					<label for="square">Quadrato</label>
					<input id="highlighter" type="radio" value="butt" name="lineCap">
					<label for="highlighter">Evidenziatore</label>
				</div>
				<div id="buttonWhite" class="bottone">Gomma</div>
				<div id="bottoneCancella" class="bottone">Cancella tutto</div>
				<br class="clearer" />
			</div>
		</div>
	</div>

	<div class="social">
		<p>Condividi sui social il tuo disegno!</p>
	</div>

<?php get_footer();?>



<!--//$page_id = get_queried_object_id();-->
<!--//$home_query = new WP_query(-->
<!--//	array(-->
<!--//		'post_type' => 'page',-->
<!--//		'meta_key' => '_wp_page_template',-->
<!--//		'meta_value' => 'Sketch.php'-->
<!--//	)-->
<!--//);-->
<!--//if ($home_query->have_posts()){-->
<!--//	while($home_query->have_posts()) : $home_query->the_post();-->
<!--//		if ($home_query->post->ID == $page_id){-->
<!--//			echo 'ziopera';-->
<!--//			echo '/';-->
<!--//			echo $home_query->post->ID;-->
<!--//			echo '/';-->
<!--//			echo get_post_thumbnail_id($home_query->post->ID);-->
<!--//-->
<!--//			echo wp_get_attachment_image_src(get_post_thumbnail_id($home_query->post->ID));-->
<!--//			break;-->
<!--//		}-->
<!--//	endwhile;-->
<!--//}-->
<!--//-->
<!--//-->