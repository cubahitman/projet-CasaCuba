<?php


$title = "Reservations";
require_once "inc/header.inc.php";

$id_advert = $_GET['annonce'];

$annonce = showAnonnce($id_advert);
$reservations = showReservations($_SESSION['user']['id_user']);
$info = "";
$reservation = "";
// print_r($reserv); // affichera toutes les valeurs du tableau $reserv

// foreach ($reserv as $reservation) {
//     foreach ($reservation as $key => $value) {
//         // echo "$key: $value<br>"; // affichera toutes les valeurs de tous les champs
//     }
// }
// debug($annonce['id_advert']);
// debug($reserv[0]['id_annonce']);
// debug($_SESSION);

foreach ($reservations as $reservation) {

    $id_annonce = $reservation['id_annonce'];
    if ($reservation['id_annonce'] == $id_advert) {

        $date_reservation = $reservation['date_reservation'];

        break; // Sortir de la boucle car nous avons trouvé la réservation correspondante

    }
}


// foreach ($reserv as $reservation) {

//     $id_annonce = $annonce['id_advert'];

//     // Utilisez la valeur de $id_annonce ici
// $value= $id_annonce ;
//     echo "ID annonce : $id_annonce : $value<br>";

// }




//=====Conditions test pour savoir si la reservations a ete fait
// if (isset($annonce['is_reserved']) && $annonce['is_reserved']) {

//     echo "<h4 class='text-center '>================Cette annonce est réservée===========.</h4>";

//     $info = "<p class='text-danger'>Cette annonce est réservée.</p>";

//     echo "<p class='text-center'>" . $annonce['reservation_message'] . "</p>";
// } else {

//     echo "<p class='text-center'>Entrez un message pour la réservation : Ex (Je réserve)</p>";
// }



// Modifiez les en-têtes ici

header('Content-Type: text/html; charset=UTF-8');




if (isset($_POST['action'])) {

    switch ($_POST['action']) {

        case 'cancel':

            // cancelAdvert($id_advert);

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


ob_end_flush();
// debug($_POST);



?>
<main class="maincontent">



    <section class=" margin-content ">
        <div class="row d-flex justify-content-center m-auto">
            <h1 class="text-center text-light"><?= $info ?></h1>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <div> <sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= 'Id= ' .  $annonce['id_advert'] . "  "  . 'Type= ' . $annonce['type'] ?></sup></div>
                    <img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top" alt="image de <?= $annonce['title']  ?>">
                    <div class="card-body">
                        <?php





                        if ($annonce['id_advert'] == $id_annonce) {
                            // debug($id_annonce);
                            echo "<h5 class='card-title'>" . $annonce['title'] . " <sub class='bg-danger text-white rounded px-1'>Réservé par vous le $date_reservation</sub></h5>"; // 
                        } else {

                            echo "<h5 class='card-title'>" . $annonce['title'] . "<sub class='bg-success text-white rounded px-1'>noo</sub></h5>";
                        }


                        ?>
                        <p class="card-text"><?= $annonce['description'] ?>...</p>
                        <div class="buttons">
                            <a href="<?= RACINE_SITE ?>explorer.php?annonce=<?= $annonce['id_advert'] ?>" class="btn btn-primary">Revenir aux annonces</a> <?php if ($_SESSION['user']['role'] == 'ROLE_ADMIN') {     ?>
                                <a href="<?= RACINE_SITE ?>admin/dashboard.php?gestionMaisons_php" class="btn btn-primary">Revenir aux gestionaire maison -ADMIN</a>
                            <?php
                                                                                                                                                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 form-group">
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/bg_header.jpg" class="d-block w-100" alt="...">
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                <div class="buttons  ">
                
                    <?php
                    if (isset($_SESSION['user'])) {
                    ?>

                        <form method="POST" action="<?= ($annonce['type'] == 'location') ? 'reservation_traitement.php' : 'panier.php' ?>?annonce=<?= $annonce['id_advert'] ?>">

                            <input type="hidden" name="user_id" value="<?= $_SESSION['user']['id_user'] ?>">
                            <!-- Le reste du formulaire -->
                            <?php if ($_SESSION['user']['role'] == 'ROLE_ADMIN') {     ?>

                                <input type="hidden" name="id_advert" value="<?= $annonce['id_advert'] ?>">

                                <input type="submit" name="action" value="Réserver" class="btn ">

                        </form>
                        <form method="POST">

                            <input type="hidden" name="id_advert" value="<?= $annonce['id_advert'] ?>">

                            <input type="hidden" name="action" value="cancel">

                            <input type="submit" value="Annuler" class="btn btn-secondary">

                        </form>
                        <form method="POST">

                            <input type="hidden" name="id_advert" value="<?= $annonce['id_advert'] ?>">

                            <input type="hidden" name="action" value="delete">

                            <input type="submit" value="Supprimer" class="btn "><?= displaySupTag($_SESSION['user']['role'], $_SESSION['user']) ?>

                        </form>
                        <form method="post" enctype="multipart/form-data">

                            <input type="file" name="image">

                            <button type="submit">Ajouter image</button>

                        </form>
                </div>



            <?php
                            } else {
                                // Formulaire de réservation pour les utilisateurs normaux
            ?>
                                                                                                  <div class="images img">
                   
                </div>
                <h2>Bonjour <?php echo $_SESSION['user']['firstName'] ?></h2>

                <form method="POST" action="reservation_traitement.php">



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