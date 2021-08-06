<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Define my title -->
    <title>
        <?php if(isset($title)): ?>
            <?= $title; ?>
        <?php else: ?>
            YourMarket
        <?php endif ?>
    </title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../Lien/yourmarket.css">
    <link rel="stylesheet" href="../../Lien/accueil.css">
    <link rel="stylesheet" href="../../Lien/categorie.css">
    <link rel="stylesheet" href="../../Lien/infoPerso.css">
    <link rel="stylesheet" href="../../Lien/article.css">
    <link rel="stylesheet" href="../../Lien/panier.css">
    <link rel="shortcut icon" href="../../Image/logo.png">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Icon Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body  style="overflow-x: hidden;" >

<!-- session start -->
<?php session_start(); ?>

<!-- My navbar for the file Base -->
<nav class="navbar navbar_menu_principal fixed-top navbar-expand-lg shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class="position-absolute top-0 start-0" id="img_logo_navbar"
                src="../../Image/logo_navbar.png" alt="logo_navbar"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form class="form-inline my-2 my-lg-0">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav text-uppercase">
                    <li class="nav-item dropdown nav_regul">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            House 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="page-maison-sheet.php">sheets</a></li>
                            <li><a class="dropdown-item" href="page-maison-pillow.php">pillows</a></li>
                            <li><a class="dropdown-item" href="page-maison-decoration.php">decorations</a></li>
                            <li><a class="dropdown-item" href="page-maison.php">ALL</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav_regul">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Clothes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="page-vetements-tshirt.php">T-SHIRT</a></li>
                            <li><a class="dropdown-item" href="page-vetements-sweat.php">SWEAT-SHIRT</a></li>
                            <li><a class="dropdown-item" href="page-vetements-shoes.php">SHOES</a></li>
                            <li><a class="dropdown-item" href="page-vetements.php">ALL</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item nav_regul" style="">
                        <a class="nav-link" href="enchere_accueil.php">Bid</a>
                    </li>
                    <li class="nav-item nav_regul" style="margin-right:100px!important">
                        <a class="nav-link" href="promotion.php">promotion</a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                            <a class="nav-link" href="connexion.php">
                                <img id="img_nav_user" src="../../Image/user.png" alt="user">
                            </a>
                    </li>
                    <li class="nav-item nav_regul" style="margin-right:100px!important">
                        <a class="nav-link" href="recette.php">Recette</a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav>