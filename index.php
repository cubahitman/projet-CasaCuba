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
                        <h2 class='title'>"Estrange Bond"</h2>
                        <p class='description'> Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                            praesentium nisi. Id laboriosam ipsam enim. </p>
                        <button>Read More</button>
                    </div>
                </li>
                <li class='item' style="background-image: url('assets/img/espectaculo-en-el-cabaret.jpg')">
                    <div class='content'>
                        <h2 class='title'>"The Gate Keeper"</h2>
                        <p class='description'> Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                            praesentium nisi. Id laboriosam ipsam enim. </p>
                        <button>Read More</button>
                    </div>
                </li>
                <li class='item' style="background-image: url('assets/img/cienfuegos.jpg')">
                    <div class='content'>
                        <h2 class='title'>"Last Trace Of Us"</h2>
                        <p class='description'>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis inventore praesentium nisi. Id laboriosam ipsam enim.
                        </p>
                        <button>Read More</button>
                    </div>
                </li>
                <li class='item' style="background-image: url('assets/img/istockphoto-1093639450-612x612.jpg')">
                    <div class='content'>
                        <h2 class='title'>"Urban Decay"</h2>
                        <p class='description'>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis inventore praesentium nisi. Id laboriosam ipsam enim.
                        </p>
                        <button>Read More</button>
                    </div>
                </li>
                <li class='item' style="background-image: url('assets/img/toomas-tartes-ME72-VPJH2I-unsplash.jpg')">
                    <div class='content'>
                        <h2 class='title'>"The Migration"</h2>
                        <p class='description'> Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
                            praesentium nisi. Id laboriosam ipsam enim. </p>
                        <button>Read More</button>
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
    <section class="main">
        <div class="row p-5 cartas">
            <div class="col-3">
                <div class="card text-bg-dark">
                    <img src="assets/img/femmeBalance.png" class="card-img" alt="Femme dans une balançoire à la plage...">
                    <div class="card-img-overlay">
                        <button type="button" class="btn btn-dark">Dark</button>


                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card text-bg-dark cartas">
                    <img src="assets/img/havane.png" class="card-img" alt="La havana">
                    <div class="card-img-overlay">
                        <button type="button" class="btn btn-dark">Dark</button>
                    </div>
                    <div class="card text-bg-dark cartas mt-3">
                        <img src="assets/img/santiago.jpeg" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <button type="button" class="btn btn-dark">Dark</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card text-bg-dark cartas">
                    <img src="assets/img/vinallesLink.jpeg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <button type="button" class="btn btn-dark">Dark</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card text-bg-dark cartas">
                    <img src="assets/img/trinidadLink.jpeg" class="card-img" alt="Paysage de viñales">
                    <div class="card-img-overlay">
                        <button type="button" class="btn btn-dark">Dark</button>
                    </div>
                </div>
                <div class="card text-bg-dark cartas">
                    <img src="assets/img/cienfuegosLink.jpeg" class="card-img mt-3" alt="...">
                    <div class="card-img-overlay">
                        <button type="button" class="btn btn-dark">Dark</button>
                    </div>
                </div>
            </div>

        </div>

    </section>
</main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>




<?php
require_once "inc/footer.inc.php";


?>