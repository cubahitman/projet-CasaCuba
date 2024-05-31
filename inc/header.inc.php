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

    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom bg-bleuNav">
        <div class="nav-css">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand  " href="index.php"><img src="assets/images/CUBA(3).png" alt="Mon Logo" style="height: 100%;"> Cubuy</a>
            </div>
            <div class=" navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">

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

            </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->
    <!-- Header -->
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">DESTINATION, RAFFINEMENT, INSPIRATION</h1>
                <p class="tagline">Votre portail pour les maisons de rêve à Cuba </p>
                <p><a href="<?= RACINE_SITE ?>a_propos.php" class="btn btn-default btn-lg" role="button">INFORMATIONS</a> <a href="<?= RACINE_SITE ?>register.php" class="btn btn-action btn-lg" role="button">INSCRIVEZ-VOUS MAINTENANT</a></p>
            </div>
        </div>
    </header>
    <!-- /Header -->