<?php
// $films = array();

$title = "Explorer";
require_once "inc/header.inc.php";






$annonces = annoncesByType();
?>
<div class="container text-center populardestinations">
    <br> <br>
    <h2 class="">Votre Pied-à-Terre à Cuba : Maisons et Appartements à Saisir !</h2>
    <p class="populardestinations">
        Que vous cherchiez une résidence secondaire ou un investissement locatif, notre collection de maisons et d'appartements à Cuba répondra à vos attentes.
    </p>
</div>
<main class=" body    ">

    <section class=" ">

        <div class="  text-center   ">
            <h1 class="   ">Votre maison de rêve vous attend à Cuba</h1>
            <a href="index.php" class="display-5  btn btn-primary text-white text-decoration-none">

                Page d'Accueil

            </a>
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
    </section>
    <section class=" container m-5 text-center">
        <div class="row">
            <?php
            foreach ($annonces as $annonce) {
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card1 fontTitre  ">
                        <img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top " alt="image de <?= $annonce['title'] ?>" style="height: 200px; width: 100%; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= displayAdvertAnnonce($annonce); ?></h5>
                            <p class="card-text"><?= substr($annonce['description'], 0, 100) ?>...</p>
                            <a href="<?= RACINE_SITE ?>showAnnonce.php?annonce=<?= $annonce['id_advert'] ?>" class="btn btn-primary hoverCart">Voir l'annonce</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
</main>







</body>
<?php
require_once "inc/footer.inc.php";


?>

</html>