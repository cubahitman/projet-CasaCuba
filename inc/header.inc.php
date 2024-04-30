<?php
require_once "funtions.inc.php";


// déconnexion ($_SESSION)
// logOut();


// $categories =  allCategories();
?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="#" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= RACINE_SITE ?>assets/css/style.css">
    <title><?= $title ?></title>
</head>
<header>
    <div class="navbar">
        <div class="logo">

            <a href="#">CasaCuba</a>
        </div>
        <ul class="links mt-3">
            <li><a href="<?= RACINE_SITE ?>index.php">Accueil</a></li>
            <li><a href="<?= RACINE_SITE ?>explorer.php">Explorer</a></li>
            <li><a href="<?= RACINE_SITE ?>a_propos.php">À propos</a></li>
            <li><a href="<?= RACINE_SITE ?>populaires.php">Populaires</a></li>
            <li><a href="<?= RACINE_SITE ?>contact.php">contact</a></li>
        </ul>
        <div class="buttons">
            <a href="#" class="action-button pro">Espace Pro</a>

            <li class="nav-item dropdown">
                <button class="action-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Connexion
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="<?= RACINE_SITE ?>profil.php">Connexion</a></li>
                    <li><a class="dropdown-item" href="<?= RACINE_SITE ?>register.php"">Inscriptions</a></li>

                </ul>
            </li>

        </div>
        <div class=" burger-menu-button">
                            <i class="fa-solid fa-bars"></i>
        </div>
    </div>

    <div class="burquer-menu ">
        <ul class="links">
            <li><a href="<?= RACINE_SITE ?>index.php">Accueil</a></li>
            <li><a href="<?= RACINE_SITE ?>explorer.php">Explorer</a></li>
            <li><a href="<?= RACINE_SITE ?>a_propos.php">À propos</a></li>
            <li><a href="<?= RACINE_SITE ?>populaires.php">Populaires</a></li>
            <li><a href="<?= RACINE_SITE ?>contact.php">contact</a></li>
            <div class="divider"></div>
            <div class="buttons-burger-menu">
                <a href="#" class="action-button pro">Espace Pro</a>

                <button class="action-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Connexion
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item " href="<?= RACINE_SITE ?>profil.php"">Connexion</a></li>

                    <li><a class=" dropdown-item" href="<?= RACINE_SITE ?>register.php">Inscriptions</a></li>
                </ul>

            </div>
        </ul>
    </div>
</header>

<body>