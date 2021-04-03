<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="../../Lien/paiement.css">
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

<body>

<?php 
include("../../Bdd/cnx.php");
session_start(); 

$email_user = $_SESSION['email'];
$queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE email='$email_user'");

if($row2 = mysqli_fetch_assoc($queryBuyer)){
    $id_buyer = $row2['id_buyer'];
    $queryCountItems = mysqli_query($con, "select count(id_buyer) as total from basket where id_buyer='$id_buyer'");
    if($row = mysqli_fetch_assoc($queryCountItems)){
        $total = $row['total'];

?>

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
                            Maison 
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
                            Vêtement
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="page-vetements-tshirt.php">T-SHIRT</a></li>
                            <li><a class="dropdown-item" href="page-vetements-sweat.php">SWEAT-SHIRT</a></li>
                            <li><a class="dropdown-item" href="page-vetements-shoes.php">SHOES</a></li>
                            <li><a class="dropdown-item" href="page-vetements.php">ALL</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="enchere.php">Enchère</a>
                    </li>
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="messagerie.php">Messagerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panier.php">Panier
                            <button type="button" class="nav_btn_panier btn position-relative">
                                <img id="img_nav_panier" src="../../Image/panier.png" alt="panier"> <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary"><?php echo $total ?>
                                    <span class="visually-hidden">unread messages</span></span>
                            </button>
                        </a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                        <div class="btn-group">
                            <a class="nav-link"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="img_nav_user" src="../../Image/user.png" alt="user">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><button class="dropdown-item" type="button"><?php echo $_SESSION['email'];?> </button></li>
                                <li><span class="dropdown-item" ><a href="infoPerso.php" class="text-decoration-none">My account</a></span></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><span class="dropdown-item" ><a href="../../Bdd/logout.php" class="text-decoration-none">Logout <i class="fas fa-sign-out-alt text-dark "></i></a> </span></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav>

<?php
    }
}
?>