<?php
$title = "Accueil";
require_once "inc/__header.php";
require_once "inc/__navbar.php";

?>






<!DOCTYPE html>
<html lang="en">



<body>


    <?php


    // Récupération des informations du formulaire
    $id_house = $_GET['id_house'];
    $id_user = $_GET['id_user'];
    $date_arrivee = $_GET['date_arrivee'];
    $date_depart = $_GET['date_depart'];
    $nombre_personnes = $_GET['nombre_personnes'];

    // Insertion dans la table reservations
    $query = "INSERT INTO reservations (id_house, id_user, date_reservation, date_arrivee, date_depart, nombre_personnes) VALUES ('$id_house', '$id_user', NOW(), '$date_arrivee', '$date_depart', '$nombre_personnes')";
    mysqli_query($conn, $query);

    // Fermeture de la connexion
    mysqli_close($conn);

    // Redirection vers une page de confirmation
    header("Location: confirmation.php");
    exit;
    ?>

</body>


</html>