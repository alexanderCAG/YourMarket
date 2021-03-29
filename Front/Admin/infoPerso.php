
<?php
    $title="Informations personnelles";
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

<div class="genale_page_infoPerso position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle general_infoPerso_div">
        <p class="titre_general_infoPerso text-uppercase centrer">
            Informations personnelles
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<!-- Admin -->
<div class="contenu_general_infoPerso_admin row">
    <div class="col-2"></div>

    <div class="col-8 infoPerso_livraison">

        <form action="../../Bdd/infoPerso_recup.php" method="POST">
            <div class="row">
                <div class="col-4">
                    <h3 class="infoPerso_detail_titre1_admin centrer text-uppercase detail_style" style="margin-bottom:50px!important;">information personnelles</h3>
                    
                    <input id="infoPerso_nom_admin" name="infoPerso_nom_admin" type="text" class="infoPerso_contenu_details_admin" placeholder="Nom">
                    <br>
                    <span id="infoPerso_nomErreur_admin"></span>
                    <br>
                    <input id="infoPerso_prenom_admin" name="infoPerso_prenom_admin" type="text" class="infoPerso_contenu_details_admin" placeholder="Prénom">
                    <br>
                    <span id="infoPerso_prenomErreur_admin"></span>
                    <br>
                    <input id="infoPerso_telephone_admin" name="infoPerso_telephone_admin" type="text" class="infoPerso_contenu_details_admin" placeholder="Téléphone">
                    <br>
                    <span id="infoPerso_telephoneErreur_admin"></span>
                    <br>
                    <input id="infoPerso_mail_admin" name="infoPerso_mail_admin" type="text" class="infoPerso_contenu_details_admin" placeholder="Email">
                    <br>
                    <span id="infoPerso_mailErreur_admin"></span>
                    <br>
                    <input id="infoPerso_mdp_admin" name="infoPerso_mdp_admin" type="password" class="infoPerso_contenu_details_admin" placeholder="Mot de passe">
                    <br>
                    <span id="infoPerso_mdpErreur_admin"></span>
                    <br>
                    <input id="infoPerso_mdp2_admin" name="infoPerso_mdp2_admin" type="password" class="infoPerso_contenu_details_admin" placeholder="Confirmation mot de passe">
                    <br>
                    <span id="infoPerso_mdp2Erreur_admin"></span>
                    <br>
                </div>

                <div class="col-4" >
                    <h3 class="infoPerso_detail_titre2_admin centrer text-uppercase detail_style" style="margin-bottom:50px!important">information de livraison</h3>
                    
                    <input id="infoPerso_adresse1_admin" name="infoPerso_adresse1_admin" type="text" class="infoPerso_contenu_details_admin" placeholder="Adresse 1">
                    <br>
                    <span id="infoPerso_adresse1Erreur_admin"></span>
                    <br>
                    <input id="infoPerso_adresse2_admin" name="infoPerso_adresse2_admin" type="text" class="infoPerso_contenu_details_admin" placeholder="Adresse 2">
                    <br>
                    <span id="infoPerso_adresse2Erreur_admin"></span>
                    <br>
                    <input id="infoPerso_pays_admin" name="infoPerso_pays_admin" type="text" class="infoPerso_contenu_details_admin" placeholder="Pays">
                    <br>
                    <span id="infoPerso_paysErreur_admin"></span>
                    <br>
                    <input id="infoPerso_ville_admin" name="infoPerso_ville_admin" type="text" class="infoPerso_contenu_details_admin" placeholder="Ville">
                    <br>
                    <span id="infoPerso_villeErreur_admin"></span>
                    <br>
                    <input id="infoPerso_codepostal_admin" name="infoPerso_codepostal_admin" type="text" class="infoPerso_contenu_details_admin" placeholder="Code Postal">
                    <br>
                    <span id="infoPerso_codepostalErreur_admin"></span>
                    <br>
                </div>

                <div class="col-4 centrer">
                    <button onclick="modif_infoPersoAdmin()" type="button" id="modif_infoPerso_admin" class="btn_infoPerso_final_admin text-uppercase detail_style">Modifier</button>
                    <button onclick="annulModif_infoPersoAdmin()" type="button" id="annulModif_infoPerso_admin" class="btn_infoPerso_final_admin text-uppercase detail_style">Annuler Modif</button>
                    <button onclick="reset_infoPersoAdmin()" type="button" id="reset_infoPerso_admin" class="btn_infoPerso_final_admin text-uppercase detail_style">Reset</button>
                    <button type="submit" id="submit_valider_infoPerso_admin" name="submit_valider_infoPerso_admin" class="btn_infoPerso_final_admin text-uppercase detail_style">Valider</button>
                </div>
            </div>
        </form>

    </div>

    <div class="col-2"></div>

</div>

<?php
    include("footer.php");
?>
