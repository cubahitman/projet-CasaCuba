<?php
$title = "confirmations";
require_once "inc/__header.php";
require_once "inc/__navbar.php";


if (isset($_GET['annonce'])) {

  $id_advert = $_GET['annonce'];
}
// debug($reservations);
$id_utilisateur = $_SESSION['user']['id_user'];
$annonce = showAnonnce($id_advert);

$reservations = showReservations($_SESSION['user']['id_user']);

?>
<main>

  <div class="container  superposerR ">
    <h1 class="text-center">Veuillez confirmer votre requete !</h1>
    <p class="text-center">
      Nous avons bien noté que vous souhaitez annuler votre réservation.<span class=" text-danger"><?= $annonce['title'] ?></span>
      Avant de finaliser cette action, nous tenons à vous rappeler que toute annulation peut entraîner des frais selon nos conditions générales. Si vous avez des questions ou si vous souhaitez discuter d'autres options, n'hésitez pas à contacter notre service client. Si vous êtes sûr de vouloir procéder à l'annulation, veuillez cliquer sur le bouton 'Confirmer l'annulation'.

    </p>
    
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
</main>