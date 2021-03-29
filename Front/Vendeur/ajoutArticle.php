<?php
    $title="Création d'Article";
    require "head.php";
    session_start();
?>

<nav class="navbar fixed-top navbar-expand-lg shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="position-absolute top-0 start-0" id="img_logo_navbar"
                src="../../Image/logo_navbar.png" alt="logo_navbar"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form class="form-inline my-2 my-lg-0">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav text-uppercase">
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="ajoutArticle.php">Ajouter Article</a>
                    </li>
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="listeArticle.php">Liste Article</a>
                    </li>
                    <li class="nav-item last_nav_title nav_regul">
                        <a class="nav-link" href="#">Statistique</a>
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

<div class="genale_newArticle position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_newArticle text-uppercase">
            Ajouter un article
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<div class="row ajoutAricle_contenu_general pb-4">
    <div class="col-2"></div>

    <div class="col-9 mt-3">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row ajout_article_div_body">
                <div class="col-1"></div>

                <div class="col-5">
                    <h3 class="ajout_article_titre text-uppercase detail_style">information générale</h3>
                    
                    <input id="nomProduit_ajoutArticle" name="nomProduit_ajoutArticle" class="contenu_details_Ajoutarticle" placeholder="Nom du produit">
                    <br>
                    <span id="nomProduitErreur_ajoutArticle"></span>
                    <br>
                    <textarea id="description_ajoutArticle" name="description_ajoutArticle" placeholder="Entrer une description" cols="45" rows="6" style="background-color: #f2f2f2;"></textarea>
                    <br>
                    <span id="descriptionErreur_ajoutArticle"></span>
                    <br>
                    <input id="prix_ajoutArticle" name="prix_ajoutArticle" class="contenu_details_Ajoutarticle contenu_details_Ajoutarticle_double_div" placeholder="Prix en euro (€)"><span id="prixErreur_ajoutArticle"></span>
                    <br>
                    <input id="quatite_ajoutArticle" name="quatite_ajoutArticle" class="contenu_details_Ajoutarticle contenu_details_Ajoutarticle_double_div" placeholder="Quatité"><span id="quantiteErreur_ajoutArticle"></span>
                    <br>
                </div>

                <div class="col-5">
                    <img id="img_ajoutArticle">
                    <div class="img_ajoutArticle_general">
                        <span class="file_ajoutArticle_img">
                            <span onclick="choix_image_vendeur()" class="btn btn-default btn_choix_img_ajoutArticle">
                                Browse <input type="file" id="file_interrieur_ajoutArticle_img">
                            </span>
                        </span>
                        <input type="text" name="img" class="form_ajoutArticle_control" readonly>
                    </div>
                </div>

                <div class="col-1"></div>
            </div>

            <br>

            <div class="row ajout_article_div_body">
                <div class="col-1"></div>

                <div class="col-5">
                    <select onchange="choixCategorie()" name="choixCategorie_ajoutArticle" id="choixCategorie_ajoutArticle" class="contenu_details_Ajoutarticle">
                        <option value="choix_categorie_null">--Please choose an category--</option>
                        <option value="house">HOUSE</option>
                        <option value="clothes">CLOTHES</option>
                    </select>
                    <br>
                    <span id="choixCategorieErreur_ajoutArticle"></span>
                    <br>
                </div>
                
                <div class="col-5">
                    <div class="choixSousCategorie_ajoutArticle_maison">
                        <select name="sousCategorie_ajoutArticle_maison" id="sousCategorie_ajoutArticle_maison" class="contenu_details_Ajoutarticle">
                            <option value="sous_categorieMaison">--Please choose an category--</option>
                            <option value="sheet">SHEETS</option>
                            <option value="pillow">PILLOW</option>
                            <option value="decoration">DECORATION</option>
                        </select>
                    </div>
                    <div class="choixSousCategorie_ajoutArticle_vetement">
                        <select name="sousCategorie_ajoutArticle_vetement" id="sousCategorie_ajoutArticle_vetement" class="contenu_details_Ajoutarticle">
                            <option value="sous_categorie_vetement">--Please choose an category--</option>
                            <option value="t-shirt">T-SHIRT</option>
                            <option value="PULL">PULL</option>
                            <option value="CAP">CAP</option>
                        </select>
                    </div>
                    <br>
                    <span id="choixSousCategorieErreur_ajoutArticle_maison"></span>
                    <span id="choixSousCategorieErreur_ajoutArticle_vetement"></span>
                    <br>
                </div>

                <div class="col-1"></div>
            </div>

            <br>

            <div class="row ajout_article_div_body">
                <div class="col-1"></div>

                <div class="col-5 detail_style mt-4">
                    <input type="checkbox" name="achat_direct_ajoutArticle" id="achat_direct_ajoutArticle">Achat Direct
                    <input type="checkbox" name="achat_nego_ajoutArticle" id="achat_nego_ajoutArticle" class="inputAchat_ajoutArticle">Négociation
                    <input type="checkbox" name="achat_enchere_ajoutArticle" id="achat_enchere_ajoutArticle" class="inputAchat_ajoutArticle">Enchère
                    <br>
                    <span id="typeAchatErreur_ajoutArticle"></span>
                    <br>
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