<?php
    $title="Création d'Article";
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

<div class="genale_newArticle position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_newArticle text-uppercase">
            Ajouter un article
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<div class="row ajoutAricle_contenu_general pb-4">
    <div class="col-1"></div>

    <div class="col-10 mt-3">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row ajout_article_div_body">
                <div class="col-1"></div>

                <div class="col-5">
                    <h3 class="ajout_article_titre text-uppercase detail_style">information générale</h3>
                    
                    <input id="nomProduit_ajoutArticle" name="nomProduit_ajoutArticle" class="contenu_details_Ajoutarticle" placeholder="Nom du produit">
                    <br>
                    <span id="nomProduitErreur_ajoutArticle"></span>
                    <br>
                    <textarea id="description_ajoutArticle" name="description_ajoutArticle" placeholder="Entrer une description" cols="45" rows="7" style="background-color: #f2f2f2;"></textarea>
                    <br>
                    <span id="descriptionErreur_ajoutArticle"></span>
                    <br>
                    <input id="prix_ajoutArticle" name="prix_ajoutArticle" class="contenu_details_Ajoutarticle" placeholder="Prix en euro (€)">
                    <br>
                    <span id="prixErreur_ajoutArticle"></span>
                </div>

                <div class="col-5">
                    <img id="img_Ajoutvendeur">
                    <div class="img_Ajoutvendeur_general">
                        <span class="file_Ajoutvendeur_img">
                            <span onclick="choix_image_vendeur()" class="btn btn-default btn_choix_img_Ajoutvendeur">
                                Browse <input type="file" id="file_interrieur_Ajoutvendeur_img">
                            </span>
                        </span>
                        <input type="text" name="img" class="form-control" readonly>
                    </div>
                </div>

                <div class="col-1"></div>
            </div>

            <br>

            <div class="row ajout_article_div_body mt-2">
                <div class="col-1"></div>

                <div class="col-5">
                    <select name="choixCategorie_ajoutArticle" id="choixCategorie_ajoutArticle" class="contenu_details_Ajoutarticle">
                        <option value="">--Please choose an category--</option>
                        <option value="house">HOUSE</option>
                        <option value="clothes">CLOTHES</option>
                    </select>
                </div>
                
                <div class="col-5">
                    <div class="choixCategorie_ajoutArticle_maison">
                        <select name="choixCategorie_ajoutArticle" id="choixCategorie_ajoutArticle" class="contenu_details_Ajoutarticle">
                            <option value="">--Please choose an category--</option>
                            <option value="sheet">SHEETS</option>
                            <option value="pillow">PILLOW</option>
                            <option value="decoration">DECORATION</option>
                        </select>
                    </div>

                    <div class="choixCategorie_ajoutArticle_vetement">
                        <select name="choixCategorie_ajoutArticle" id="choixCategorie_ajoutArticle" class="contenu_details_Ajoutarticle">
                            <option value="">--Please choose an category--</option>
                            <option value="t-shirt">T-SHIRT</option>
                            <option value="PULL">PULL</option>
                            <option value="CAP">CAP</option>
                        </select>
                    </div>
                </div>

                <div class="col-1"></div>
            </div>

            <br>

            <div class="row ajout_article_div_body mt-2">
                <div class="col-1"></div>

                <div class="col-5 detail_style mt-4">
                    <input type="checkbox" name="achat_direct_ajoutArticle" id="achat_direct_ajoutArticle">Achat Direct
                    <input type="checkbox" name="achat_nego_ajoutArticle" id="achat_nego_ajoutArticle" class="inputAchat_ajoutArticle">Négociation
                    <input type="checkbox" name="achat_enchere_ajoutArticle" id="achat_enchere_ajoutArticle" class="inputAchat_ajoutArticle">Enchère
                    <br>
                    <span id="typeAchatErreur_ajoutArticle"></span>
                </div>

                <div class="col-5">
                    <button type="button" onclick="reset_ajoutArticle()" class="btn_reset_ajoutArticle text-uppercase detail_style">Reset</button>
                    <button type="submit" id="submit_ajoutArticle" name="submit_ajoutArticle" class="btn_final_ajoutArticle text-uppercase detail_style">Add</button>
                </div>

                <div class="col-1"></div>
            </div>
        </form>
    </div>
    
    <div class="col-1"></div>
</div>

<?php
    include("footer.php");
?>