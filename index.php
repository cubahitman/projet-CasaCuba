<?php
$title = "Accueil";
require_once "inc/header.inc.php";
$annonces = dernieresAnnonces();
?>
<!-- Intro -->
<div class="container text-center">
	<br> <br>
	<h2 class="thin">Votre Pied-à-Terre à Cuba : Maisons et Appartements à Saisir !</h2>
	<p class="text-muted">
		Que vous cherchiez une résidence secondaire ou un investissement locatif, notre collection de maisons et d'appartements à Cuba répondra à vos attentes.
	</p>
</div>
<!-- /Intro-->
<section class="">
	<div class="container-fluid text-center p-5 ">
		<a href="explorer.php" class="display-5  btn btn-primary text-white text-decoration-none">

			Consulter tous les annonces

		</a>
	</div>
</section>
<div class="pen ">
	<ul class='list'>
		<li class='item'><img src='https://source.unsplash.com/A5rCN8626Ck'></li>
		<li class='item'><img src='https://source.unsplash.com/JP23z_-dA74'></li>
		<li class='item'><img src='https://source.unsplash.com/tKF04645K7I'></li>
		<li class='item'><img src='https://source.unsplash.com/whAcmaw6cd4'></li>
		<li class='item'><img src='https://source.unsplash.com/wbIw84HTI8w'></li>
		<li class='item'><img src='https://source.unsplash.com/3iUkzH6yhjE'></li>
		<li class='item'><img src='https://source.unsplash.com/8cQpL8kGqso'></li>
	</ul>
</div>

<body>
	<div class="container ">
		<h2 class="thin">Temoignages</h2>


		<section class="populardestinations">
			<h2>Popular destinations in Cuba</h2>
			<!-- Ajoutez ici les images des destinations -->
			<div class="imgVilles">
				<img src="./assets/img/alex-meier-c4Stt0rvQ8o-unsplash.jpg" alt="">
				<img src="./assets/img/alex-meier-c4Stt0rvQ8o-unsplash.jpg" alt="">
				<!-- <img src="./assets/img/voiturePlaya.jpg" alt="Imagen de ancien voiture  a Cuba face a la plage"> -->
				<img src="./assets/img/damla-gur-Xk1b4E1YI5E-unsplash.jpg" alt="">
				<img src="./assets/img/gayatri-malhotra-0AW2Q1MfOE8-unsplash.jpg" alt="">
				<!-- <img src="./assets/img/capitolio.nuit.jpg" alt="El Capitolio de l'havana la nuit"> -->
			</div>
		</section>
		<main>

			<!-- Section "WHO WE ARE" -->
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<img src="assets/images/academy-brand-med.png" class="mt-5" alt="">
						<h2 class="red mt-5 trait">WHO WE ARE


						</h2>
						<p class="mt-5">We are <span class="red ">MASSIVE Academy.</span> We aim to improve
							education through both methods -effective project-based learning - and material - by
							teaching
							skills that are applicatble to improving your life today.</p>
					</div>
				</div>
			</div>



	</div>
	</main>
	<!-- <main>
			<section class="maisons">
				<h2>Top-rated houses in Cuba</h2>
				Ajoutez ici les images des maisons -->
	</section>
	<!-- </main> -->
	<footer>
		<!-- Ajoutez ici le contenu du pied de page -->
	</footer>
	</div>
</body>
<!-- <section class="index-img container m-5 text-center">
	<div class="row">
		<?php
		foreach ($annonces as $annonce) {
		?>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
				<div class="card ">
					<img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top" alt="image de <?= $annonce['title'] ?>" style="height: 200px; width: 100%; object-fit: cover;">
					<div class="card-body">
						<h5 class="card-title"><?= displayAdvertAnnonce($annonce); ?></h5>
						<p class="card-text"><?= substr($annonce['description'], 0, 100) ?>...</p>
						<a href="<?= RACINE_SITE ?>showAnnonce.php?annonce=<?= $annonce['id_advert'] ?>" class="btn btn-primary">Voir l'annonce</a>
						<h5 class="card-title"><?= $annonce['price'] ?></h5>
						<h6S class="card-title"><?= $annonce['type'] ?></h6>
					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</section> -->



<!-- Highlights - jumbotron -->
<div class="jumbotron top-space">
	<div class="container">

		<h3 class="text-center thin">Reasons to use this template</h3>

		<div class="row">
			<div class="col-md-3 col-sm-6 highlight">
				<div class="h-caption">
					<h4><i class="fa fa-cogs fa-5"></i>Bootstrap-powered</h4>
				</div>
				<div class="h-body text-center">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 highlight">
				<div class="h-caption">
					<h4><i class="fa fa-flash fa-5"></i>Fat-free</h4>
				</div>
				<div class="h-body text-center">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 highlight">
				<div class="h-caption">
					<h4><i class="fa fa-heart fa-5"></i>Creative Commons</h4>
				</div>
				<div class="h-body text-center">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 highlight">
				<div class="h-caption">
					<h4><i class="fa fa-smile-o fa-5"></i>Author's support</h4>
				</div>
				<div class="h-body text-center">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
				</div>
			</div>
		</div> <!-- /row  -->

	</div>
</div>
<!-- /Highlights -->

<!-- container -->
<div class="container">

	<h2 class="text-center top-space">Frequently Asked Questions</h2>
	<br>

	<div class="row">
		<div class="col-sm-6">
			<h3>Which code editor would you recommend?</h3>
			<p>I'd highly recommend you <a href="http://www.sublimetext.com/">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
		</div>
		<div class="col-sm-6">
			<h3>Nice header. Where do I find more images like that one?</h3>
			<p>
				Well, there are thousands of stock art galleries, but personally,
				I prefer to use photos from these sites: <a href="http://unsplash.com">Unsplash.com</a>
				and <a href="http://www.flickr.com/creativecommons/by-2.0/tags/">Flickr - Creative Commons</a></p>
		</div>
	</div> <!-- /row -->

	<div class="row">
		<div class="col-sm-6">
			<h3>Can I use it to build a site for my client?</h3>
			<p>
				Yes, you can. You may use this template for any purpose, just don't forget about the <a href="http://creativecommons.org/licenses/by/3.0/">license</a>,
				which says: "You must give appropriate credit", i.e. you must provide the name of the creator and a link to the original template in your work.
			</p>
		</div>
		<div class="col-sm-6">
			<h3>Can you customize this template for me?</h3>
			<p>Yes, I can. Please drop me a line to sergey-at-pozhilov.com and describe your needs in details. Please note, my services are not cheap.</p>
		</div>
	</div> <!-- /row -->

	<div class="jumbotron top-space">
		<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
		<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
	</div>

</div> <!-- /container -->

<!-- Social links. @TODO: replace by link/instructions in template -->
<section id="social">
	<div class="container">
		<div class="wrapper clearfix">
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
			</div>
			<!-- AddThis Button END -->
		</div>
	</div>
</section>


</body>
<?php
require_once "inc/footer.inc.php";


?>

</html>