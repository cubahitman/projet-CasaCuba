<?php
require_once "funtions.inc.php";


// déconnexion ($_SESSION)
logOut();


// $categories =  allCategories();
?>








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
    <link rel="stylesheet" href="assets/css/style.css">
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
                    <li class="espace-pro">
                        <a href="<?= RACINE_SITE ?>admin/dashboard.php" class="action-button btn ">Espace Pro</a>
                        <?php if (empty($_SESSION['user'])) { ?>
                    <li class="nav-item dropdown">
                        <button class="action-button btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Connexion
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="<?= RACINE_SITE ?>profil.php">Connexion</a></li>
                            <li><a class="dropdown-item" href="?contact_Pro<?= RACINE_SITE ?>register.php">Contact</a></li>
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
                <h1 class="lead">AWESOME, CUSTOMIZABLE, FREE</h1>
                <p class="tagline">PROGRESSUS: free business bootstrap template by <a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus">GetTemplate</a></p>
                <p><a class="btn btn-default btn-lg" role="button">MORE INFO</a> <a class="btn btn-action btn-lg" role="button">DOWNLOAD NOW</a></p>
            </div>
        </div>
    </header>
    <!-- /Header -->