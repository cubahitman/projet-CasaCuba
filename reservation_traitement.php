<?php
$title = "Accueil";
require_once "inc/__header.php";
require_once "inc/__navbar.php";


// Vérification si l'utilisateur est connecté

// if (!isset($_SESSION['user_id'])) {

//     header('Location: authentification.php');
//       exit;
//     }
// Vérification si l'ID de l'annonce est présent

//   if (!isset($_GET['id_annonce']) || empty($_GET['id_annonce'])) {
//       header('Location: annonces.php');
//       exit;
//     }




if (isset($_GET['annonce'])) {

    $id_advert = $_GET['annonce'];
}

$id_utilisateur = $_SESSION['user']['id_user'];
$annonce = showAnonnce($id_advert);
// debug($id_advert);
// debug($id_utilisateur);
// debug($annonce);




// if (isset($_POST['reserver'])) {

if (!empty($_POST)) {
    if (isset($_POST['form_name']) && $_POST['form_name'] == 'reservation_form') {

        // code pour traiter la réservation


        $id_annonce = $_POST['id_annonce'];

        $id_utilisateur = $_SESSION['user']['id_user'];

        $date_arrivee = $_POST['date_arrivee'];

        $date_depart = $_POST['date_depart'];

        $nombre_personnes = $_POST['nombre_personnes'];

        error_reporting(E_ALL);
        // Appel de la fonction pour entrer la réservation
        try {
            entreReservation($id_annonce, $id_utilisateur, $date_arrivee, $date_depart, $nombre_personnes);
        } catch (PDOException $e) {


            echo 'Erreur PDO : ' . $e->getMessage();

            $errorInfo = $pdo->errorInfo();

            print_r($errorInfo);
            error_log("Erreur lors de la réservation : " . $e->getMessage() . "\n", 3, "erreur.log");

            echo "Erreur lors de la réservation";
        }

        // Redirection vers une page de confirmation

        header('Location: confirmation.php');

        exit;
    }
}
?>







<main>

    <div class="container superposerR ">


        <h1 class="text-center">Réserver une annonce</h1>
        <h2>Bonjour <?php echo $_SESSION['user']['firstName'] ?></h2>

        <form method="POST" action="reservation_traitement.php">


            <input type="hidden" name="id_annonce" value="<?= $annonce['id_advert'] ?>">


            <div class="form-group">

                <label for="id_utilisateur"><?= $_SESSION['user']['id_user'] ?></label>

                <input type="hidden" id="id_utilisateur" name="id_utilisateur" value="<?= $_SESSION['user']['id_user']; ?>">

            </div>


            <div class="form-group">

                <label for="date_arrivee">Date d'arrivée :</label>

                <input type="date" id="date_arrivee" name="date_arrivee" class="form-control" required>

            </div>


            <div class="form-group">

                <label for="date_depart">Date de départ :</label>

                <input type="date" id="date_depart" name="date_depart" class="form-control" required>

            </div>


            <div class="form-group">

                <label for="nombre_personnes">Nombre de personnes :</label>

                <input type="number" id="nombre_personnes" name="nombre_personnes" class="form-control" required>

            </div>

            <input type="hidden" name="form_name" value="reservation_form">

            <button type="submit" name="action" class="btn btn-primary btn-block" value="confirmer">Réserver</button>

            <div class="buttons ">
                <div class="card1  ">

                    <img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top" alt="image de <?= $annonce['title']  ?>">
                    <div class="">
                        <?php if ($annonce['is_reserved']) {
                            echo "<h5 class='card-title'>" . $annonce['title'] . " <sub class='bg-danger text-white rounded px-1'>Réservé</sub></h5>";
                        } else {
                            echo "<h5 class='card-title'>" . $annonce['title'] . "</h5>";
                        } ?>
                        <p class="card-text"><?= substr($annonce['description'], 0, 100) ?>...</p>

                    </div>
                </div>
                <div>
                    <h2 class="text-center ">Reservation pour l'annonce <span class=" text-danger"><?= $annonce['title'] ?></span></h2>
                   
                </div>
            </div>

        </form>



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




</html>