<?php
// $films = array();

$title = "Accueil";
require_once "inc/header.inc.php";





?>

<main>
    <div class="block-pen">
        <section class="container">
            <ul class='slider'>
                <li class='item' style="background-image: url('assets/img/playaguardalavaca.JPG')">

                    <div class='content'>
                        <h2 class='title'>"Lossless Youths"</h2>
                        <p class='description'> Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                            praesentium nisi. Id laboriosam ipsam enim. </p>
                        <button>Read More</button>
                    </div>
                </li>
                <li class='item' style="background-image: url('assets/img/playa.jpg')">
                    <div class='content'>
                        <h2 class='title'> Un paradis tropical aux multiples facettes</h2>
                        <p class='description'> Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                            praesentium nisi. Id laboriosam ipsam enim. </p>
                        <button>Voire plus</button>
                    </div>
                </li>
                <li class='item' style="background-image: url('assets/img/espectaculo-en-el-cabaret.jpg')">
                    <div class='content'>
                        <h2 class='title'>"The Gate Keeper"</h2>
                        <p class='description'> Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                            praesentium nisi. Id laboriosam ipsam enim. </p>
                        <button>Voire plus</button>
                    </div>
                </li>
                <li class='item' style="background-image: url('assets/img/cienfuegos.jpg')">
                    <div class='content'>
                        <h2 class='title'>"CIENFUEGOS"</h2>
                        <p class='description'>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis inventore praesentium nisi. Id laboriosam ipsam enim.
                        </p>
                        <button>Voire plus</button>
                    </div>
                </li>
                <li class='item' style="background-image: url('assets/img/istockphoto-1093639450-612x612.jpg')">
                    <div class='content'>
                        <h2 class='title'>"VARADERO"</h2>
                        <p class='description'>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis inventore praesentium nisi. Id laboriosam ipsam enim.
                        </p>
                        <button>Voire plus</button>
                    </div>
                </li>
                <li class='item' style="background-image: url('assets/img/toomas-tartes-ME72-VPJH2I-unsplash.jpg')">
                    <div class='content'>
                        <h2 class='title'>"The Migration"</h2>
                        <p class='description'> Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                            praesentium nisi. Id laboriosam ipsam enim. </p>
                        <button>Voire plus</button>
                    </div>
                </li>
            </ul>
            <nav class='nav'>
                <ion-icon class='btn next' name="arrow-back-outline"></ion-icon>
                <ion-icon class='btn prev' name="arrow-forward-outline"></ion-icon>
            </nav>
        </section>

    </div>
    <section class="pub">
        <div class=" mx-5">

            <h3 class=" emplacement">Emplacements priseé</h3>

            <div class="card mb-3 " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4  md-mt-5">
                        <img src="assets/img/premium_photo-1661859256790-5ead8d1a3d6f.avif" class="img-fluid rounded-start h-100 " alt="image couple contemple paysage">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="populars ">
        <div class="mx-5">
            <h3 class=" emplacement">Populaires</h3>
            <div class="row mx-auto text-center">
                <div class="col-3 "><a href="#"><img src="assets/img/femmeBalance.png" class="rounded-4" alt="Femme dans une balançoire à la plage.">image</a></div>
                <div class="col-3"><a href="#"><img src="assets/img/havane.png" class="rounded-4" alt="image de la havane">image</a><a href="#"><img src="assets/img/santiago.jpeg" class="rounded-4" alt="image de santiago"></a></div>
                <div class="col-3"><a href="#"><img src="assets/img/vinallesLink.jpeg" class="rounded-4" alt="image de viñales">image</a></a></div>
                <div class="col-3"><a href="#"><img src="assets/img/trinidadLink.jpeg" class="rounded-4" alt="image de trinidad Cuba">image</a><img src="assets/img/cienfuegosLink.jpeg" class="rounded-4" </div>

                </div>

    </section>
</main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>




<?php
require_once "inc/footer.inc.php";


?>