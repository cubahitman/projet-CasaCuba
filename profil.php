<?php

require_once "inc/funtions.inc.php";

if (!isset($_SESSION['user'])) {
    header("location:". RACINE_SITE. "authentification.php");
}
// echo '<br><br><br><br><br><br><br><br><br>';

$user = showUser($_SESSION['user']['id_user']);
$reservations = showReservations($_SESSION['user']['id_user']);



$title = "Profil";
require_once "inc/header.inc.php";
?>

<main class="container">
    <div class="list-group m-5">
        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            <?= $_SESSION['user']['firstName']?>
        </a>
        <a href="#" class="list-group-item list-group-item-action">Nom: <?= $_SESSION['user']['lastName']?></a>
        <a href="#" class="list-group-item list-group-item-action">Telephonne: <?= $_SESSION['user']['phone']?></a>
        <a href="#" class="list-group-item list-group-item-action">E-mail: <?= $_SESSION['user']['email']?></a>
        <?php
            foreach ($reservations as $reservation) {
                $annonce = showAnonnce($reservation['id_annonce']);
                // debug( $annonce);debug($reservation['id_annonce']);debug($annonce['title']);
               ?>
        <a class="list-group-item list-group-item-action bg-bleuNav ">Reservations le: <?= $reservation['date_reservation']?> de <?= $annonce['title']?>  du  <?= $reservation['date_arrivee']?>  a  <?= $reservation['date_depart']?></a>

        <?php   }?>

        
        <!-- <a class="list-group-item list-group-item-action ">Adresse: <?= $user['firstName']?> </a> -->
       
    </div>
</main




<?php
require_once "inc/footer.inc.php";
?>