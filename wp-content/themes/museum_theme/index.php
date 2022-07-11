<?php get_header(); ?>

<div class="content-main">

    <?php
        $home_query = new WP_query(
                array(
                        'post_status' => 'publish',
                        'cat' => 4,
                        'post_type' => 'post'

                )
        );
        if ($home_query->have_posts()){
            while($home_query->have_posts()){
                $home_query->the_post();
        ?>
        <h1><?php the_title();?></h1>
        <p><?php the_content();?></p>
        <?php
         }
        }
    ?>
<!--	<h1>Il Progetto</h1>-->
<!--	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate nunc at odio condimentum efficitur.-->
<!--		Sed faucibus sodales tellus quis consequat. Vestibulum neque dui, mollis eu egestas vel, commodo accumsan mauris.-->
<!--		Curabitur id est lectus. Nulla et congue nulla. Nullam accumsan, elit ut semper consectetur, mauris dui posuere-->
<!--		dolor, eu mattis neque elit sed metus. Nam elementum laoreet nisl, in dapibus ipsum ornare consectetur.-->
<!--		Morbi vestibulum consequat porttitor. Fusce posuere ex nec vehicula consectetur. Cras nec augue in leo egestas-->
<!--		tincidunt at ut metus. Vivamus purus elit, maximus ut neque nec, porttitor auctor quam. Vivamus risus tortor,-->
<!--		eleifend sed facilisis quis, fringilla et lorem. Etiam auctor tincidunt eros eget sodales. Integer leo turpis,-->
<!--		egestas pellentesque eros at, luctus bibendum tellus.-->
<!--		Donec justo nisl, facilisis eget est in, euismod tempus massa. Mauris rutrum, felis eget tristique tempor, purus-->
<!--		metus tempus erat, nec efficitur orci elit sit amet lorem. Nulla suscipit, purus at aliquet ullamcorper, velit-->
<!--		nulla pulvinar augue, sit amet gravida metus felis eu ante. Quisque vestibulum non elit at tristique. Nullam a-->
<!--		fermentum tellus. Duis aliquet turpis nec tempus euismod. Phasellus id erat elementum, vehicula magna id, fermentum-->
<!--		nibh. In id magna ipsum. Mauris mi lorem, ornare sit amet varius vitae, euismod ac massa. Fusce urna sapien, ornare-->
<!--		ac tincidunt nec, pellentesque id diam. Ut non suscipit sapien, quis sodales magna. Mauris in quam ex. Aliquam-->
<!--		erat volutpat. Quisque non sollicitudin nisl, ut sagittis enim. Fusce vel enim felis.-->
<!--		Quisque in velit eget neque posuere lobortis. Nam ut nisi et diam mattis pellentesque. Morbi in nulla ac massa-->
<!--		maximus vehicula. Integer fermentum, justo nec luctus eleifend, metus lacus pellentesque neque, maximus imperdiet-->
<!--		lacus urna sit amet tellus. Suspendisse finibus mollis tincidunt. Nulla ut ipsum nec ex sollicitudin euismod at-->
<!--		ut justo. Phasellus aliquam consectetur arcu ac mollis. Ut luctus id nunc sit amet luctus. Ut euismod ut odio eu-->
<!--		vestibulum. Mauris feugiat arcu eu ante ornare posuere.-->
<!--		Cras ex orci, porta sit amet convallis et, mattis nec velit. Nulla commodo eget justo nec varius. In volutpat,-->
<!--		diam at imperdiet facilisis, libero tortor fermentum justo, eu pellentesque eros risus nec lorem. Cras non blandit-->
<!--		ante, nec ullamcorper turpis. Ut suscipit risus vel augue vulputate, eget tempus dolor euismod. Donec dapibus-->
<!--		ipsum lectus, sit amet euismod arcu tristique vel. Morbi auctor, dolor a vestibulum facilisis, magna felis tempus-->
<!--		magna, nec aliquam velit nibh a augue. Praesent eget sodales nunc, non varius sem. Proin hendrerit rhoncus accumsan.-->
<!--		Nunc pulvinar enim ac libero tempor, sit amet efficitur dui ullamcorper.</p>-->
</div>

<footer>
	<div class="auth"><p>Autore</p></div>
	<div><img src="https://via.placeholder.com/150" id="profile-picture"></div>
	<div id="footer"><p>Più informazioni sul sito ufficiale degli <a href="https://www.visituffizi.org/it/">Uffizi</a></p></div>
</footer>


</body>
</html>