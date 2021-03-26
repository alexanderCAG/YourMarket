<?php
    $title="Accueil";
    require "head.php";
?>

<nav class="navbar fixed-top navbar-expand-lg shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class="position-absolute top-0 start-0" id="img_logo_navbar"
                src="../Image/logo_navbar.png" alt="logo_navbar"></a>
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
                            <li><a class="dropdown-item" href="#">sheets</a></li>
                            <li><a class="dropdown-item" href="#">pillow</a></li>
                            <li><a class="dropdown-item" href="#">decoration</a></li>
                            <li><a class="dropdown-item" href="page-maison.php">ALL</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav_regul">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Vêtement
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">T-SHIRT</a></li>
                            <li><a class="dropdown-item" href="#">SWEAT-SHIRT</a></li>
                            <li><a class="dropdown-item" href="#">PULL</a></li>
                            <li><a class="dropdown-item" href="#">CAP</a></li>
                            <li><a class="dropdown-item" href="#">MEN</a></li>
                            <li><a class="dropdown-item" href="#">WOMMEN</a></li>
                            <li><a class="dropdown-item" href="page-vetements.php">ALL</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="#">Enchère</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Panier
                            <button type="button" class="nav_btn_panier btn position-relative">
                                <img id="img_nav_panier" src="../Image/panier.png" alt="panier"> <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">0
                                    <span class="visually-hidden">unread messages</span></span>
                            </button>
                        </a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                        <a class="nav-link" href="connexion.php">
                            <img id="img_nav_user" src="../Image/user.png" alt="panier">
                        </a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav>

<div class="genale_listeVendeur position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_listeVendeur text-uppercase">
            Liste des vendeurs
        </p>
        <p class="info_general_listeVendeur centrer detail_style">
            Il y a 15 vendeur
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<div class="listeVendeur_details">
    <div class="navbar_listeVendeur">
        <ul class="navbar_listeVendeur_details detail_style centrer">
            <li><a href="#" class="text-uppercase">maison</a></li>
            <li><a href="#" class="text-uppercase">vêtement</a></li>
        </ul>
    </div>
</div>


<div class="listeVendeur_total row">
    <!-- Premiere ligne -->
    <div class="col-1"></div>

    <div class="col-10">
        <div class="row">
            <div class="listeVendeur_un_par_un col-3">
                <div class="img_listeVendeur_div">
                    <img class="img_listeVendeur_logo" src="../Image/chaussure.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="listeVendeur_details_nom position-relative">
                    <h4 class="titre_logo_vendeur centrer text-uppercase detail_style">Ma marque</h4>
                </div>
            </div>

            <div class="listeVendeur_un_par_un col-3">
                <div class="img_listeVendeur_div">
                    <img class="img_listeVendeur_logo" src="../Image/chaussure.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="listeVendeur_details_nom position-relative">
                    <h4 class="titre_logo_vendeur centrer text-uppercase detail_style">Ma marque</h4>
                </div>
            </div>

            <div class="listeVendeur_un_par_un col-3">
                <div class="img_listeVendeur_div">
                    <img class="img_listeVendeur_logo" src="../Image/chaussure.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="listeVendeur_details_nom position-relative">
                    <h4 class="titre_logo_vendeur centrer text-uppercase detail_style">Ma marque</h4>
                </div>
            </div>

            <div class="listeVendeur_un_par_un col-3">
                <div class="img_listeVendeur_div">
                    <img class="img_listeVendeur_logo" src="../Image/chaussure.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="listeVendeur_details_nom position-relative">
                    <h4 class="titre_logo_vendeur centrer text-uppercase detail_style">Ma marque</h4>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="col-1"></div>

</div>

<?php
    include("footer.php");
?>