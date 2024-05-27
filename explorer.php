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
<main>
    <section class="titre">
        <div class="container-fluid text-center p-5 titre">
            <h1 class="display-3 titre">Le bon appart</h1>
            <a href="index.php" class="display-5  btn btn-primary text-white text-decoration-none">

                Page d'Accueil

            </a>

        </div>
    </section>
    <section class="index-img container m-5 text-center">
        <div class="row">
            <?php
            foreach ($annonces as $annonce) {
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top" alt="image de <?= $annonce['title'] ?>" style="height: 200px; width: 100%; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= displayAdvertAnnonce($annonce); ?></h5>
                            <p class="card-text"><?= substr($annonce['description'], 0, 100) ?>...</p>
                            <a href="<?= RACINE_SITE ?>showAnnonce.php?annonce=<?= $annonce['id_advert'] ?>" class="btn btn-primary">Voir l'annonce</a>
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