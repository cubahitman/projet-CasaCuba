<?php


$title = "Reservations";
require_once "inc/header.inc.php";

$id_advert = $_GET['annonce'];
$annonce = showAnonnce($id_advert);
$info = "";
$reservation = "";
// Maintenant, vous pouvez utiliser les détails de $annonce pour afficher l'annonce









//=====Conditions test pour savoir si la reservations a ete fait
if (isset($annonce['is_reserved']) && $annonce['is_reserved']) {

    echo "<h4 class='text-center '>================Cette annonce est réservée===========.</h4>";

    $info = "<p class='text-danger'>Cette annonce est réservée.</p>";

    echo "<p class='text-center'>" . $annonce['reservation_message'] . "</p>";
} else {

    echo "<p class='text-center'>Entrez un message pour la réservation : Ex (Je réserve)</p>";
}



// Modifiez les en-têtes ici

header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_advert = $_GET['annonce'];

    $reservation_message = isset($_POST['reservation_message']) ? trim($_POST['reservation_message']) : '';


    if (!empty($reservation_message)) {

        if (isset($_POST['action']) && $_POST['action'] == 'reserve') {

            if (isset($_SESSION['user'])) { // Ajout de cette condition

                reserveAdvert($id_advert, $reservation_message);

                header('Location: confirmation.php?annonce=' . $id_advert);

                exit();
            } else {

                echo "<p class='text-danger'>Erreur : vous devez vous connecter pour réserver cette annonce.</p>";
            }
        }
    } else {

        echo "<p class='text-danger'>Veuillez remplir le champ de message de réservation.</p>";
    }
}


if (isset($_POST['action'])) {

    switch ($_POST['action']) {

        case 'cancel':

            cancelAdvert($id_advert);

            header('Location: confirmation.php?annonce=' . $id_advert);

            exit();

            break;

        case 'delete':

            deleteAdvert($id_advert);


            header('Location: admin/dashboard.php?gestionMaisons_php');

            exit();

            break;
    }
}
//  premiere verification 

// if (isset($_POST['action'])) {
//     switch ($_POST['action']) {
//         case 'reserve':
//             reserveAdvert($id_advert, $reservation_message);
//             debug($id_advert);
//             debug($reservation);
//             var_dump($id_advert);

//             var_dump($reservation_message);
//             header('Location: confirmation.php?annonce=' . $id_advert);
//             exit();
//             break;
//         case 'cancel':
//             cancelAdvert($id_advert);
//             header('Location: confirmation.php?annonce=' . $id_advert);
//             exit();
//             break;
//         case 'delete':
//             deleteAdvert($id_advert);

//             header('Location: admin/dashboard.php?gestionMaisons_php');
//             exit();
//             break;
//     }
// }
// Désactive le tampon de sortie et envoie la sortie mise en mémoire tampon

ob_end_flush();
// debug($_POST);


// require_once "inc/funtions.inc.php"
?>
<main class="">



    <section class=" container ">
        <div class="row d-flex justify-content-center align-items-center">
            <h1 class="text-center text-light">Ici<?= $info . $reservation ?></h1>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <div> <sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= 'Id= ' .  $annonce['id_advert'] . "  "  . 'Type= ' . $annonce['type'] ?></sup></div>
                    <img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top" alt="image de <?= $annonce['title']  ?>">
                    <div class="card-body">
                        <?php if ($annonce['is_reserved']) {
                            echo "<h5 class='card-title'>" . $annonce['title'] . " <sub class='bg-danger text-white rounded px-1'>Réservé</sub></h5>";
                        } else {
                            echo "<h5 class='card-title'>" . $annonce['title'] . "</h5>";
                        } ?>
                        <p class="card-text"><?= substr($annonce['description'], 0, 100) ?>...</p>
                        <div class="btn no-hover bg-blanc">
                            <a href="<?= RACINE_SITE ?>explorer.php?annonce=<?= $annonce['id_advert'] ?>" class="btn btn-primary">Revenir aux annonces</a>
                            <a href="<?= RACINE_SITE ?>admin/dashboard.php?gestionMaisons_php" class="btn btn-primary">Revenir aux gestionaire maison -ADMIN</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 form-group">
                <div class="btn1 css-nav ">
                    <?php
                    if (isset($_SESSION['user'])) {

                        if ($_SESSION['user']['role'] == 'ROLE_ADMIN') {

                            // Afficher les boutons "Annuler" et "Supprimer" pour l'admin

                    ?>


                            <!-- Formulaire de réservation pour l'admin -->

                            <form method="POST" action="reservation_traitement.php">

                                <label for="reservation_message">Message de Réservation :</label>

                                <textarea id="reservation_message" name="reservation_message" class="form-control <?= !empty($annonce['reservation_message']) ? 'bg-dark text-white' : '' ?>" required <?= !empty($annonce['reservation_message']) ? 'readonly' : '' ?>>

                      <?= isset($annonce['reservation_message']) ? $annonce['reservation_message'] : '' ?>
                    
                      </textarea>


                                <input type="hidden" name="id_advert" value="<?= $annonce['id_advert'] ?>">

                                <input type="submit" name="action" value="Réserver">

                            </form>
                </div>

                <div class="nav-css top-space ">

                    <form method="POST">

                        <input type="hidden" name="id_advert" value="<?= $annonce['id_advert'] ?>">

                        <input type="hidden" name="action" value="cancel">

                        <input type="submit" value="Annuler" class="btn btn-secondary">

                    </form>

                    <form method="POST">

                        <input type="hidden" name="id_advert" value="<?= $annonce['id_advert'] ?>">

                        <input type="hidden" name="action" value="delete">

                        <input type="submit" value="Supprimer" class="btn btn-danger">

                    </form>

                </div>


            <?php

                        } else {

                            // Formulaire de réservation pour les utilisateurs normaux

            ?>

                <form method="POST" action="reservation_traitement.php">

                    <label for="reservation_message">Message de Réservation :</label>

                    <textarea id="reservation_message" name="reservation_message" class="form-control <?= !empty($annonce['reservation_message']) ? 'bg-dark text-white' : '' ?>" required <?= !empty($annonce['reservation_message']) ? 'readonly' : '' ?>>

                     <?= isset($annonce['reservation_message']) ? $annonce['reservation_message'] : '' ?>
                    
                     </textarea>


                    <input type="hidden" name="id_advert" value="<?= $annonce['id_advert'] ?>">

                    <input type="submit" name="action" value="Réserver">

                </form>


        <?php

                        }
                    } else {

                        // Message pour inviter l'utilisateur à se connecter ou s'inscrire

                        echo "<p class=' '>Pour réserver, veuillez vous <a href='" . RACINE_SITE . "authentification.php'>connecter</a> ou <a href='" . RACINE_SITE . "inscription.php'>inscrire</a>.</p>";
                    }
        ?>
            </div>

            <!-- changer default par un -->
            <!-- <input type="hidden" value=""> <sup class="badge rounded-pill text-bg-danger ms-1 fs-16"></sup> -->


            <!-- afficher l'id  si l'ont veut -->






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