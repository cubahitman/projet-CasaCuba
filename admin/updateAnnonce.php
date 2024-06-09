<?php
require_once "../inc/funtions.inc.php";

$annonce = showAnonnce($_GET['id_annonce']);

$info = ''; 
if (!empty($_POST)) // l'envoi du Formulaire  
{
    $verif = true;
    foreach ($_POST as $value) {
        if (empty($value)) {
            $verif = false;
        }
    }

    if (isset($_FILES['photo'])) {
        $photo_info = $_FILES['photo'];
    }
    if (!empty($_POST['old_file'])) {
        $oldFileName = $_POST['old_file'];
    }

    if (!$verif) {
        $info = alert("Veuillez renseigner tout les champs", "danger");
    } 
    else {
        
        $title = isset($_POST['title']) ? $_POST['title'] : null;
        $description = isset($_POST['description']) ? $_POST['description'] : null;
        $postal_code  = isset($_POST['postal_code']) ? $_POST['postal_code'] : null;
        $city  = isset($_POST['city']) ? $_POST['city'] : null;
        $type = isset($_POST['type']) ? $_POST['type'] : null;
        $price = isset($_POST['price']) ? $_POST['price'] : null;

        // move_uploaded_file($_FILES['photo']['tmp_name'],  RACINE_SITE . "assets/img/" . $photo);
        if(!empty($_FILES['photo']) && !empty($_FILES['photo']['name'])) {
            $photo = $_FILES['photo']['name'];
            move_uploaded_file($_FILES['photo']['tmp_name'], '../assets/img/' . $photo);           
        }
        else{
            $photo = $annonce['photo'];
        }
        // }
        updateAdvert( $annonce['id_advert'], $photo, $title, $description,  $postal_code,  $city,  $type,  $price);
        header('location: ' . RACINE_SITE . 'admin/dashboard.php?gestionAnnonce_php');
    }
}
ob_end_flush();



$title = "gestionMaison";
require_once "../inc/navHeader.inc.php";
?>

<main class="">
    <div class="row">
      <!-- Formulaire  -->
        <section class="  p-3 col-lg-12 col-md-12 col-sm-12 m-4 bg-capitoliounuit ">
            <h2 class="text-center">Ajouter un annonce</h2>
            <form action="" method="post" enctype="multipart/form-data" class="container mt-4">
                <div class="form-group">
                    <label for="photo">Photo :</label>
                    <input type="file" id="photo" name="photo" class="form-control"  value="<?= $annonce['photo'] ?>">
                </div>

                <div class="form-group">
                    <label for="title">Titre :</label>
                    <input type="text" id="title" name="title" class="form-control" value="<?= $annonce['title'] ?>" required >
                </div>

                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea id="description" name="description" class="form-control"  required><?= $annonce['description'] ?></textarea>
                </div>

                <div class="form-group">
                    <label for="postal_code">Code Postal :</label>
                    <input type="text" id="postal_code" name="postal_code" value="<?= $annonce['postal_code'] ?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="city">Ville :</label>
                    <input type="text" id="city" name="city" class="form-control" value="<?= $annonce['city'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="type">Type :</label>
                    <select id="type" name="type" class="form-control" required>
                        <?php if($annonce['type'] == 'location') { ?>
                        <option value="achat">Achat</option>
                        <option value="location" selected>Location</option>
                        <?php } else { ?>
                        <option value="achat" selected>Achat</option>
                        <option value="location">Location</option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="price">Prix :</label>
                    <input type="number" id="price" name="price" step="0.01" class="form-control" value="<?= $annonce['price'] ?>" required>
                </div>
                <!-- 
            <div class="form-group">
                <label for="reservation_message">Message de Réservation :</label>
                <textarea id="reservation_message" name="reservation_message" class="form-control" required></textarea>
            </div> -->

                <button type="submit" class="btn btn-primary mt-3">Mettre a jour</button>
            </form>

        </section></span>
</main>
<?php
require_once "../inc/footer.inc.php";
?>