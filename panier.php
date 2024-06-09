<?php
// $films = array();





$title = "Panier";
require_once "inc/header.inc_copy.php";

$id_advert = $_GET['annonce'];
$id_utilisateur = $_SESSION['user']['id_user'];
$annonce = showAnonnce($id_advert);

if (!empty($_POST)) {
    if (isset($_POST['form_name']) && $_POST['form_name'] == 'achat_form') {


        $id_annonce = $_POST['id_annonce'];

        $id_utilisateur = $_SESSION['user']['id_user'];

        $etat = 0 ;

        error_reporting(E_ALL);
        try {
            entreAchat($id_annonce, $id_utilisateur,$etat);
        } catch (PDOException $e) {

            echo 'Erreur PDO : ' . $e->getMessage();

            $errorInfo = $pdo->errorInfo();

            print_r($errorInfo);
            error_log("Erreur lors de la réservation : " . $e->getMessage() . "\n", 3, "erreur.log");

            echo "Erreur lors de la réservation";
        }

        // Redirection vers une page de confirmation

        header('Location: annonceVente.php');

        exit;
    }
}

?>

<main class=" bg-Business   ">

    <!-- <section class=" ">

        <div class="  text-center   ">

            
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
    </section> -->

    <section class=" container m-5 text-center top-space1">
        <div class="row">
<?php if (!isset($id_advert)) {
   echo"<p> Votre panier est vide </p>";
}else{ ?>
                <div class="col-lg-4 col-md-4 col-sm-12 ">
                    <div class="card1   ">
                        <img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top " alt="image de <?= $annonce['title'] ?>" style="height: 200px; width: 100%; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $annonce['title'] ?></h5>
                            <p class="card-text"><?= substr($annonce['description'], 0, 100) ?>...</p>
                            <a href="<?= RACINE_SITE ?>showAnnonce.php?annonce=<?= $annonce['id_advert'] ?>" class="btn btn-primary hoverCart">Voir l'annonce</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 ">
                    <p class="mt-5">We are <span class="red ">MASSIVE Academy.</span> We aim to improve
                            education through both methods -effective project-based learning - and material - by
                            teaching
                            skills that are applicatble to improving your life today.
                    </p>

                    <form method="POST" action="panier.php">
                        <input type="hidden" name="id_annonce" value="<?= $annonce['id_advert'] ?>">

                        <input type="hidden" name="form_name" value="achat_form">

                        <button type="submit" name="action" class="btn btn-primary btn-block" value="confirmer">Ajouter au panier</button>
                    </form>

                </div>

        <?php    } ?> </div>
    </section>
</main>







</body>
<?php
require_once "inc/footer.inc.php";


?>

</html>