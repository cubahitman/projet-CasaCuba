<?php
$title = "Accueil";
require_once "inc/header.inc.php";
$annonces = dernieresAnnonces();
?>
<!-- Intro -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous"> -->


<div class="container text-center ">
	<br> <br>
	<h2 class="">Votre Pied-à-Terre à Cuba : Maisons et Appartements à Saisir !</h2>
	<p class="">
		Que vous cherchiez une résidence secondaire ou un investissement locatif, notre collection de maisons et d'appartements à Cuba répondra à vos attentes.
	</p>
</div>
<!-- /Intro-->
<!-- <section class="">
	<div class="container-fluid text-center p-5 ">
		<a href="explorer.php" class="btn btn-action btn-lg">

			Consulter tous les annonces

		</a>
	</div>
</section> -->
<main class="top-space ">
	<div class="margin-content ">
		<section class="margin-content">
			<div class="  ">
				<h2 class="" style="margin-left: 10px;">Popular destinations in Cuba</h2>

				<div class="row no-margin gutters">

					<div class="col-lg-3 col-md-6 col-sm-12  ">
						<!-- <a href="explorer.php?ville=Havana" > -->
						<img src="assets/img/femmeBalance.png" class="img-fluid" alt="Rue de l'Havane vieille avec des anciennes voitures qui roulent.">
						<div class="card-img-overlay text-left" style="position: absolute; top: 85%; left: 7%; width: 70%;">
							<button type="button" class="button" style="padding: 0.5rem 1rem;">Varadero</button>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12  ">
						<img src="assets/img/havane.png" class="img-fluid" alt="Homme qui joue de la guitare" style="margin-bottom: 20px;">
						<div class="card-img-overlay text-left" style="position: absolute; top: 40%; left: 7%; width: 70%;">

							<button type="button" class="button" style="padding: 0.5rem 1rem;">Havane</button>


						</div>
						<img src="assets/img/santiago.jpeg" class="img-fluid" alt="Rue de la vieille Havane avec des voitures anciennes qui roulent">
						<div class="card-img-overlay text-left" style="position: absolute; top: 85%; left: 7%; width: 80%;">


							<button type="button" class="button" style="padding: 0.5rem 1rem;">Santiago</button>


						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12  ">
						<!-- <a href="explorer.php?ville=Havana" > -->
						<img src="assets/img/vinallesLink.jpeg" class="img-fluid" alt="Homme qui fait de la marche en montagne avec un beau paysage derrière">
						<div class="card-img-overlay text-left" style="position: absolute; top: 85%; left: 7%; width: 70%;">
							<button type="button" class="button" style="padding: 0.5rem 1rem;">Vignales</button>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12  ">
						<img src="assets/img/trinidadLink.jpeg" class="img-fluid" alt="Beau paysage montagneux à Trinidad" style="margin-bottom: 20px;">
						<div class="card-img-overlay text-left" style="position: absolute; top: 25%; left: 7%; width: 70%;">

							<button type="button" class="button" style="padding: 0.5rem 1rem;">Trinidad</button>


						</div>
						<img src="assets/img/cienfuegosLink.jpeg" class="img-fluid" alt="Image aérienne de la plage à Cienfuegos">
						<div class="card-img-overlay text-left" style="position: absolute; top: 85%; left: 7%; width: 70%;">


							<button type="button" class="button" style="padding: 0.5rem 1rem;">Varadero</button>


						</div>
					</div>

				</div>

			</div>
		</section>
	

		<section class="margin-content">
			
			<h2 class="" style="margin-left: 10px;">Meilleurs offres: destinations in Cuba</h2>

			<div class="row d-flex justify-content-around flex-wrap">
				<?php
				foreach ($annonces as $annonce) {
				?>
					<div class="col-lg-2 col-md-4 col-sm-6 "style="margin-right: 50px;">
						<div class="card3 " style="width: 100%; max-width: 350px;">
							<img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top" alt="<?= $annonce['description'] ?>">
							<div class="card-img-overlay" style="position: absolute; top: 3%; left: 7%; width: 33%;">
								<button type="button" class="button" style="padding: 0.5rem 3rem;">9.8</button>
							</div>
							<div class="card-body">
								<h5 class="card-title"><?= $annonce['title'] ?></h5>
								<p class="card-text"><?= $annonce['city'] ?></p>

								<b>À partir de <?= $annonce['price'] ?></b>
								<a href="<?= RACINE_SITE ?>showAnnonce.php?annonce=<?= $annonce['id_advert'] ?>" class=" hoverCart">Voir plus</a>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
	</section>


	</div>

	<div class="back  top-space">
		<div class="margin-content">

			<section>
				<h2 class="">Temoignages</h2>

				<div>
					<div class="card text-bg-dark">
						<img src="assets/img/couple.avif" class="card-img" alt="...">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small>Last updated 3 mins ago</small></p>
						</div>
					</div>
				</div>

			</section>

			<section class="">
				<h2>Popular destinations in Cuba</h2>
				<!-- Ajoutez ici les images des destinations -->
				<div class="pen ">
					<ul class='list'>
						<li class='item' alt="image de solei derrier la mer"><img src='https://source.unsplash.com/JP23z_-dA74'></li>
						<li class='item' alt="image"><img src='https://source.unsplash.com/FCCtL3oyRDY'></li>
						<li class='item' alt="image"><img src='https://source.unsplash.com/_MljkIzvcHw'></li>
						<li class='item' alt="image"><img src='https://source.unsplash.com/XfZPhwf_BtI'></li>
						<li class='item' alt="image"><img src='https://source.unsplash.com/v0Aiibob-Q8'></li>
						<li class='item' alt="image"><img src='https://source.unsplash.com/6NT7jy6OU9I'></li>
						<li class='item' alt="image"><img src='https://source.unsplash.com/fwtXC2sP7Tg'></li>
						<li class='item' alt="image"><img src='https://source.unsplash.com/JP23z_-dA74'></li>
						<li class='item' alt="image fauteuil-a-bascule-en-bois-marron-sous-un-arbre-vert-a Cuba"><img src='https://source.unsplash.com/CXV0EVK8QSU'></li>
						<li class='item' alt="image une-chaise-rouge-posee-au-sommet-dune-plage-au-bord-de-locean-a Cuba"><img src='https://source.unsplash.com/wM8R6CLynUk'></li>
						<li class='item' alt="image personne-flottant-sur-un-plan-deau-a varadero"><img src='https://source.unsplash.com/GjiTNrl6xoo'></li>
						<li class='item' alt="une-voiture-jaune-roulant-dans-une-rue-la-nuit"><img src='https://source.unsplash.com/T8PZvVQQ8t0'></li>
						<li class='item'><img src='https://source.unsplash.com/d_Nd6W0dd4Q'></li>
						<li class='item' alt="Maison avec diver coleurs"><img src='https://source.unsplash.com/fwtXC2sP7Tg'>alt=""</li>
					</ul>
				</div>
			</section>







		</div>
	</div>
</main>





<!-- Highlights - jumbotron -->
<div class="jumbotron">
	<div class="container">

		<h3 class="text-center thin">Reasons to use this template</h3>

		<div class="row  ">
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
<div class=" margin-content">

	<h2 class="text-center ">Frequently Asked Questions</h2>
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

	<div class="jumbotron ">
		<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
		<p class="text-right"><a class="btn  btn-large">Learn more »</a></p>
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



<?php
require_once "inc/footer.inc.php";


?>
</body>
</html>