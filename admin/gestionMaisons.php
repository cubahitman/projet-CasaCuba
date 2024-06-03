<?php
require_once "../inc/funtions.inc.php";
$annonces = annoncesByType();

// ==================
$info = ''; // Initialisez $info avec une chaîne vide
////////////////////////////////////////////////////
// GestionMaison.php:

if (!empty($_POST)) // l'envoi du Formulaire  
{
    // debug($_POST);


    $verif = true;

    foreach ($_POST as $value) {
        // debug($_POST);

        if (empty($value)) {

            $verif = false;
        }
    }

    if (isset($_FILES['photo'])) {
        $photo_info = $_FILES['photo'];
        // Vous pouvez maintenant manipuler le fichier téléchargé, par exemple, le déplacer dans un répertoire de stockage.
        // debug($_FILES);
        // debug($photo_info);
    }

    if (!$verif) {

        // debug($_POST);

        $info = alert("Veuillez renseigner tout les champs", "danger");
    } else {


        // debug($_POST);

        // $photo = isset($_POST['photo']) ? $_POST['photo'] : null;
        $photo = $_FILES['photo']['name'];
        $title = isset($_POST['title']) ? $_POST['title'] : null;
        $description = isset($_POST['description']) ? $_POST['description'] : null;
        $postal_code  = isset($_POST['postal_code']) ? $_POST['postal_code'] : null;
        $city  = isset($_POST['city']) ? $_POST['city'] : null;
        $type = isset($_POST['type']) ? $_POST['type'] : null;
        $price = isset($_POST['price']) ? $_POST['price'] : null;


        // move_uploaded_file($_FILES['photo']['tmp_name'],  RACINE_SITE . "assets/img/" . $photo);
        move_uploaded_file($_FILES['photo']['tmp_name'], '../assets/img/' . $photo);
        // }
        addAnnonce($photo, $title, $description,  $postal_code,  $city,  $type,  $price);
        header('location: ' . RACINE_SITE . 'admin/dashboard.php?gestionMaisons_php');
    }
}
ob_end_flush();
// debug($_POST);
// else {
//   debug($_POST);
//   echo 'Non SUBMIT';
// }



$title = "gestionMaison";
require_once "../inc/navHeader.inc.php";
?>

<main class="">
    <div class="row">
        <section class="index-img  container p-3 text-center w-50 col-lg-4 col-md-6 col-sm-12 ">
            <h2 class="mb-5 bg-capitoliounuit">Gestionaire maison</h2>
            <div class="row " style="max-height: 900px; overflow-y: auto;">

                <?php
                foreach ($annonces as $annonce) {
                ?>
                    <div class="col-xxl-4 col-lg-6 col-md-12 mb-4 ">

                        <div class="card  ">
                            <img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top" alt=". $annonce['description'] <?= $annonce['title'] ?>" style="height: 200px; width: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?= displayAdvertAnnonce($annonce); ?></h5>
                                <p class="card-text"><?= substr($annonce['description'], 0, 100) ?>...</p>
                                <a href="<?= RACINE_SITE ?>showAnnonce.php?annonce=<?= $annonce['id_advert'] ?>" class="btn btn-primary">Voir l'annonce</a><sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= $annonce['id_advert'] ?></sup>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>



        <!-- Formulaire  -->
        <section class="  p-3 col-lg-4 col-md-6 col-sm-12 m-4 bg-capitoliounuit ">
            <h2 class="text-center">Ajouter un annonce</h2>
            <form action="" method="post" enctype="multipart/form-data" class="container mt-4">
                <div class="form-group">
                    <label for="photo">Photo :</label>
                    <input type="file" id="photo" name="photo" class="form-control">
                </div>

                <div class="form-group">
                    <label for="title">Titre :</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea id="description" name="description" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="postal_code">Code Postal :</label>
                    <input type="text" id="postal_code" name="postal_code" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="city">Ville :</label>
                    <input type="text" id="city" name="city" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="type">Type :</label>
                    <select id="type" name="type" class="form-control" required>
                        <option value="achat">Achat</option>
                        <option value="location">Location</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="price">Prix :</label>
                    <input type="number" id="price" name="price" step="0.01" class="form-control" required>
                </div>
                <!-- 
            <div class="form-group">
                <label for="reservation_message">Message de Réservation :</label>
                <textarea id="reservation_message" name="reservation_message" class="form-control" required></textarea>
            </div> -->

                <button type="submit" class="btn btn-primary mt-3">Soumettre</button>
            </form>

        </section></span>
</main>
<?php
require_once "../inc/footer.inc.php";
?>