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

<div class="contenu_general_infoPerso_acheteur centrer row">
    <div class="col-1"></div>

    <div class="col-3">

        <h3 class="inscription_detail_titre3 text-uppercase detail_style" style="margin-bottom:50px!important">Information de paiement</h3>

        <input id="typeCarte_acheteur" name="typeCarte_acheteur" type="text" class="inscription_contenu_details_acheteur centrer" placeholder="Type de carte">
        <br>
        <span id="typeCarteErreur_acheteur"></span>
        <br>

        <div class="row">
            <div class="col-6">
                <input type="radio" name="carte_bancaire" id="carte_payement_amex" value="carte_payement_amex">
                <img class="image_payment_inscription" src="../Image/carte_payement_amex.png" alt="carte_payement_amex">
            </div>

            <div class="col-6">
                <input type="radio" name="carte_bancaire" id="carte_payement_cb" value="carte_payement_cb">
                <img class="image_payment_inscription" src="../Image/carte_payement_cb.png" alt="carte_payement_cb">
            </div>
        </div>
        <div class="row" style="margin-bottom:20px!important">
            <div class="col-6">
                <input type="radio" name="carte_bancaire" id="carte_payement_mastercard" value="carte_payement_mastercard">
                <img class="image_payment_inscription" src="../Image/carte_payement_mastercard.png" alt="carte_payement_mastercard">
            </div>

            <div class="col-6">
                <input type="radio" name="carte_bancaire" id="carte_payement_visa" value="carte_payement_visa">
                <img class="image_payment_inscription" src="../Image/carte_payement_visa.png" alt="carte_payement_visa">
            </div>
        </div>

        <input id="numeroCarte_acheteur" name="numeroCarte_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Numéro de carte">
        <br>
        <span id="numeroCarteErreur_acheteur"></span>
        <br>
        <input id="nomCarte_acheteur" name="nomCarte_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Nom de carte">
        <br>
        <span id="nomCarteErreur_acheteur"></span>
        <br>
        <label style="color:#888888;">Date d'expiration</label>
        <input id="dateExpiration_acheteur" name="dateExpiration_acheteur" type="date" class="inscription_contenu_details_acheteur" placeholder="Date d'expiration">
        <br>
        <span id="dateExpirationErreur_acheteur"></span>
        <br>
        <input id="codeSecret_acheteur" name="codeSecret_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Code secret">
        <br>
        <span id="codeSecretErreur_acheteur"></span>
        <br>

    </div>

    <div class="col-1"></div>

    <div class="col-6">

    </div>

    <div class="col-1"></div>

</div>

<?php
    include("footer.php");
?>
