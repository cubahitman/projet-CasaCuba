<?php
// $films = array();

$title = "Explorer";
require_once "inc/header.inc.php";
?>

<?php





$title = "Afichage general";
require_once "inc/header.inc.php";
$annonces = allAnnonces();
?>
<main class="bg-capitoliounuit ">
    <section class="">

        <div class="container fontTitre text-center p-5 ">
            <h1 class="display-3 ">Votre maison de rêve vous attend à Cuba</h1>
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
                <div class="col-lg-4 col-md-6 col-sm-12 m-5 border ">
                    <div class="card fontTitre  ">
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