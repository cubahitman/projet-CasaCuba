<?php
// $films = array();

$title = "Explorer";
require_once "inc/header.inc.php";






$annonces = annoncesByType();
?>
<main class="bg-capitoliounuit ">
    <section class="">

        <div class="container encadrage  text-center ">
            <h1 class=" font_encadrage ">Votre maison de rêve vous attend à Cuba</h1>
            <a href="index.php" class="display-5  btn btn-primary text-white text-decoration-none">

                Page d'Accueil

            </a>

        </div>
    </section>
    <section class=" container m-5 text-center  ">
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