<?php
require_once "../inc/funtions.inc.php";
$id_user = $_GET['id_user'];
$user = showUser($id_user);
// debug($user);
// ==================
$info = ''; // Initialisez $info avec une chaîne vide
if (isset($_POST['Modifier'])) {
    debug($_POST);
    $lastName = $_POST['lastName'];

    $firstName = $_POST['firstName'];

    $pseudo = $_POST['pseudo'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $civility = $_POST['civility'];

    $address = $_POST['address'];

    $zipCode = $_POST['zipCode'];

    $city = $_POST['city'];

    $country = $_POST['country'];


    // Mise à jour de l'utilisateur

    updateUser(

        $lastName,

        $firstName,

        $pseudo,

        $email,

        $phone,

        $civility,

        $address,

        $zipCode,

        $city,

        $country

    );
}


$title = "modifier-user";
require_once "../inc/header.inc_copy.php";
?>
<div class="font_encadrage">
    <h1 class="text-center box">Modifier user</h1>

    <?php


    ?>
    <div class="container">
        <form action="" method="post" class="p-3">
            <div class="row mb-3">
                <div class="col-md-6 mb-5">
                    <label for="lastName" class="form-label mb-3">Nom</label>
                    <input type="text" class="form-control fs-5" id="lastName" name="lastName" value=<?php echo $user['lastName']; ?>>
                </div>
                <div class="col-md-6 mb-5">
                    <label for="firstName" class="form-label mb-3">Prénom</label>
                    <input type="text" class="form-control fs-5" id="firstName" name="firstName" value=<?php echo $user['firstName']; ?>>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4 mb-5">
                    <label for="pseudo" class="form-label mb-3">Pseudo</label>
                    <input type="text" class="form-control fs-5" id="pseudo" name="pseudo" value="<?php echo $user['pseudo']; ?>">
                </div>
                <div class="col-md-4 mb-5">
                    <label for="email" class="form-label mb-3">Email</label>
                    <input type="text" class="form-control fs-5" id="email" name="email" placeholder="exemple.email@exemple.com" value="<?= $user['email']; ?>">
                </div>
                <div class="col-md-4 mb-5">
                    <label for="phone" class="form-label mb-3">Téléphone</label>
                    <input type="text" class="form-control fs-5" id="phone" name="phone" value="<?php echo $user['phone']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-10 mb-5">
                    <label class="form-label mb-3">Civilité</label>
                    <select class="form-select fs-5" name="civility">
                        <option value="c" <?php if ($user['civility'] == 'c') echo 'elected'; ?>>choix</option>

                        <option value="h" <?php if ($user['civility'] == 'h') echo 'elected'; ?>>Homme</option>

                        <option value="f" <?php if ($user['civility'] == 'f') echo 'elected'; ?>>Femme</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-8 mb-5">
                    <label for="address" class="form-label mb-3">Adresse</label>
                    <input type="text" class="form-control fs-5" id="address" name="address" value="<?php echo $user['address']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="zipCode" class="form-label mb-3">Code postal</label>
                    <input type="text" class="form-control fs-5" id="zipCode" name="zipCode" value="<?php echo $user['zipCode']; ?>">
                </div>
                <div class="col-md-5">
                    <label for="city" class="form-label mb-3">Ville</label>
                    <input type="text" class="form-control fs-5" id="city" name="city" value="<?php echo $user['city']; ?>">
                </div>
                <div class="col-md-4">
                    <label for="country" class="form-label mb-3">Pays</label>
                    <input type="text" class="form-control fs-5" id="country" name="country" value="<?php echo $user['country']; ?>">
                </div>
            </div>
            <div class=" my-5">
                <button class="w-25 m-auto btn " type="submit">Modifier</button>
                <!-- <p class="text-center mt-5">Vous avez déjà un compte ! <a href="authentification.php" class="text-danger">Connectez-vous ici</a></p> -->
            </div>
        </form></span>
    </div>