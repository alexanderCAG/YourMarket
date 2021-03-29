
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

<div class="genale_page_infoPerso position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle general_infoPerso_div">
        <p class="titre_general_infoPerso text-uppercase centrer">
            Informations personnelles
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<!-- Vendeur -->
<div class="contenu_general_infoPerso_vendeur row">
    <div class="col-2"></div>

    <div class="col-8 infoPerso_vendeur">

        <form action="../../Bdd/infoPerso_recup.php" method="POST" enctype="multipart/form-data">
            <div class="row inscription_contenu_vendeur">
                <div class="col-1"></div>

                <div class="col-5">
                    <h3 class="infoPerso_detail_titre1_vendeur text-uppercase detail_style">information générale</h3>
                    
                    <input id="infoPerso_nomMarque_vendeur" name="infoPerso_nomMarque_vendeur" class="infoPerso_contenu_details_vendeur" placeholder="Nom de la marque">
                    <br>
                    <span id="infoPerso_nomMarqueErreur_vendeur"></span>
                    <br>
                    <input id="infoPerso_telephone_vendeur" name="infoPerso_telephone_vendeur" class="infoPerso_contenu_details_vendeur" placeholder="Téléphone">
                    <br>
                    <span id="infoPerso_telephoneErreur_vendeur"></span>
                    <br>
                    <input id="infoPerso_mail_vendeur" name="infoPerso_mail_vendeur" class="infoPerso_contenu_details_vendeur" placeholder="Email">
                    <br>
                    <span id="infoPerso_mailErreur_vendeur"></span>
                    <br>
                    <input id="infoPerso_mdp_vendeur" name="infoPerso_mdp_vendeur" type="password" class="infoPerso_contenu_details_vendeur" placeholder="Mot de passe">
                    <br>
                    <span id="infoPerso_mdpErreur_vendeur"></span>
                    <br>
                    <input id="infoPerso_mdp2_vendeur" name="infoPerso_mdp2_vendeur" type="password" class="infoPerso_contenu_details_vendeur" placeholder="Confirmation mot de passe">
                    <br>
                    <span id="infoPerso_mdp2Erreur_vendeur"></span>
                    <br>
                </div>

                <div class="col-5" style="margin-left:50px!important;">
                    <img id="infoPerso_img_inscription_choix_vendeur">
                    <div class="infoPerso_img_inscription_general">
                        <span class="infoPerso_file_inscription_img">
                            <span onclick="choix_image_vendeur()" class="btn btn-default infoPerso_btn_choix_img_vendeur_inscription">
                                Browse <input type="file" id="infoPerso_file_interrieur_inscription_img">
                            </span>
                        </span>
                        <input type="text" name="infoPerso_img" class="form-control" readonly>
                    </div>
                    <br><br>
                </div>

                <div class="col-1"></div>

            </div>

            <div class="row">
                <div class="col-1"></div>

                <div class="col-10">
                    <button onclick="modif_infoPersoVendeur()" type="button" id="modif_infoPersoL_acheteur" class="btn_infoPerso_final_vendeur text-uppercase detail_style">Modifier</button>
                    <button onclick="annulModif_infoPersoVendeur()" type="button" id="annulModif_infoPersoL_acheteur" class="btn_infoPerso_final_vendeur text-uppercase detail_style">Annuler Modif</button>
                    <button onclick="reset_infoPersoVendeur()" type="button" id="reset_infoPersoL_acheteur" class="btn_infoPerso_final_vendeur text-uppercase detail_style">Reset</button>
                    <button type="submit" id="submit_valider_infoPerso_vendeur" name="submit_valider_infoPersoL_acheteur" class="btn_infoPerso_final_vendeur text-uppercase detail_style">Valider</button>
                </div>

                <div class="col-1"></div>
            </div>
        </form>

    </div>

    <div class="col-2"></div>
</div>

<?php
    include("footer.php");
?>
