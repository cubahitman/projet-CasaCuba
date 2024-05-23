<?php
// $films = array();


require_once "../inc/funtions.inc.php";

if (empty($_SESSION['user'])) {

    header("location:" . RACINE_SITE . "authentification.php");
} else if ($_SESSION['user']['role'] == 'ROLE_ADMIN') {

    // header("location:" . RACINE_SITE . "admin/dashboard.php?dashboard_php");
}

$title = "Profil";
require_once "../inc/header.inc.php";



?>
<main>

    <section class="container my-5">
        <div>
            <h1>Bienvenue <?= $_SESSION['user']['pseudo'] ?></h1>






            <div class="list-group ">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    <?= $_SESSION['user']['firstName'] ?>
                </a>
                <a href="#" class="list-group-item list-group-item-action">Nom: <?= $_SESSION['user']['lastName'] ?></a>
                <a href="#" class="list-group-item list-group-item-action">Telephonne: <?= $_SESSION['user']['phone'] ?></a>
                <a href="#" class="list-group-item list-group-item-action">E-mail: <?= $_SESSION['user']['email'] ?></a>
                <a class="list-group-item list-group-item-action ">Adresse: <?= $_SESSION['user']['address'] ?> <?= $_SESSION['user']['zipCode'] ?></a>
                <!-- <a class="list-group-item list-group-item-action ">Adresse: <?= $user['firstName'] ?> </a> -->
                <?php
                $user = showUser($_SESSION['user']['id_user']);
                // debug($user);
                // echo "prenom" . $user['firstName'];
                //foreach ($users as $user) {     
                ?>
                <!-- <td class="text-center">
                    <a href="dashboard.php?users_php&action=delete&id_user=<?= $user['id_user'] ?>"><i class="bi bi-trash3-fill text-danger"></i></a>
                </td> -->

                <?php
                // debug($users);
                //}
                ?>
            </div>

        </div>
    </section>

</main>



<?php
require_once "../inc/footer.inc.php";

?>