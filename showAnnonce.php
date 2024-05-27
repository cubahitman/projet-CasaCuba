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


// Vérifiez si l'action est de 'cancel'
if (isset($_POST['action']) && $_POST['action'] == 'cancel' && isset($_POST['id_advert'])) {
    // Appeler la fonction cancelAdvert avec l'id_advert fourni
    cancelAdvert($_POST['id_advert']);

    // Rediriger ou traiter la réponse comme nécessaire
    echo "<h4 class='reserved'> Cette annonce a ete annulé</h4>";
    // Rediriger vers la même page pour rafraîchir l'état de l'annonce
    // header('Location: ' . $_SERVER['PHP_SELF'] . '?annonce=' . $_POST['id_advert']);
} elseif


// =====Conditions test pour savoir si la reservations a ete fait
(isset($annonce['is_reserved']) && $annonce['is_reserved']) {
    echo "<h4 class='text-center reserved'>================Cette annonce est réservée===========.</h4>";
    $info = "<p class='reserved'>Cette annonce est réservée.</p>";
    echo "<p>" . $annonce['reservation_message'] . "</p>";
}




if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'reserve':
            reserveAdvert($id_advert, $reservation_message);
            break;
        case 'cancel':
            cancelAdvert($id_advert);
            echo "<h4 class='reserved'> Cette annonce a ete annulé</h4>";
            break;
        case 'delete':
            deleteAdvert($id_advert);
            // Redirigez l'utilisateur vers une autre page après la suppression
            header('Location: admin/dashboard.php?gestionMaisons_php');
            exit();
    }
}



// require_once "inc/funtions.inc.php"
?>
<main class="bg-admin">



    <section class=" container  ">
        <div class="row d-flex justify-content-center align-items-center">
            <h1 class="text-center text-light">Ici<?= $info ?></h1>
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
                    <input type="hidden" name="id_advert" value="<?= $annonce['id_advert'] ?>">
                    <input type="submit" name="action" value="Réserver">
                    <?php
                    // Vérifiez si l'utilisateur est connecté avant d'afficher le bouton "Annuler"
                    if (isset($_SESSION['user'])) {
                        echo '<input type="hidden" name="id_advert" value="' . $annonce['id_advert'] . '">';
                        if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'ROLE_ADMIN') {
                            echo '<input type="submit" name="action" value="Annuler">';
                            echo '<input type="submit" name="action" value="Supprimer">';
                        }
                    }
                    ?>
                    <!-- chanher default par un -->
                    <input type="" value=""> <sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= $_SESSION['user']['role'] ?? 'default' ?></sup>


                    <!-- afficher l'id  si l'ont veut -->
                    <div> <sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= $annonce['id_advert'] ?></sup></div>

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