<?php

require_once "inc/funtions.inc.php";

if (!isset($_SESSION['user'])) {
    header("location:" . RACINE_SITE . "authentification.php");
}
// echo '<br><br><br><br><br><br><br><br><br>';

$user = showUser($_SESSION['user']['id_user']);
$reservations = showReservations($_SESSION['user']['id_user']);



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
    
        // debug( $annonce);debug($reservation['id_annonce']);debug($annonce['title']);
    
        if ($annonce['type'] == 'location') {
    // && $reservation['etat_reservation'] == 'validée'
           ?>
    
            <a class="list-group-item list-group-item-action bg-bleuNav ">RÉSERVATION, date du : <?= $reservation['date_reservation']?> de l'annonce      <?= $annonce['title']?> de la date <?= $reservation['date_arrivee']?> a <?= $reservation['date_depart']?> est en etat de <?= $reservation['etat_reservation']?>  </a>
    
    
        <?php }?>
    
        <?php if ($annonce['type'] == 'achat') {?>
    
            <a class="list-group-item list-group-item-action bg-bleuNav ">TRANSACTION <?= $annonce['title']?> Référence () a <?= $annonce['price']?></a>
    
    
        <?php }}?>

        <!-- <a class="list-group-item list-group-item-action ">Adresse: <?= $user['firstName'] ?> </a> -->

    </div>
</main <?php
        require_once "inc/footer.inc.php";
        ?>