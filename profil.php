<?php

require_once "inc/funtions.inc.php";

if (!isset($_SESSION['user'])) {
    header("location:" . RACINE_SITE . "authentification.php");
}
// echo '<br><br><br><br><br><br><br><br><br>';

$user = showUser($_SESSION['user']['id_user']);
$reservations = showReservations($_SESSION['user']['id_user']);
$achats = showAchats($_SESSION['user']['id_user']);



$title = "Profil";
require_once "inc/header.inc.php";
?>

<main class="container top-space1 space">
    <div class="list-group m-5">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            <?= $_SESSION['user']['firstName'] ?>
        </a>
        <a href="#" class="list-group-item list-group-item-action">Nom: <?= $_SESSION['user']['lastName'] ?></a>
        <a href="#" class="list-group-item list-group-item-action">Telephonne: <?= $_SESSION['user']['phone'] ?></a>
        <a href="#" class="list-group-item list-group-item-action">E-mail: <?= $_SESSION['user']['email'] ?></a>
        <?php
        foreach ($reservations as $reservation) {

            $annonce = showAnonnce($reservation['id_annonce']);
        ?>

            <a href="<?= RACINE_SITE ?>showAnnonce.php?annonce=<?= $annonce['id_advert'] ?>" class="list-group-item list-group-item-action bg-bleuNav ">
                Id-<?= $annonce['id_advert'] ?> RÉSERVATION <?= $annonce['title'] ?> • fait le : <?= $reservation['date_reservation'] ?> arrivé <?= $reservation['date_arrivee'] ?> depart <?= $reservation['date_depart'] ?> <span class=" text-danger "> • • • <?= $reservation['etat_reservation'] ?> </span> </a>


        <?php }
        foreach ($achats as $achat) {

            $annonce = showAnonnce($achat['id_annonce']); ?>

            <a class="list-group-item list-group-item-action bg-capitoliounuit ">TRANSACTION <?= $annonce['title'] ?> Référence () a <?= $annonce['price'] ?></a>


        <?php } ?>

        <!-- <a class="list-group-item list-group-item-action ">Adresse: <?= $user['firstName'] ?> </a> -->

    </div>
</main>

 <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jQuery.headroom.min.js"></script>
    <script src="assets/js/template.js"></script>