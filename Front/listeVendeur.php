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

<div class="ajouter_vendeur">
    <button class="btn_ajout_vendeur_par_admin text-uppercase" data-bs-toggle="modal" data-bs-target="#ajout_vendeur_par_admin">+ Ajouter</button>
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

                <div class="listeVendeur_details_nom centrer position-relative">
                    <h4 class="titre_logo_vendeur text-uppercase detail_style">
                        marque
                        <img class="img_trash_vendeur" src="../Image/trash.png" alt="trash">
                    </h4>
                </div>
            </div>

            <div class="listeVendeur_un_par_un col-3">
                <div class="img_listeVendeur_div">
                    <img class="img_listeVendeur_logo" src="../Image/chaussure.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="listeVendeur_details_nom centrer position-relative">
                    <h4 class="titre_logo_vendeur text-uppercase detail_style">
                        marque
                        <img class="img_trash_vendeur" src="../Image/trash.png" alt="trash">
                    </h4>
                </div>
            </div>

            <div class="listeVendeur_un_par_un col-3">
                <div class="img_listeVendeur_div">
                    <img class="img_listeVendeur_logo" src="../Image/chaussure.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="listeVendeur_details_nom centrer position-relative">
                    <h4 class="titre_logo_vendeur text-uppercase detail_style">
                        marque
                        <img class="img_trash_vendeur" src="../Image/trash.png" alt="trash">
                    </h4>
                </div>
            </div>

            <div class="listeVendeur_un_par_un col-3">
                <div class="img_listeVendeur_div">
                    <img class="img_listeVendeur_logo" src="../Image/chaussure.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="listeVendeur_details_nom centrer position-relative">
                    <h4 class="titre_logo_vendeur text-uppercase detail_style">
                        marque
                        <img class="img_trash_vendeur" src="../Image/trash.png" alt="trash">
                    </h4>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="col-1"></div>

</div>

<!-- Modal XXL-->
<div class="modal fade" id="ajout_vendeur_par_admin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen test">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title titre_modal_prix_nego texte_style text-uppercase" id="staticBackdropLabel">Choose a price</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body mt-2">
                    <div class="row inscription_contenu_vendeur">
                        <div class="col-1"></div>

                        <div class="col-5">
                            <h3 class="inscription_detail_titre1 text-uppercase detail_style">information générale</h3>
                            
                            <input id="nomMarque_vendeur" name="nomMarque_vendeur" class="inscription_contenu_details_vendeur" placeholder="Nom de la marque">
                            <br>
                            <span id="nomMarqueErreur_vendeur"></span>
                            <br>
                            <input id="telephone_vendeur" name="telephone_vendeur" class="inscription_contenu_details_vendeur" placeholder="Téléphone">
                            <br>
                            <span id="telephoneErreur_vendeur"></span>
                            <br>
                            <input id="mail_vendeur" name="mail_vendeur" class="inscription_contenu_details_vendeur" placeholder="Email">
                            <br>
                            <span id="mailErreur_vendeur"></span>
                            <br>
                            <input id="mdp_vendeur" name="mdp_vendeur" type="password" class="inscription_contenu_details_vendeur" placeholder="Mot de passe">
                            <br>
                            <span id="mdpErreur_vendeur"></span>
                            <br>
                            <input id="mdp2_vendeur" name="mdp2_vendeur" type="password" class="inscription_contenu_details_vendeur" placeholder="Confirmation mot de passe">
                            <br>
                            <span id="mdp2Erreur_vendeur"></span>
                            <br>
                            <a class="retour_login_inscription" href="connexion.php">Login</a>
                            <button type="button" onclick="reset_vendeur()" class="btn_reset_inscription_vendeur text-uppercase detail_style">Reset</button>
                        </div>

                        <div class="col-5" style="margin-left:50px!important;">
                            <img id="img_inscription_choix_vendeur">
                            <div class="img_inscription_general">
                                <span class="file_inscription_img">
                                    <span onclick="choix_image_vendeur()" class="btn btn-default btn_choix_img_vendeur_inscription">
                                        Browse <input type="file" id="file_interrieur_inscription_img">
                                    </span>
                                </span>
                                <input type="text" name="img" class="form-control" readonly>
                            </div>
                            <br><br>
                            <input id="check_condition_inscription_vendeur" class="condition_inscription" type="checkbox">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#condition_contenu_inscription">Accepter les condition d'inscription</a>
                        </div>

                        <div class="col-1"></div>

                        <div class="col-12">
                            <button type="submit" id="submit_inscription_vendeur" name="submit_inscription_vendeur" class="btn text-light btn_inscription_final_vendeur text-uppercase detail_style position-absolute bottom-0 start-0">S'inscrire</button>
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