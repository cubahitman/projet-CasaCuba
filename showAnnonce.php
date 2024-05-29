<?php


$title = "Reservations";
require_once "inc/header.inc.php";

$id_advert = $_GET['annonce'];
$annonce = showAnonnce($id_advert);
$info = "";
$reservation = "";
// Maintenant, vous pouvez utiliser les détails de $annonce pour afficher l'annonce


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_advert = $_GET['annonce'];
    $reservation_message = isset($_POST['reservation_message']) ? trim($_POST['reservation_message']) : '';
    reserveAdvert($id_advert, $reservation_message);
}


// Vérifiez si l'action est de 'cancel'
// if (isset($_POST['action']) && $_POST['action'] == 'cancel' && isset($_POST['id_advert'])) {
//     // Appeler la fonction cancelAdvert avec l'id_advert fourni
//     cancelAdvert($_POST['id_advert']);

// Rediriger ou traiter la réponse comme nécessaire
// echo "<h4 class='reserved'> Cette annonce a ete annulé</h4>";
// Rediriger vers la même page pour rafraîchir l'état de l'annonce
// header('Location: ' . $_SERVER['PHP_SELF'] . '?annonce=' . $_POST['id_advert']);
// }
//  elseif


//=====Conditions test pour savoir si la reservations a ete fait
if (isset($annonce['is_reserved']) && $annonce['is_reserved']) {

    echo "<h4 class='text-center reserved'>================Cette annonce est réservée===========.</h4>";

    $info = "<p class='reserved'>Cette annonce est réservée.</p>";

    echo "<p class='text-center'>" . $annonce['reservation_message'] . "</p>";
} else {

    echo "<p class='text-center'>Entrez un message pour la réservation : Ex (Je réserve)</p>";
}




// if (isset($_POST['action'])) {
//     switch ($_POST['action']) {
//         case 'reserve':
//             reserveAdvert($id_advert, $reservation_message);
//             $info = "<h4 class='reserved'>========== Cette annonce a ete reservé</h4>";
//             break;
// case 'cancel':
//     cancelAdvert($id_advert);
//     $info = "<h4 class='reserved'>================ Cette annonce a ete annulé</h4>";
//     break;
// case 'delete':
//     deleteAdvert($id_advert);
//     // Redirigez l'utilisateur vers une autre page après la suppression
//     header('Location: admin/gestionMaisons.php');
//     $info = "<h4 class='reserved'>================ Cette annonce a ete annulé</h4>";
//     exit();
//     }
// }

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'reserve':
            reserveAdvert($id_advert, $reservation_message);
            header('Location: ' . $_SERVER['PHP_SELF'] . '?annonce=' . $id_advert);
            exit();
            break;
        case 'cancel':
            cancelAdvert($id_advert);
            // header('Location: ' . $_SERVER['PHP_SELF'] . '?annonce=' . $id_advert);
            exit();
            break;
        case 'delete':
            deleteAdvert($id_advert);
            header('Location: confirmation.php');
            exit();
            break;
    }
}
// debug($_POST);


// require_once "inc/funtions.inc.php"
?>
<main class="bg-claire">



    <section class=" container  ">
        <div class="row d-flex justify-content-center align-items-center">
            <h1 class="text-center text-light"><?= $info . $reservation ?></h1>
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
                        <a href="<?= RACINE_SITE ?>explorer.php?annonce=<?= $annonce['id_advert'] ?>" class="btn btn-primary">Revenir aux annonces</a>
                        <a href="<?= RACINE_SITE ?>admin/dashboard.php?gestionMaisons_php" class="btn btn-primary">Revenir aux gestionaire maison -ADMIN</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 form-group">
                <form method="POST">
                    <label for="reservation_message">Message de Réservation :</label>
                    <textarea id="reservation_message" name="reservation_message" class="form-control <?= !empty($annonce['reservation_message']) ? 'bg-dark text-white' : '' ?>" required <?= !empty($annonce['reservation_message']) ? 'eadonly' : '' ?>>
    <?= isset($annonce['reservation_message']) ? $annonce['reservation_message'] : '' ?>
</textarea>

                    <input type="hidden" name="id_advert" value="<?= $annonce['id_advert'] ?>">
                    <input type="submit" name="action" value="Réserver">
                    <?php

                    // Vérifiez si l'utilisateur est connecté avant d'afficher les boutons "Annuler" et "Supprimer"
                    // Vérifiez si l'utilisateur est connecté avant d'afficher les boutons "Annuler" et "Supprimer"
                    if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'ROLE_ADMIN') {
                    ?>

                </form>
                <form method="POST">
                    <input type="hidden" name="id_advert" value="<?= $annonce['id_advert'] ?>">
                    <input type="hidden" name="action" value="cancel">
                    <input type="submit" value="Annuler">
                </form>
                <form method="POST">
                    <input type="hidden" name="id_advert" value="<?= $annonce['id_advert'] ?>">
                    <input type="hidden" name="action" value="delete">
                    <input type="submit" value="Supprimer">
                </form>

            <?php
                    }

            ?>


            <!-- chanher default par un -->
            <input type="hidden" value=""> <sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= $_SESSION['user']['role'] ?? 'default' ?></sup>


            <!-- afficher l'id  si l'ont veut -->
            <div> <sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= $annonce['id_advert'] ?></sup></div>


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