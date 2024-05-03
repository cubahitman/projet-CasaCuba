<?php

require_once "inc/funtions.inc.php";

if (empty($_SESSION['user'])) {

    header("location:" . RACINE_SITE . "authentification.php");
} else if ($_SESSION['user']['role'] == 'ROLE_ADMIN') {

    header("location:" . RACINE_SITE . "admin/dashboard.php?dashboard_php");
}





$title = "Profil";
require_once "inc/header.inc.php";
?>


<main>
    <section class="m-5">
        <h2 class="text-center">Bonjour <?= $_SESSION['user']['firstName'] ?></h2>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                <?= $_SESSION['user']['firstName'] ?>
            </a>
            <a href="#" class="list-group-item list-group-item-action">Nom: <?= $_SESSION['user']['lastName'] ?></a>
            <a href="#" class="list-group-item list-group-item-action">Telephonne: <?= $_SESSION['user']['phone'] ?></a>
            <a href="#" class="list-group-item list-group-item-action">E-mail: <?= $_SESSION['user']['email'] ?></a>
    </section>
</main>




<?php
require_once "inc/footer.inc.php";

?>