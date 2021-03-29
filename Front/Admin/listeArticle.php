
<?php
    $title="Liste Article";
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
                    <li class="nav-item dropdown nav_regul">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Articles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="ajoutArticle.php">Ajouter un article</a></li>
                            <li><a class="dropdown-item" href="listeArticle.php">Liste des articles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="listeVendeur.php">Liste Vendeur</a>
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

<!-- Article 1-->
<div class="listeArticle_liste_total row m-0 p-3">
    <div class="col-2"></div>

    <div class="col-8 listeArticle_liste_un_par_un">
        <div class="row">
            <div class="col-5">
                <img class="img_listeArticle" src="../../Image/chaussure.png" alt="chaussure"><br>
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

    <div class="col-2"></div>
</div>

<!-- Article 2-->
<div class="listeArticle_liste_total row m-0 p-3">
    <div class="col-2"></div>

    <div class="col-8 listeArticle_liste_un_par_un">
        <div class="row">
            <div class="col-5">
                <img class="img_listeArticle" src="../../Image/chaussure.png" alt="chaussure"><br>
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

    <div class="col-2"></div>
</div>

<!-- fin article -->
<div class="listeArticle_liste_total bg_blue2 row mt-5">
    <div class="col-2"></div>
    <div class="col-8 ">
        <div class="row">
            <div class="col-md-6">
                <a href="ajoutArticle.php" type="button" class="btn btn-lg bg_blue1 text-light w-100"> <i class="fas fa-plus"></i> Ajouter un article</a>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-lg bg_blue1 text-light w-100"> <i class="fas fa-pen"></i> Mettre à jours un article</button>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
</div>

<!-- Modal negociation-->
<div class="modal fade" id="nego_total_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titre_modal_prix_nego texte_style text-uppercase" id="staticBackdropLabel">Choose a price</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2">
                    <div class="row nego_contenu_modal_titre detail_style text-uppercase">
                        <div class="col-3">
                            Lastname
                        </div>

                        <div class="col-2">
                            Qty
                        </div>

                        <div class="col-3">
                            Price
                        </div>

                        <div class="col-2">
                            Refuse
                        </div>

                        <div class="col-2">
                            Accept
                        </div>
                    </div>
                    
                    <div class="row nego_contenu_modal detail_style text-uppercase">
                        <div class="col-3">
                            <span name="nego_modal_nom" class="marge_modal_offre">a</span>
                        </div>

                        <div class="col-2">
                            <span name="nego_modal_quantite" class="marge_modal_offre">dza</span>
                        </div>

                        <div class="col-3">
                            <span name="nego_modal_prix" class="marge_modal_offre">a</span>
                        </div>

                        <div class="col-2">
                            <button type="submit" class="btn_submit_refus_nego_modal shadow">X</button>
                        </div>

                        <div class="col-2">
                            <button type="submit" class="btn_submit_accepte_nego_modal shadow">V</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    include("footer.php");
?>