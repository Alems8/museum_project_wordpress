
<!--
Template Name: La Nascita di Venere
-->



<?php get_header(); ?>

<div class="single-work">
	<?php
	$home_query = new WP_query(
		array(
			'post_status' => 'publish',
			'meta_key' => 'La Nascita di Venere',
			'post_type' => 'page'

		)
	);
	if ($home_query->have_posts()){
		while($home_query->have_posts()){
			$home_query->the_post();
			?>

            <div class="works">
                <h2><?php the_title();?></h2>
				<?php wp_get_attachment_image(get_post_thumbnail_id($home_query->post->ID), 'work_size') ?>
                <p><?php the_content();?></p>
            </div>
			<?php
		}
	}
	?>




<!--	<h2>La nascita di Venere - Botticelli</h2>-->
<!--	<div ><img src="--><?php //bloginfo('template_url')?><!--/La-nascita-di-Venere-Botticelli.jpg" id="venere"> </div>-->
<!--	<p>Titolo: La nascita di Venere</p>-->
<!--	<p>Autore: Sandro Botticelli</p>-->
<!--	<p>Data: 1482-1485</p>-->
<!--	<p>Descrizione: Il tema deriva dalla letteratura latina ed esattamente dalle Metamorfosi di Ovidio. Venere è ritratta-->
<!--		nuda su una conchiglia che solca la superficie del mare; a sinistra volano i venti con una cascata di rose, a-->
<!--		destra un’ancella (Ora) aspetta la dea per vestirla. Nel prato si scorgono delle violette, simbolo di modestia-->
<!--		e spesso usate per fare pozioni d’amore.-->
<!--		Nell’opera si leggono anche dei riferimenti alla famosa opera poetica delle Stanze di Agnolo Poliziano,-->
<!--		contemporaneo di Botticelli e massimo poeta neoplatonico della corte medicea. Il Neoplatonismo fu quella corrente-->
<!--		filosofica che cercò una mediazione tra il l’eredità culturale greco-romana e la cristianità.-->
<!--		Vi si coglie quindi un significato filosofico legato al neoplatonismo: l’opera rappresenterebbe la nascita dell’Amore-->
<!--		e della bellezza spirituale come forza motrice della vita.-->
<!--		L’iconografia della Venere è sicuramente derivata dal tema classico della Venus Pudica che timidamente si copre-->
<!--		le parti intime e che trova un suo corrispettivo in scultura nella statua di Venere dei Medici alla Galleria degli Uffizi.</p>-->
</div>

<div><button><a href="venere-sketch.html"> Disegna uno sketch</a></button></div>

<?php get_footer(); ?>
