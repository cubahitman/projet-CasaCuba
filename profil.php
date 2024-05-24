<?php

require_once "inc/funtions.inc.php";

if (!isset($_SESSION['user'])) {
    header("location:" . RACINE_SITE . "authentification.php");
}
// else if ($_SESSION['user']['role'] == 'ROLE_ADMIN') {

//     header("location:" . RACINE_SITE . "admin/dashboard.php?dashboard_php");
// }




$title = "Profil";
require_once "inc/header.inc.php";
?>


<main class="container">
    <div class="list-group m-5">
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
        echo "pseudo " . $user['pseudo'];
        //foreach ($users as $user) {     
        ?>
    </div>
</main>




<?php
require_once "inc/footer.inc.php";
?>