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

<div class="genale_listeArticle position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_listeArticle text-uppercase">
            Liste des articles
        </p>
        <p class="info_general_listeArticle centrer detail_style">
            Vous avez 15 articles
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<div class="listeArticle_liste_total row">
    <div class="col-2"></div>

    <div class="col-8 listeArticle_liste_un_par_un">
        <div class="row">
            <div class="col-5">
                <img class="img_listeArticle" src="../Image/chaussure.png" alt="chaussure">
            </div>

            <div class="col-7 listeArticle_liste_details position-relative">
                <div class="listeArticle_info_titre texte_style text-uppercase">titre produit</div>
                <div class="listeArticle_info_marque detail_style text-uppercase">marque</div>
                <br><br>
                <div class="listeArticle_info_description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum similique sequi, beatae voluptatum consectetur quidem consequatur. Quisquam similique minima dolorum ad, vel tempora vero optio corrupti perspiciatis veritatis iure explicabo.</div>
                <br><br><br>
                <div class="row centrer">
                    <div class="col-2">
                        <div class="listeArticle_prix detail_style">
                            <span>20</span>€
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="listeArticle_quatité">
                            <img class="btnMoins img_quantite" onclick="enlever1()" src="../Image/moins.png" alt="moins">
                            <input class="nbre" id="nb1" value="0">
                            <img class="btnPlus img_quantite" onclick="ajouter1()" src="../Image/plus.png" alt="plus">
                        </div>
                    </div>

                    <div class="col-4"></div>

                    <div class="col-2">
                        <div class="listeArticle_poubelle">
                            <img class="img_trash" src="../Image/trash.png" alt="trash">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="col-2"></div>

</div>

<?php
    include("footer.php");
?>