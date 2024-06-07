<?php
require_once "funtions.inc.php";


logOut(); // déconnexion ($_SESSION)
ob_start(); // Active le tampon de sortie

?>







<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez notre sélection de maisons à vendre à Cuba. Que vous cherchiez une maison de ville, une villa de luxe ou une maison de campagne, nous avons ce qu'il vous faut. Parcourez nos annonces immobilières dès aujourd'hui et trouvez la maison de vos rêves à Cuba.">
    <meta name="author" content="Roberto Quesada Rad">

    <title><?= $title ?></title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>


<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom bg-bleuNav">
    <div class="nav-css ">
        <div class="navbar-header ">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand  " href="index.php"><img src="assets/images/CUBA(3).png" alt="Mon Logo" style="height: 100%;"> Cubabuy</a>
        </div>
        <div class="a navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">

                <li><a href="<?= RACINE_SITE ?>annoceLocation.php">LOCATIONS</a></li>
                <li><a href="<?= RACINE_SITE ?>annonceVente.php">VENTES</a></li>
                <li><a href="<?= RACINE_SITE ?>explorer.php">Explorer</a></li>

                <li><a href="<?= RACINE_SITE ?>contact.php">Contact</a></li>

                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil

                        <?php if (isset($_SESSION['user'])) { ?>

                            <sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= $_SESSION['user']['firstName'] ?></sup>

                        <?php } ?>

                        <b class="caret"></b>

                    </a>

                    <ul class="dropdown-menu">

                        <?php if (isset($_SESSION['user'])) { ?>

                            <li><a class="dropdown-item" href="<?= RACINE_SITE ?>profil.php">Mon compte</a></li>

                        <?php } else { ?>

                            <li><a class="dropdown-item" href="<?= RACINE_SITE ?>authentification.php">Connexion</a></li>

                            <li><a class="dropdown-item" href="<?= RACINE_SITE ?>register.php">Inscriptions</a></li>

                        <?php } ?>

                    </ul>

                </li>
                <li class="espace-pro ">
                    <a href="<?= RACINE_SITE ?>admin/dashboard.php" class=" btn ">Espace Pro</a>
                    <?php if (empty($_SESSION['user'])) { ?>
                <li class="nav-item dropdown">
                    <a class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Connexion
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="<?= RACINE_SITE ?>profil.php">Connexion</a></li>
                        <li><a class="dropdown-item" href="<?= RACINE_SITE ?>contact.php?contact_pro">Contact Pro</a></li>


                    </ul>
                </li>
            <?php } else { ?>
                <li><a href=" ?action=deconnexion" class=" btn ">Deconnexion</a></li>
            <?php } ?>
            </li>
            <li><a href="panier.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                    </svg>
                    Panier
                </a></li>


            </ul>

        </div><!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->
<!-- Header -->
<?php
$current_page = basename($_SERVER['REQUEST_URI']);
if (!in_array($current_page, array('authentification.php', 'contact.php', 'annoceLocation.php', 'annonceVente.php', 'profil.php', 'register.php', 'explorer.php'))) { ?>
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">DESTINATION, RAFFINEMENT, INSPIRATION</h1>
                <p class="tagline">Votre portail pour les maisons de rêve à Cuba </p>
                <p><a href="<?= RACINE_SITE ?>a_propos.php" class="btn btn-default btn-lg" role="button">INFORMATIONS</a> <a href="<?= RACINE_SITE ?>register.php" class="btn btn-action btn-lg" role="button">INSCRIVEZ-VOUS MAINTENANT</a></p>
            </div>
        </div>
    </header>
<?php } ?>
<!-- /Header -->