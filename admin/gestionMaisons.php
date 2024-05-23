<?php



require_once "../inc/funtions.inc.php";


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


$title = "enregistrement";
require_once "../inc/header.inc.php";
?>

<main class="bg-register">



    <!-- Image d'en-tête contactez-nous -->
    <div class="affiche-inscription">
        ///////////////////////////////////
        <div class=" text-center text-white col-sm-12">
            <h1 class="titre-3 display-3">Ajouter annonces</h1>
            <div class="icon-hand"><i class="bi bi-hand-index-fill"></i></div>

        </div>
    </div>
    <div class=" m-0"><?= $info; ?></div>
    <!-- Formulaire de contact -->
    <section class="ecrivez-nous p-5">
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

    </section>
</main>
<?php
require_once "../inc/footer.inc.php";
?>