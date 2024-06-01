<?php
// $films = array();

$title = "Panier";
require_once "inc/header.inc.php";






$annonces = annoncesByType();
?>

<main class=" back   ">

    <section class=" ">

        <div class="  text-center   ">

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
                    <div class="card1   ">
                        <img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top " alt="image de <?= $annonce['title'] ?>" style="height: 200px; width: 100%; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $annonce['title'] ?></h5>
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