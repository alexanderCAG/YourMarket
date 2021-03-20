<?php
    $title="Informations personnelles";
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

<div class="genale_page_infoPerso position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle general_infoPerso_div">
        <p class="titre_general_infoPerso text-uppercase centrer">
            Informations personnelles
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<div class="contenu_general_infoPerso_acheteur row">
    <div class="col-1"></div>

    <div class="col-3 infoPerso_paiement">

        <form action="../Bdd/infoPerso_paiement.php" method="POST">
            <div>
                <h3 class="infoPerso_detail_titre1 text-uppercase centrer detail_style" style="margin-bottom:50px!important">Information de paiement</h3>

                <div class="row">

                    <div class="col-1"></div>

                    <div class="col-10">
                        <input id="infoPerso_typeCarte_acheteur" name="infoPerso_typeCarte_acheteur" type="text" class="infoPaiement_contenu_details_acheteur centrer" placeholder="Type de carte">
                        <br>
                        <span id="infoPerso_typeCarteErreur_acheteur"></span>
                        <br>

                        <div class="row">
                            <div class="col-6">
                                <input type="radio" name="infoPerso_carte_bancaire" id="infoPerso_carte_payement_amex" value="carte_payement_amex">
                                <img class="image_infoPayment" src="../Image/carte_payement_amex.png" alt="carte_payement_amex">
                            </div>

                            <div class="col-6">
                                <input type="radio" name="infoPerso_carte_bancaire" id="infoPerso_carte_payement_cb" value="carte_payement_cb">
                                <img class="image_infoPayment" src="../Image/carte_payement_cb.png" alt="carte_payement_cb">
                            </div>
                        </div>
                        <div class="row" style="margin-bottom:20px!important">
                            <div class="col-6">
                                <input type="radio" name="infoPerso_carte_bancaire" id="infoPerso_carte_payement_mastercard" value="carte_payement_mastercard">
                                <img class="image_infoPayment" src="../Image/carte_payement_mastercard.png" alt="carte_payement_mastercard">
                            </div>

                            <div class="col-6">
                                <input type="radio" name="infoPerso_carte_bancaire" id="infoPerso_carte_payement_visa" value="carte_payement_visa">
                                <img class="image_infoPayment" src="../Image/carte_payement_visa.png" alt="carte_payement_visa">
                            </div>
                        </div>

                        <input id="infoPerso_numeroCarte_acheteur" name="infoPerso_numeroCarte_acheteur" type="text" class="infoPaiement_contenu_details_acheteur" placeholder="Numéro de carte">
                        <br>
                        <span id="infoPerso_numeroCarteErreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_nomCarte_acheteur" name="infoPerso_nomCarte_acheteur" type="text" class="infoPaiement_contenu_details_acheteur" placeholder="Nom de carte">
                        <br>
                        <span id="infoPerso_nomCarteErreur_acheteur"></span>
                        <br>
                        <label style="color:#888888;">Date d'expiration</label><br>
                        <input id="infoPerso_dateExpiration_acheteur" name="infoPerso_dateExpiration_acheteur" type="date" class="infoPaiement_contenu_details_acheteur" placeholder="Date d'expiration">
                        <br>
                        <span id="infoPerso_dateExpirationErreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_codeSecret_acheteur" name="infoPerso_codeSecret_acheteur" type="text" class="infoPaiement_contenu_details_acheteur" placeholder="Code secret">
                        <br>
                        <span id="infoPerso_codeSecretErreur_acheteur"></span>
                        <br><br>

                        <button onclick="modif_infoPerso_paiement()" type="button" id="modif_infoPaiement_acheteur" class="btn_infoPaiement_final_acheteur text-uppercase detail_style">Modifier</button>
                        <button onclick="annulModif_infoPerso_paiement()" type="button" id="annulModif_infoPaiement_acheteur" class="btn_infoPaiement_final_acheteur text-uppercase detail_style">Annuler Modif</button>
                        <button onclick="reset_infoPerso_paiement()" type="button" id="reset_infoPaiement_acheteur" class="btn_infoPaiement_final_acheteur text-uppercase detail_style">Reset</button>
                        <button type="button" id="submit_valider_infoPaiement_acheteur" name="submit_valider_infoPaiement_acheteur" class="btn_infoPaiement_final_acheteur text-uppercase detail_style">Valider</button>
                    </div>

                    <div class="col-1"></div>
                    
                </div>

            </div>
            
        </form>
        
    </div>
    
    <div class="col-1"></div>

    <div class="col-6 infoPerso_livraison">

        <form action="../Bdd/infoPerso_paiement.php" method="POST">
            <div class="row">
                <div class="row">
                    <div class="col-1"></div>

                    <div class="col-5">
                        <h3 class="infoPerso_detail_titre2 text-uppercase detail_style" style="margin-bottom:50px!important;">information personnelles</h3>
                        
                        <input id="infoPerso_nom_acheteur" name="infoPerso_nom_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Nom">
                        <br>
                        <span id="infoPerso_nomErreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_prenom_acheteur" name="infoPerso_prenom_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Prénom">
                        <br>
                        <span id="infoPerso_prenomErreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_telephone_acheteur" name="infoPerso_telephone_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Téléphone">
                        <br>
                        <span id="infoPerso_telephoneErreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_mail_acheteur" name="infoPerso_mail_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Email">
                        <br>
                        <span id="infoPerso_mailErreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_mdp_acheteur" name="infoPerso_mdp_acheteur" type="password" class="infoPersoL_contenu_details_acheteur" placeholder="Mot de passe">
                        <br>
                        <span id="infoPerso_mdpErreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_mdp2_acheteur" name="infoPerso_mdp2_acheteur" type="password" class="infoPersoL_contenu_details_acheteur" placeholder="Confirmation mot de passe">
                        <br>
                        <span id="infoPerso_mdp2Erreur_acheteur"></span>
                        <br>
                    </div>

                    <div class="col-5" style="margin-left:50px!important;" >
                        <h3 class="infoPerso_detail_titre3 text-uppercase detail_style" style="margin-bottom:50px!important">information de livraison</h3>
                        
                        <input id="infoPerso_adresse1_acheteur" name="infoPerso_adresse1_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Adresse 1">
                        <br>
                        <span id="infoPerso_adresse1Erreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_adresse2_acheteur" name="infoPerso_adresse2_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Adresse 2">
                        <br>
                        <span id="infoPerso_adresse2Erreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_pays_acheteur" name="infoPerso_pays_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Pays">
                        <br>
                        <span id="infoPerso_paysErreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_ville_acheteur" name="infoPerso_ville_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Ville">
                        <br>
                        <span id="infoPerso_villeErreur_acheteur"></span>
                        <br>
                        <input id="infoPerso_codepostal_acheteur" name="infoPerso_codepostal_acheteur" type="text" class="infoPersoL_contenu_details_acheteur" placeholder="Code Postal">
                        <br>
                        <span id="infoPerso_codepostalErreur_acheteur"></span>
                        <br>
                    </div>

                    <div class="col-1"></div>
                </div>
                
                <div class="row">
                    <div class="col-1"></div>

                    <div class="col-10" style="margin-top:50px!important">
                        <button onclick="modif_infoPersoL_paiement()" type="button" id="modif_infoPersoL_acheteur" class="btn_infoPersoL_final_acheteur text-uppercase detail_style">Modifier</button>
                        <button onclick="annulModif_infoPersoL_paiement()" type="button" id="annulModif_infoPersoL_acheteur" class="btn_infoPersoL_final_acheteur text-uppercase detail_style">Annuler Modif</button>
                        <button onclick="reset_infoPersoL_paiement()" type="button" id="reset_infoPersoL_acheteur" class="btn_infoPersoL_final_acheteur text-uppercase detail_style">Reset</button>
                        <button type="button" id="submit_valider_infoPersoL_acheteur" name="submit_valider_infoPersoL_acheteur" class="btn_infoPersoL_final_acheteur text-uppercase detail_style">Valider</button>
                    </div>

                    <div class="col-1"></div>
                </div>
            </div>
        </form>

    </div>

    <div class="col-1"></div>

</div>

<?php
    include("footer.php");
?>
