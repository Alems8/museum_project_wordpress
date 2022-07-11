<!--
Template Name: Sketch
-->

<?php get_header();?>

	<div class="skecth">
		<div id="sketch-container">
			<canvas id="areaDiDisegno" tabindex="0" ></canvas>
		</div>
		<div id="right-container">
			<?php
            echo get_post_thumbnail_id($post->post_parent);
             wp_get_attachment_image(get_post_thumbnail_id($post->post_parent), 'work_size'); ?>
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