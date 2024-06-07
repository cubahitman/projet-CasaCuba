<?php
$title = "confirmations";
require_once "inc/__header.php";
require_once "inc/__navbar.php";

$id_advert = $_GET['annonce'];
$id_utilisateur = $_SESSION['user']['id_user'];
$annonce = showAnonnce($id_advert);
if (isset($_POST)) {
  # code...
}
?>

<main>

  <div class="container  superposerR ">

    <h1 class="text-center ">Veuillez confirmer votre requete !</h1>
    <p class="text-center">
      Nous avons bien noté que vous souhaitez réserver l'annonce <?= $annonce['title'] ?>. Votre réservation a été prise en compte avec succès.
    </p>

    <p class="text-center">
      Vous pouvez maintenant retourner à la page d'accueil ou consulter les autres annonces.
    </p>

    <a href="#" class="btn btn-primary">Anulation</a>
    <a href="#" class="btn btn-primary">Modifications</a>

  </div>

</main>