<?php
$title = "confirmations";
require_once "inc/__header.php";
require_once "inc/__navbar.php";


$id_advert = $_GET['annonce'];
$id_utilisateur = $_SESSION['user']['id_user'];
$annonce = showAnonnce($id_advert);
// debug($id_advert);
// debug($id_utilisateur);
// debug($annonce);


if (isset($_GET['annonce'])) {

    $id_advert = $_GET['annonce'];
} 


?>
<header  class="">
<div  class="container  superposerR ">
	<br> <br>
	<h1 class="text-center ">Veuillez confirmer votre requete !</h1>
	<p class="text-center">
  Nous avons bien noté que vous souhaitez annuler votre réservation. Avant de finaliser cette action, nous tenons à vous rappeler que toute annulation peut entraîner des frais selon nos conditions générales. Si vous avez des questions ou si vous souhaitez discuter d'autres options, n'hésitez pas à contacter notre service client. Si vous êtes sûr de vouloir procéder à l'annulation, veuillez cliquer sur le bouton 'Confirmer l'annulation'.

	</p>

  <body >
 <section>
  
  <h1>This is a heading.</h1>
  <h3>This is another heading.</h3>
  <p id="one">This is a paragraph.</p>
    <ul>
      <li>This</li>
      <li>Is</li>
      <li>A</li>
      <li>List.</li>
    </ul>
  <p id="two">This is another paragraph with a <a href="#">link</a> in it.</p>
 
  </span>
  </body>
</div>

</header>