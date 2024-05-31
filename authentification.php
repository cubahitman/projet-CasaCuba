<?php

require_once "inc/funtions.inc.php";
echo '<br>
<br>
<br>
<br>
<br>';

$info = '';

if (!empty($_POST)) {
    // debug($_POST);

    $verif = true;

    foreach ($_POST as $value) {


        if (empty($value)) {

            $verif = false;
        }
    }

    if (!$verif) {
        // debug($_POST);


        $info = alert("Veuillez renseigner tout les champs", "danger");
    } else {

        // debug($_POST);
        $pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $mdp = isset($_POST['mdp']) ? $_POST['mdp'] : null;

        $user = checkUser($email, $pseudo);
        // debug($user);

        if ($user) {

            if (password_verify($mdp, $user['mdp'])) {

                $_SESSION['user'] = $user;

                header("location:" . RACINE_SITE . "profil.php");
            } else {
                $info = alert("Les identifiants sont incorrectes", "danger");
            }
        }

        // } else {
        //     $info = alert("Les identifiants sont incorrectes", "danger");


        // }





    }
}

$title = "Authentification";
require_once "inc/header.inc.php";
?>



<main class="  font_encadrage ">

    <div class=" container fs-5  ">
        <h2 class=" text-center ">Connexion</h2>

        <?php

        echo $info;

        ?>

        <form method="post" class="box">
            <div class="row">
                <div class="col-6 mb-5">
                    <label for="pseudo" class="form-label mb-3">Pseudo</label>
                    <input type="text" class="form-control fs-5 w-100 fs-5" id="pseudo" name="pseudo">
                </div>
                <div class="col-6 mb-5">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control fs-5 w-100 fs-5" id="email" name="email" placeholder="exemple.email@exemple.com">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-5">
                    <label for="mdp" class="form-label fs-5 mb-3">Mot de passe</label>
                    <input type="password" class="form-control fs-5 mb-3" id="mdp" name="mdp">
                    <input type="checkbox" onclick="showPass()"> <span class="text-danger">Afficher/masquer le mot de passe</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ">
                    <button class="btn btn-danger btn-lg  w-100" type="submit">Se connecter</button>
                    <p class="mt-5">Vous n'avez pas encore de compte ! <a href="register.php" class=" text-danger">créer un compte ici</a></p>
                </div>
            </div>
        </form>

    </div>


</main>






<?php
require_once "inc/footer.inc.php";

?>