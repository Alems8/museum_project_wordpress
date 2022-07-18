<!--
Template Name: Sketch
-->

<?php get_header();?>

	<div class="sketch">
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
                $new_home_query = new WP_query(
	                array(
		                'post_status' => 'publish',
		                'cat' => '2, 5',
		                'post_type' => 'post'

	                )
                );
                if ($home_query->have_posts() && $new_home_query->have_posts()){
            	    while($home_query->have_posts()) {
		                $home_query->the_post();
		                if ( $home_query->post->ID == $page_id ) {
			                $page_title = get_the_title($home_query->post->post_parent);
			                while($new_home_query->have_posts()){
				                $new_home_query->the_post();
				                if ( strcmp(get_post(get_post_thumbnail_id($new_home_query->post->ID))->post_title , $page_title) == 0){
					                echo wp_get_attachment_image( get_post_thumbnail_id( $new_home_query->post->ID ), 'sketch_size' );
				                }
			                }
			                break;
		                }
	                }
                }



            ?>

            <div id="controls">
                <div>
				<label for="buttonColor">Scegli il colore</label>
				<input id="buttonColor" class="bottone" type="color">
                </div>
                <div>
				<label for="buttonSize">Scegli la dimensione</label>
				<input id="buttonSize" class="bottone" type="number" value="5">
                </div>
                <div>
				<label for="buttonDetails">Scegli la trasparenza</label>
				<input id="buttonDetails" class="bottone" type="range" min="0" max="100" value="100">
                </div>
                <div>
                <label>Scegli il tratto</label>
                <div id="buttonPen">
                    <label for="circle">Pennello</label>
					<input id="circle" type="radio" value="round" checked name="lineCap">
                    <label for="square">Quadrato</label>
					<input id="square" type="radio" value="square" name="lineCap">
                    <label for="highlighter">Evidenziatore</label>
					<input id="highlighter" type="radio" value="butt" name="lineCap">
				</div></div>
				<div id="buttonWhite" class="bottone">Gomma</div>
				<div id="bottoneCancella" class="bottone">Cancella tutto</div>
			</div>
		</div>
	</div>

	<div class="social">
		<p>Condividi sui social il tuo disegno!</p>
	</div>


<?php get_footer();?>
