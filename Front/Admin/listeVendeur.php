
<?php
    $title="Liste Vendeurs";
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
                    <img class="img_listeVendeur_logo" src="../../Image/chaussure.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="listeVendeur_details_nom centrer position-relative">
                    <h4 class="titre_logo_vendeur text-uppercase detail_style">
                        marque
                        <img class="img_trash_vendeur" src="../../Image/trash.png" alt="trash">
                    </h4>
                </div>
            </div>

            <div class="listeVendeur_un_par_un col-3">
                <div class="img_listeVendeur_div">
                    <img class="img_listeVendeur_logo" src="../../Image/chaussure.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="listeVendeur_details_nom centrer position-relative">
                    <h4 class="titre_logo_vendeur text-uppercase detail_style">
                        marque
                        <img class="img_trash_vendeur" src="../../Image/trash.png" alt="trash">
                    </h4>
                </div>
            </div>

            <div class="listeVendeur_un_par_un col-3">
                <div class="img_listeVendeur_div">
                    <img class="img_listeVendeur_logo" src="../../Image/chaussure.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="listeVendeur_details_nom centrer position-relative">
                    <h4 class="titre_logo_vendeur text-uppercase detail_style">
                        marque
                        <img class="img_trash_vendeur" src="../../Image/trash.png" alt="trash">
                    </h4>
                </div>
            </div>

            <div class="listeVendeur_un_par_un col-3">
                <div class="img_listeVendeur_div">
                    <img class="img_listeVendeur_logo" src="../../Image/chaussure.png" alt="oreiller">
                    <div class="class_separation2"></div>
                </div>

                <div class="listeVendeur_details_nom centrer position-relative">
                    <h4 class="titre_logo_vendeur text-uppercase detail_style">
                        marque
                        <img class="img_trash_vendeur" src="../../Image/trash.png" alt="trash">
                    </h4>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="col-1"></div>

</div>

<!-- Modal XXL-->
<div class="modal fade" id="ajout_vendeur_par_admin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen taille_modal_ajout_vendeur">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title titre_modal_ajout_vendeur texte_style text-uppercase" id="staticBackdropLabel">Add seller</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body mt-2">
                    <div class="row ajout_vendeur_div_body">
                        <div class="col-1"></div>

                        <div class="col-5">
                            <h3 class="ajout_vendeur_titre text-uppercase detail_style">information générale</h3>
                            
                            <input id="nomMarque_Ajoutvendeur" name="nomMarque_Ajoutvendeur" class="contenu_details_Ajoutvendeur" placeholder="Nom de la marque">
                            <br>
                            <span id="nomMarqueErreur_Ajoutvendeur"></span>
                            <br>
                            <input id="telephone_Ajoutvendeur" name="telephone_Ajoutvendeur" class="contenu_details_Ajoutvendeur" placeholder="Téléphone">
                            <br>
                            <span id="telephoneErreur_Ajoutvendeur"></span>
                            <br>
                            <input id="mail_Ajoutvendeur" name="mail_Ajoutvendeur" class="contenu_details_Ajoutvendeur" placeholder="Email">
                            <br>
                            <span id="mailErreur_Ajoutvendeur"></span>
                            <br>
                            <input id="mdp_Ajoutvendeur" name="mdp_Ajoutvendeur" type="password" class="contenu_details_Ajoutvendeur" placeholder="Mot de passe">
                            <br>
                            <span id="mdpErreur_Ajoutvendeur"></span>
                            <br>
                            <input id="mdp2_Ajoutvendeur" name="mdp2_Ajoutvendeur" type="password" class="contenu_details_Ajoutvendeur" placeholder="Confirmation mot de passe">
                            <br>
                            <span id="mdp2Erreur_Ajoutvendeur"></span>
                            <br>
                            <button type="button" onclick="reset_Ajoutvendeur()" class="btn_reset_Ajoutvendeur text-uppercase detail_style">Reset</button>
                            <button type="submit" id="submit_Ajoutvendeur" name="submit_Ajoutvendeur" class="btn_final_Ajoutvendeur text-uppercase detail_style">Add</button>
                        </div>

                        <div class="col-5" style="margin-left:50px!important;">
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