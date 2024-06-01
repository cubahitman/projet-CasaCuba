<?php

require_once "inc/__header.php";
?>

<div class="nav-resp ">
    <header class="header-navresp">
        <div class="navbar-resp">
            <div class="logo">
                <a class="navbar-brand  " href="index.php"><img src="assets/images/CUBA(3).png" alt="Mon Logo" style="height: 100%;"> Cubabuy</a>
            </div>
            <ul class="links">
                <li><a href="<?= RACINE_SITE ?>annoceLocation.php">LOCATIONS</a></li>
                <li><a href="<?= RACINE_SITE ?>annonceVente.php">VENTES</a></li>
                <li><a href="<?= RACINE_SITE ?>explorer.php">Explorer</a></li>

                <li><a href="<?= RACINE_SITE ?>contact.php">Contact</a></li>
            </ul>
            <div class="buttons">
                <a href="#" class="action-button pro">Espace Pro</a>
                <a href="#" class="action-button">Se connecter</a>
            </div>
            <div class="burger-menu-button">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="burquer-menu ">
            <ul class="links">

                <li><a href="<?= RACINE_SITE ?>annoceLocation.php">LOCATIONS</a></li>
                <li><a href="<?= RACINE_SITE ?>annonceVente.php">VENTES</a></li>
                <li><a href="<?= RACINE_SITE ?>explorer.php">Explorer</a></li>

                <li><a href="<?= RACINE_SITE ?>contact.php">Contact</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <?php if (isset($_SESSION['user'])) { ?>
                            <sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= $_SESSION['user']['firstName'] ?></sup>
                        <?php    } ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= RACINE_SITE ?>profil.php">Connexion</a></li>
                        <li><a class="dropdown-item" href="<?= RACINE_SITE ?>register.php">Inscriptions</a></li>
                    </ul>
                </li>
                <li class="espace-pro ">
                    <a href="<?= RACINE_SITE ?>admin/dashboard.php" class="action-button btn ">Espace Pro</a>
                    <?php if (empty($_SESSION['user'])) { ?>
                <li class="nav-item dropdown">
                    <a class="action-button btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Connexion
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="<?= RACINE_SITE ?>profil.php">Connexion</a></li>
                        <li><a class="dropdown-item" href="<?= RACINE_SITE ?>contact.php?contact_pro">Contact Pro</a></li>


                    </ul>
                </li>
            <?php } else { ?>
                <li><a href=" ?action=deconnexion" class="action-button btn ">Deconnexion</a></li>
            <?php } ?>
            </li>

            </ul>
        </div>
</div>

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