<?php

require_once "../inc/funtions.inc.php";
$message = isset($_GET['message']) ? $_GET['message'] : '';

////////////////////////////////////////////////////
// GestionUser rediretion a partir de showUsers.php:
if (isset($_GET['action']) && isset($_GET['id_user'])) {
    if (!empty($_GET['action']) && $_GET['action'] == 'delete' && !empty($_GET['id_user'])) {
        $idUser = htmlentities($_GET['id_user']);

        deleteUser($idUser);
    }
}

if (!empty($_GET['action']) && $_GET['action'] == 'update' && !empty($_GET['id_user'])) {
    $user = showUser($_GET['id_user']);
    if ($user['role'] == 'ROLE_ADMIN') {
        updateRole('ROLE_USER', $user['id_user']);
    }

    if ($user['role'] == 'ROLE_USER') {
        updateRole('ROLE_ADMIN', $user['id_user']);
    }
}


if (!isset($_SESSION['user'])) {
    header("location:" . RACINE_SITE . "authentification.php");
} else {
    if ($_SESSION['user']['role'] == 'ROLE_USER') {
        header("location:" . RACINE_SITE . "index.php");
    }
}
if (isset($_GET['action']) && isset($_GET['id_annonce'])) {
    if (!empty($_GET['action']) && $_GET['action'] == 'delete' && !empty($_GET['id_annonce'])) {
        $idAnnonce = (int) htmlentities($_GET['id_annonce']);
        $deleted = deleteAdvert($idAnnonce);
        if ($deleted) {
            header('Location: dashboard.php?gestionAnnonce_php&message=success');
        } else {
            header('Location: dashboard.php?gestionAnnonce_php&message=failed');
        }
        exit();
    }
}
if (isset($_GET['action']) && isset($_GET['id_reservation'])) {
    if (!empty($_GET['action']) && $_GET['action'] == 'annulation' && !empty($_GET['id_reservation'])) {
        $idReservation = (int) htmlentities($_GET['id_reservation']);
        $anulation = updateReservation($idReservation, 'annuler');
        header('Location: dashboard.php?gestionReservation_php');
          
        exit();
    }
    if (!empty($_GET['action']) && $_GET['action'] == 'confirmation' && !empty($_GET['id_reservation'])) {
        $idReservation = (int) htmlentities($_GET['id_reservation']);
        $anulation = updateReservation($idReservation, 'confirmer');
        header('Location: dashboard.php?gestionReservation_php');
          
        exit();
    }
}






$title = "Backoffice";
require_once "../inc/boostrap.inc.php";

?>

<main>
    <div class="row back1">
        <div class="col-sm-6 col-md-2 col-lg-2 text-bg-dark p-3 sidebarre">
            <div class="d-flex flex-column text-bg-dark p-3 sidebarre">
                <hr>
                <ul class="nav1 nav-pills flex-column mb-auto">
                    <li>
                        <a href="?dashboard_php" class="nav-link ">Backoffice</a>
                    </li>
                    <li>
                        <a href="?compte_php" class="nav-link ">Compte</a>
                    </li>
                    <li>
                        <a href="?users_php" class="nav-link ">Utilisateurs</a>
                    </li>

                    <li>
                        <a href="?gestionAnnonce_php" class="nav-link ">Gestion Annonces </a>
                    </li>

                    <li>
                        <a href="?gestionReservation_php" class="nav-link ">Gestion Reservation </a>
                    </li>

                </ul>
                <hr>
            </div> 

    </div>





    <?php
    if (isset($_GET['dashboard_php'])) :
    ?>

        <div class="w-50 col-lg-2 m-auto">
            <h2>Bonjour <?php echo $_SESSION['user']['firstName'] ?></h2>

            <p>Bienvenue sur le backoffice</p>

        </div>
        <!-- <img src="<?= RACINE_SITE ?>assets/images/mac.jpg" alt="Affiche des  backoffice" width="300"> -->
    <?php

    endif;

    ?>
    <div class="col-sm-6 col-md-10 col-lg-10">

        <?php if ($message === 'success'): ?>
            <div class="alert alert-success" role="alert">Annonce supprimée avec succès.</div>
        <?php elseif ($message === 'failed'): ?>
            <div class="alert alert-danger" role="alert">Vous ne pouvez supprimer cette annonce car elle est réservée.</div>
        <?php endif; ?>

        <?php

        /** $_GET représente les données qui transitent par l'URL. Il s'agit d'une Super Globale et comme toutes les superglobales elle sont de type array
         * 'superglobale' signifie que cette variable est disponible partout dans le script, y compris au sein des fonctions (pas besoin de faire global $_GET)
         * Les informations transitent dans l'URL selon la syntaxe suivante: 
         * 
         * ex: page.php?indice1=valeur1&indice2=valeur2&indiceN=valeurN
         * Quand on receptionne les données, $_GET est rempli selon le schéma suivant: 
         * 
         *                  $_GET = array(
         *                    'indice1' => 'valeur1',
         *                    'indice2' => 'valeur2',
         *                    'indiceN' => 'valeurN'
         *                   );
         */

        if (!empty($_GET)) {   //si ma variable $_GET n'est pas vide, cela veut dire que j'ai cliqué sur un lien de la sidebar ( l'indice de la variable $_GET change selon le lien indiqué dans la balise a)

            if (isset($_GET['compte_php'])) {
                require_once "compte.php";
            } else if (isset($_GET['gestionMaisons_php'])) {
                require_once "gestionMaisons.php";
            } else if (isset($_GET['form_modifier-user_php'])) {
                require_once "form_modifier-user.php";
            } else if (isset($_GET['users_php'])) {
                require_once "showUsers.php";
            } else if (isset($_GET['gestionAnnonce_php'])) {
                require_once "gestionAnnonce.php";
            }
            else if (isset($_GET['update_annonce_php'])) {
                require_once "updateAnnonce.php";
            } 
            else if (isset($_GET['gestionReservation_php'])) {
                require_once "gestionReservation.php";
            }
             else {
                require_once "dashboard.php";
            }
        }
        ?>
    </div>
    </div>
    </div>

</main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/headroom.min.js"></script>
<script src="assets/js/jQuery.headroom.min.js"></script>
<script src="assets/js/template.js"></script>

<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script>
<script src="assets/js/google-map.js"></script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="assets/js/scripts.js"></script>

<?php
// require_once "../inc/footer.inc.php";
?>