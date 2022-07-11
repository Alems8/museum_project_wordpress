<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php bloginfo('name');?></title>
	<meta name="description" content="<?php bloginfo('description');?>">
	<link href="<?php bloginfo('template_url')?>/CSS/style.css" rel="stylesheet" type="text/css">
	<script src="<?php bloginfo('template_url')?> JS/drawing-desktop.js" type="text/javascript"></script>
</head>
<body>
<header>
	<div class="title">
		<h1>Gli Uffizi</h1>
	</div>
	<nav>
		<?php
		if (has_nav_menu('primary')){
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class' => 'menu-primary'
				)
			);
		}
		?>

		<!--		<ul class="menu-primary">-->
		<!--			<li><a href="Home.html">Home</a> </li>-->
		<!--			<li><a href="works.html">Le opere</a> </li>-->
		<!--			<li><a href="contacts.html">Contatti</a></li>-->
		<!--		</ul>-->
	</nav>
</header>
