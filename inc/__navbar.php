<?php

require_once "inc/__header.php";
logOut();
?>

<body>
    <div>
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
                    <li><a href="<?= RACINE_SITE ?>profil.php">Profil</a><sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= $_SESSION['user']['firstName'] ?></sup></li>
                    </a>
                </ul>
                <div class="buttons">
                    <a href="#" class="action-button pro">Espace Pro</a>

                    <a href="?action=deconnexion" class="action-button">Deconnexion</a>
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