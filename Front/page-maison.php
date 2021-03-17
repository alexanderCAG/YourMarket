

<?php
    $title="Maison sale";
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
                            <li><a class="dropdown-item" href="#">ALL</a></li>
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
                        <a class="nav-link" href="enchere.php">Enchère</a>
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

<div class="vetement_general">
    <img class="image_vetement_general position-relative" src="../Image/maison-general.png" alt="vetement-general">
    <div class="deco_marque_general position-absolute position-absolute top-0 end-0">
        <img class="img_icon_sale position-absolute top-50 start-0 translate-middle-y" src="../Image/icon_sale.png" alt="icon_sale">
        <p class="texte_deco_marque_general texte_style text-uppercase position-absolute top-50 start-50 translate-middle">maison</p> 
    </div>
    <div class="class_separation"></div>
</div>

<div class="vetement_details">
    <div class="navbar_vetement">
        <ul class="navbar_vetement_details detail_style centrer">
            <li><a href="#">SHEETS</a></li>
            <li><a href="#">PILLOW</a></li>
            <li><a href="#">DECORATION</a></li>
        </ul>
    </div>
</div>

<div class="maison_liste_total row">
    <!-- Premiere ligne -->
    <div class="col-1"></div>

    <div class="col-10">
        <div class="row">
            <div class=" maison_liste_un_par_un col-3">
                <div class="img_maison_presentation">
                    <img class="img_maison_sale" src="../Image/oreiller.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="maison_liste_details mt-2 position-relative">
                    <div class="maison_liste_details_gauche">
                        <div class="detail_style_titre detail_style">TITRE ARTICLE</div> 
                        <div class="detail_style_marque detail_style">Marque article</div> 
                    </div>
                    <div class="maison_liste_details_droite">
                        <p class="detail_style_prix texte_style">20€</p>
                    </div>
                    <center><button class="btn_ajouter_article position-absolute bottom-0 start-50 translate-middle-x">ADD TO CART</button></center>
                </div>
            </div>

            <div class=" maison_liste_un_par_un col-3">
                <div class="img_maison_presentation">
                    <img class="img_maison_sale" src="../Image/oreiller.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="maison_liste_details mt-2 position-relative">
                    <div class="maison_liste_details_gauche">
                        <div class="detail_style_titre detail_style">TITRE ARTICLE</div> 
                        <div class="detail_style_marque detail_style">Marque article</div> 
                    </div>
                    <div class="maison_liste_details_droite">
                        <p class="detail_style_prix texte_style">20€</p>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <center><button class="btn_ajouter_article position-absolute bottom-0 start-0">ADD TO CART</button></center>
                        </div>

                        <div class="col-6">
                            <center><button class="btn_ajouter_article position-absolute bottom-0 end-0">NEGOCIATE</button></center>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class=" maison_liste_un_par_un col-3">
                <div class="img_maison_presentation">
                    <img class="img_maison_sale" src="../Image/oreiller.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="maison_liste_details mt-2 position-relative">
                    <div class="maison_liste_details_gauche">
                        <div class="detail_style_titre detail_style">TITRE ARTICLE</div> 
                        <div class="detail_style_marque detail_style">Marque article</div> 
                    </div>
                    <div class="maison_liste_details_droite">
                        <p class="detail_style_prix texte_style">20€</p>
                    </div>
                    <center><button class="btn_ajouter_article position-absolute bottom-0 start-50 translate-middle-x">ADD TO CART</button></center>
                </div>
            </div>

            <div class=" maison_liste_un_par_un col-3">
                <div class="img_maison_presentation">
                    <img class="img_maison_sale" src="../Image/oreiller.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="maison_liste_details mt-2 position-relative">
                    <div class="maison_liste_details_gauche">
                        <div class="detail_style_titre detail_style">TITRE ARTICLE</div> 
                        <div class="detail_style_marque detail_style">Marque article</div> 
                    </div>
                    <div class="maison_liste_details_droite">
                        <p class="detail_style_prix texte_style">20€</p>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <center><button class="btn_ajouter_article position-absolute bottom-0 start-0">ADD TO CART</button></center>
                        </div>

                        <div class="col-6">
                            <center><button class="btn_ajouter_article position-absolute bottom-0 end-0">NEGOCIATE</button></center>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="col-1"></div>

</div>

<?php
    include("footer.php");
?>