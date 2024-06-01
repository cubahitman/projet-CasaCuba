<?php
$title = "Accueil";
require_once "inc/__header.php";
require_once "inc/__navbar.php";





$id_advert = $_GET['annonce'];
$id_utilisateur = $_POST['user_id'];
$annonce = showAnonnce($id_advert);
?>






<!DOCTYPE html>
<html lang="en">



<body>

    <body>
        <div class="container">

            <h1 class="text-center">Réserver une annonce</h1>


            <form method="POST" action="reservation_traitement.php">

                <input type="hidden" name="id_annonce" value="<?= $annonce['id_advert'] ?>">


                <div class="form-group">

                    <label for="id_utilisateur">ID Utilisateur :</label>

                    <input type="hidden" id="id_utilisateur" name="id_utilisateur" value="<?= $_SESSION['user']['id_user']; ?>">



                </div>


                <div class="form-group">

                    <label for="date_debut">Date de début :</label>

                    <input type="date" id="date_debut" name="date_debut" class="form-control" required>

                </div>


                <div class="form-group">

                    <label for="date_fin">Date de fin :</label>

                    <input type="date" id="date_fin" name="date_fin" class="form-control" required>

                </div>


                <div class="form-group">

                    <label for="message">Message :</label>

                    <textarea id="message" name="message" class="form-control" rows="4" required></textarea>

                </div>


                <button type="submit" name="action" class="btn btn-primary btn-block">Réserver</button>

            </form>

        </div>
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

    </body>


</html>