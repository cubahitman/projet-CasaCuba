<?php


$title = "Reservations";
require_once "inc/header.inc.php";

$id_advert = $_GET['annonce'];
$annonce = showAnonnce($id_advert);
$info = "";
// Maintenant, vous pouvez utiliser les détails de $annonce pour afficher l'annonce


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_advert = $_GET['annonce'];
    $reservation_message = $_POST['reservation_message'];
    reserveAdvert($id_advert, $reservation_message);
}

// =====
if (isset($annonce['is_reserved']) && $annonce['is_reserved']) {
    echo "<h4 class='reserved'>Cette annonce est réservée.</h4>";
    // $info = "<p class='reserved'>Cette annonce est réservée.</p>";
    echo "<p>" . $annonce['reservation_message'] . "</p>";
}
// require_once "inc/funtions.inc.php"
?>
<main class="bg-admin">



    <section class=" container  ">
        <div class="row d-flex justify-content-center align-items-center">

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top" alt="image de <?= $annonce['title']  ?>">
                    <div class="card-body">
                        <?php if ($annonce['is_reserved']) {
                            echo "<h5 class='card-title'>" . $annonce['title'] . " <sub class='bg-danger text-white rounded px-1'>Réservé</sub></h5>";
                        } else {
                            echo "<h5 class='card-title'>" . $annonce['title'] . "</h5>";
                        } ?>
                        <p class="card-text"><?= substr($annonce['description'], 0, 100) ?>...</p>
                        <a href="<?= RACINE_SITE ?>showAnnonce.php?annonce=<?= $annonce['id_advert'] ?>" class="btn btn-primary">Voir l'annonce</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 form-group">
                <form method="POST">
                    <label for="reservation_message">Message de Réservation :</label>
                    <textarea id="reservation_message" name="reservation_message" class="form-control <?= !empty($annonce['reservation_message']) ? 'bg-dark text-white' : '' ?>" required <?= !empty($annonce['reservation_message']) ? 'readonly' : '' ?>>
                     <?= $annonce['reservation_message'] ?>
            </textarea>
                    <input type="submit" value="Réserver">
                    <?php
                    // Vérifiez si l'utilisateur est connecté avant d'afficher le bouton "Annuler"
                    if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'ROLE_ADMIN') {
                        echo '<input type="hidden" name="action" value="cancel">';
                        echo '<input type="submit" value="Annuler">';
                    }
                    ?>
                    <!-- <input type="submit" value="Annuler"> <sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= $_SESSION['user']['role'] ?></sup> -->

                </form>
            </div>

        </div>
    </section>
</main>
</footer>

<?php
require_once "inc/footer.inc.php";


?>





</body>

</html>