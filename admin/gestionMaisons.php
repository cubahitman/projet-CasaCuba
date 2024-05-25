<?php



require_once "../inc/funtions.inc.php";
$annonces = allAnnonces();

// ==================
$info = ''; // Initialisez $info avec une chaîne vide


if (!empty($_POST)) // l'envoi du Formulaire (button "S'inscrire" ) 
{
    // debug($_POST);


    $verif = true;

    foreach ($_POST as $value) {


        if (empty($value)) {

            $verif = false;
        }
    }

    if (isset($_FILES['photo'])) {
        $photo_info = $_FILES['photo'];
        // Vous pouvez maintenant manipuler le fichier téléchargé, par exemple, le déplacer dans un répertoire de stockage.
        // debug($_FILES);
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

        // $reservation_message = isset($_POST['reservation_message']) ? $_POST['reservation_message'] : null;

        // if ($_GET['action'] == "update") {
        //     addAnnonce($photo, $title, $description,  $postal_code,  $city,  $type,  $price);
        move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/img/' . $photo);
        // }
        addAnnonce($photo, $title, $description,  $postal_code,  $city,  $type,  $price);
    }
    header('Location: index.php');
    exit;
}
// else {
//   debug($_POST);
//   echo 'Non SUBMIT';
// }


// $title = "enregistrement";

?>

<main class="bg-admin">
    <div class="row">
        <section class="index-img container m-5 text-center w-50 col" style="max-height: 800px; overflow-y: auto;">
            <div class="row">
                <?php
                foreach ($annonces as $annonce) {
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card">
                            <img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top" alt="image de <?= $annonce['title'] ?>" style="height: 200px; width: 100%; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?= displayAdvertAnnonce($annonce); ?></h5>
                                <p class="card-text"><?= substr($annonce['description'], 0, 100) ?>...</p>
                                <a href="<?= RACINE_SITE ?>showAnnonce.php?annonce=<?= $annonce['id_advert'] ?>" class="btn btn-primary">Voir l'annonce</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>



        <!-- Formulaire  -->
        <section class="ecrivez-nous p-5 col">
            <form method="post" enctype="multipart/form-data" class="container mt-4">
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