<?php

require_once "../inc/funtions.inc.php";


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







$title = "Backoffice";
require_once "../inc/header.inc.php";
?>

<main>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-2">

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
                        <a href="?gestionMaisons_php" class="nav-link ">Gestions maison</a>
                    </li>
                    <li>
                        <a href="?users_php" class="nav-link ">Utilisateurs</a>
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
                <img src="<?= RACINE_SITE ?>assets/img/affiche.jpg" alt="Affiche des films sur le backoffice" width="500" height="800">
            </div>

        <?php

        endif;

        ?>

        <section class="container col-lg-6 my-5">
            <div>
                <h1>Bienvenue <?= $_SESSION['user']['pseudo'] ?></h1>






                <div class="list-group container">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        <?= $_SESSION['user']['firstName'] ?>
                    </a>

                    <div class="d-flex justify-content-between list-group-item list-group-item-action"><a href="#" class="text-dark d-block">Nom: <?= $_SESSION['user']['lastName'] ?><div class="d-flex"></a><i class="bi bi-trash3-fill text-danger d-block mx-5"></i><i class="bi bi-trash3-fill text-danger d-block"></i></div>
                </div>
                <a href="#" class="list-group-item list-group-item-action">Telephonne: <?= $_SESSION['user']['phone'] ?></a>
                <a href="#" class="list-group-item list-group-item-action">E-mail: <?= $_SESSION['user']['email'] ?></a>
                <a class="list-group-item list-group-item-action ">Adresse: <?= $_SESSION['user']['address'] ?> <?= $_SESSION['user']['zipCode'] ?></a>
                <!-- <a class="list-group-item list-group-item-action ">Adresse: <?= $user['firstName'] ?> </a> -->
                <?php
                $user = showUser($_SESSION['user']['id_user']);
                // debug($user);
                echo "prenom " . $user['firstName'];
                //foreach ($users as $user) {     
                ?>
                <div>PAGE DASHBOARD affiche id user<?= $user['id_user'] ?></div>


                <div class="text-center">
                    <!-- <a href="dashboard.php?users_php&action=delete&id_user=<?= $user['id_user'] ?>"><i class="bi bi-trash3-fill text-danger"></i></a> -->
                </div>
                <!-- <td class="text-center"> //////////////////
                        <a href="dashboard.php?users_php&action=update&id_user=<? //= $user['id_user'] 
                                                                                ?>" class="btn btn-danger"><? //= ($user['role']) == 'ROLE_ADMIN' ? 'Rôle user' : 'Rôle admin' 
                                                                                                            ?>
                    </td> -->
                <?php
                // debug($users);
                //}
                ?>
            </div>

        </section>
    </div>

    <div class="col-sm-12">
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
            } else if (isset($_GET['users_php'])) {
                require_once "showUsers.php";
            } else {
                require_once "dashboard.php";
            }
        }
        ?>
    </div>
    </div>
</main>


<?php
require_once "../inc/footer.inc.php";



?>