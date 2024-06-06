<?php
// $films = array();

$title = "Explorer";
require_once "inc/header.inc.php";
?>

<?php



$type = 'location'; // Le type ici

$annonces = annoncesByType([$type]);


$title = "Afichage general";
require_once "inc/header.inc.php";
// annonces location //
$annonces = annoncesByType(['location']);
?>
<div class="container text-center   top-space1">
    <!-- <br> <br> -->
    <h2 class="">Votre Pied-à-Terre à Cuba : Maisons et Appartements à Saisir !</h2>
    <p class="">
        Que vous cherchiez une résidence secondaire ou un investissement locatif, notre collection de maisons et d'appartements à Cuba répondra à vos attentes.
    </p>
    <!-- <a href="index.php" class="display-5  btn btn-primary text-white text-decoration-none">

        Page d'Accueil

    </a> -->
</div>
<main class="bg-capitoliounuit top-space">


    <section class=" container m-5 text-center  ">
        <div class="row">
            <?php
            foreach ($annonces as $annonce) {
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card1   ">
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