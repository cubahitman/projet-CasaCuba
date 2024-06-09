<?php
// $films = array();





$title = "Panier";
require_once "inc/header.inc_copy.php";






$annonces = annoncesByType();
?>

    

<main class="superposerR bg-Business ">

    <section >

        <div class=" container  text-center   ">


            <!-- Section "WHO WE ARE" -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="assets/images/academy-brand-med.png" class="mt-5" alt="">
                        <h2 class="red mt-5 trait">WHO WE ARE


                        </h2>
                        <p class="mt-5">We are <span class="red ">MASSIVE Academy.</span> We aim to improve
                            education through both methods -effective project-based learning - and material - by
                            teaching
                            skills that are applicatble to improving your life today.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class=" container m-5 text-center">
        <div class="row">
            <?php
            foreach ($annonces as $annonce) {
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card1   ">
                        <img src="<?= RACINE_SITE . "assets/img/" . $annonce['photo'] ?>" class="card-img-top " alt="image de <?= $annonce['title'] ?>" style="height: 200px; width: 100%; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $annonce['title'] ?></h5>
                            <p class="card-text"><?= substr($annonce['description'], 0, 100) ?>...</p>
                            <a href="<?= RACINE_SITE ?>showAnnonce.php?annonce=<?= $annonce['id_advert'] ?>" class="btn btn-primary hoverCart">Voir l'annonce</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section> -->






</main>

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




</html>