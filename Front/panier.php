<?php
    $title="Panier";
    require "head.php";
?>

<nav class="navbar navbar_menu_principal fixed-top navbar-expand-lg shadow">
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
                        <a class="nav-link" href="#">
                            <img id="img_nav_user" src="../Image/user.png" alt="panier">
                        </a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav>

<div class="genale_panier position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_panier text-uppercase">
            Panier
        </p>
        <p class="info_general_panier centrer detail_style">
            Vous avez 15 articles
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<div class="panier_total">

    <div class="panier_liste_article_un_par_un">
        <div class="row">
            <div class="col-1"></div>

            <div class="col-10 listeArticle_liste_un_par_un">
                <div class="row">
                    <div class="col-5">
                        <img class="img_listeArticle" src="../Image/chaussure.png" alt="chaussure"><br>
                    </div>

                    <div class="col-7 listeArticle_liste_details position-relative">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="listeArticle_info_titre texte_style text-uppercase">titre produit</div>
                            </div>
                        </div>
                        <div class="listeArticle_info_marque detail_style text-uppercase">marque</div>
                        <br>
                        <div class="listeArticle_info_description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum similique sequi, beatae voluptatum consectetur quidem consequatur. Quisquam similique minima dolorum ad, vel tempora vero optio corrupti perspiciatis veritatis iure explicabo.</div>
                        <br>
                        <div class="row border-bottom mb-3 pb-2">
                            <div class="col-md-2"><small class="text-uppercase ">Price</small></div>
                            <div class="col-md-10"><small class="text-uppercase">Quantity</small></div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <h4 class="texte_style text-uppercase">20 $</h4>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control w-100" value="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn text-light bg_blue1 w-100" data-bs-toggle="modal" data-bs-target="#nego_total_modal">SEE OFFER <i class="fas fa-handshake"></i></button>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-outline-danger f_right"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>
        </div>

        <div class="row">
            <div class="col-1"></div>

            <div class="col-10 listeArticle_liste_un_par_un">
                <div class="row">
                    <div class="col-5">
                        <img class="img_listeArticle" src="../Image/chaussure.png" alt="chaussure"><br>
                    </div>

                    <div class="col-7 listeArticle_liste_details position-relative">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="listeArticle_info_titre texte_style text-uppercase">titre produit</div>
                            </div>
                        </div>
                        <div class="listeArticle_info_marque detail_style text-uppercase">marque</div>
                        <br>
                        <div class="listeArticle_info_description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum similique sequi, beatae voluptatum consectetur quidem consequatur. Quisquam similique minima dolorum ad, vel tempora vero optio corrupti perspiciatis veritatis iure explicabo.</div>
                        <br>
                        <div class="row border-bottom mb-3 pb-2">
                            <div class="col-md-2"><small class="text-uppercase ">Price</small></div>
                            <div class="col-md-10"><small class="text-uppercase">Quantity</small></div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <h4 class="texte_style text-uppercase">20 $</h4>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control w-100" value="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn text-light bg_blue1 w-100" data-bs-toggle="modal" data-bs-target="#nego_total_modal">SEE OFFER <i class="fas fa-handshake"></i></button>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-outline-danger f_right"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="row">
            <div class="col-1"></div>

            <div class="col-10 listeArticle_liste_un_par_un">
                <div class="row">
                    <div class="col-5">
                        <img class="img_listeArticle" src="../Image/chaussure.png" alt="chaussure"><br>
                    </div>

                    <div class="col-7 listeArticle_liste_details position-relative">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="listeArticle_info_titre texte_style text-uppercase">titre produit</div>
                            </div>
                        </div>
                        <div class="listeArticle_info_marque detail_style text-uppercase">marque</div>
                        <br>
                        <div class="listeArticle_info_description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum similique sequi, beatae voluptatum consectetur quidem consequatur. Quisquam similique minima dolorum ad, vel tempora vero optio corrupti perspiciatis veritatis iure explicabo.</div>
                        <br>
                        <div class="row border-bottom mb-3 pb-2">
                            <div class="col-md-2"><small class="text-uppercase ">Price</small></div>
                            <div class="col-md-10"><small class="text-uppercase">Quantity</small></div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <h4 class="texte_style text-uppercase">20 $</h4>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control w-100" value="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn text-light bg_blue1 w-100" data-bs-toggle="modal" data-bs-target="#nego_total_modal">SEE OFFER <i class="fas fa-handshake"></i></button>
                            </div>
                            <div class="col-md-1">
                                <button type="button" class="btn btn-outline-danger f_right"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>
        </div>
    </div>

    <div class="panier_navbar_div">
        <div class="navbar_panier detail_style text-uppercase">
            <form action="" method="POST">
                <input type="radio" name="typedelivraison_panier" id="livraison_panier_magasin" class="contenu_navbar_panier contenu_navbar_panier_premier"><span class="typedelivraison_panier_texte">Livraison en magasin</span>
                <br>
                <input type="radio" name="typedelivraison_panier" id="livraison_panier_relais" class="contenu_navbar_panier"><span class="typedelivraison_panier_texte">Point relais</span>
                <br>
                <input type="radio" name="typedelivraison_panier" id="livraison_panier_domicile" class="contenu_navbar_panier"><span class="typedelivraison_panier_texte">livraison à domicile</span>
                <br>
                <div class="separation_panier_div mb-3"></div>
                <span class="contenu_navbar_panier detail_panier_navbar">Valeur de la commande : </span><span class="detail_panier_navbar f_right">60<span class="detail_panier_navbar_euro">€</span></span>
                <br>
                <span class="contenu_navbar_panier detail_panier_navbar">Livraison : </span><span class="detail_panier_navbar f_right">0<span class="detail_panier_navbar_euro">€</span></span>
                <br>
                <div class="separation_panier_div mt-3 mb-3"></div>
                <span class="contenu_navbar_panier prixTotal_panier_navbar">Total :</span><span class="prixTotal_panier_navbar f_right">60<span class="detail_panier_navbar_euro">€</span></span>
                <br>
                <button type="submit" name="btn_submit_navbar_panier" id="btn_submit_navbar_panier" class="bg_blue1 white btn_final_navbar_panier mt-3">Finaliser la commande</button>
            </form>
        </div>
    </div>
    
</div>

<?php
    include("footer.php");
?>