<?php
require_once "funtions.inc.php";


// déconnexion ($_SESSION)
logOut();


// $categories =  allCategories();
?>








<!DOCTYPE html>
<html lang="fr">
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>Progressus - Free business bootstrap template by GetTemplate</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom ">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand  " href="index.html"><img src="assets/images/CUBA(3).png" alt="Mon Logo" style="height: 100%;">LailahailaAllah</a>
            </div>
            <div class=" navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li><a href="<?= RACINE_SITE ?>index.php">Accueil</a></li>
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


                </ul>

            </div><!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->



    <header>
        <div class="navbar nav-main" id="sidebar">
            <div class="logo">

                <a href="#"><img src="<?= RACINE_SITE ?>assets/img/logo.png" alt="logo du site(casa avec palmier)"></a>
            </div>
            <ul class="links mt-3">
                <li><a href="<?= RACINE_SITE ?>index.php">Accueil</a></li>
                <li><a href="<?= RACINE_SITE ?>explorer.php">Explorer</a></li>
                <li><a href="<?= RACINE_SITE ?>a_propos.php">À propos</a></li>
                <li><a href="<?= RACINE_SITE ?>contact.php">Contact</a></li>
                <li><a href="<?= RACINE_SITE ?>profil.php">Profil <?php if (isset($_SESSION['user'])) { ?>
                            <sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= $_SESSION['user']['firstName'] ?></sup>
                        <?php    } ?> </li>
            </ul>
            <div class="buttons">
                <a href="<?= RACINE_SITE ?>admin/dashboard.php" class="action-button pro">Espace Pro</a>
                <?php if (empty($_SESSION['user'])) { ?>
                    <li class="nav-item dropdown">
                        <button class="action-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Connexion
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="<?= RACINE_SITE ?>profil.php">Connexion</a></li>
                            <li><a class="dropdown-item" href="<?= RACINE_SITE ?>register.php">Inscriptions</a></li>

                        </ul>
                    </li>
                <?php } else { ?>

                    <a href=" ?action=deconnexion" class="action-button ">Deconnexion</a>



                <?php } ?>
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
                <li><a href="<?= RACINE_SITE ?>contact.php">Populaires</a></li>
                <li><a href="<?= RACINE_SITE ?>profil.php">Profil <?php if (isset($_SESSION['user'])) { ?>
                            <sup class="badge rounded-pill text-bg-danger ms-1 fs-16"><?= $_SESSION['user']['firstName'] ?></sup>
                        <?php    } ?> </li>
                <div class="divider"></div>
                <div class="buttons-burger-menu">
                    <a href="<?= RACINE_SITE ?>admin/dashboard.php" class="action-button pro">Espace Pro</a>
                    <?php if (empty($_SESSION['user'])) { ?>
                        <li class="nav-item dropdown">
                            <button class="action-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Connexion
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="<?= RACINE_SITE ?>profil.php">Connexion</a></li>
                                <li><a class="dropdown-item" href="<?= RACINE_SITE ?>register.php">Inscriptions</a></li>

                            </ul>
                        </li>
                    <?php } else { ?>

                        <a href=" ?action=deconnexion" class="action-button ">Deconnexion</a>



                    <?php } ?>
                </div>
            </ul>
        </div>
    </header>

    <body>