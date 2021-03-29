<?php
    $title="Se connecter";
    require "head.php";
?>

<nav class="navbar navbar_menu_principal fixed-top navbar-expand-lg shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class="position-absolute top-0 start-0" id="img_logo_navbar"
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
                            Maison
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="base.php">sheets</a></li>
                            <li><a class="dropdown-item" href="compte_a_rebours.php">pillow</a></li>
                            <li><a class="dropdown-item" href="confirm_register.php">decoration</a></li>
                            <li><a class="dropdown-item" href="page-maison_accueil.php">ALL</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown nav_regul">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Vêtement
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="recupImage.php">T-SHIRT</a></li>
                            <li><a class="dropdown-item" href="infoPerso.php">SWEAT-SHIRT</a></li>
                            <li><a class="dropdown-item" href="listeArticle.php">PULL</a></li>
                            <li><a class="dropdown-item" href="listeVendeur.php">CAP</a></li>
                            <li><a class="dropdown-item" href="ajoutArticle.php">MEN</a></li>
                            <li><a class="dropdown-item" href="#">WOMMEN</a></li>
                            <li><a class="dropdown-item" href="page-vetements_accueil.php">ALL</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav_regul" style="margin-right:100px!important">
                        <a class="nav-link" href="enchere_accueil.php">Enchère</a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                            <a class="nav-link" href="connexion.php">
                                <img id="img_nav_user" src="../../Image/user.png" alt="user">
                            </a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav>

<form action="../../Bdd/login.php" method="POST">
    <div class="se_connecter_general position-relative">
        <div class="se_connecter_div position-absolute top-50 start-50 translate-middle shadow">
            <div class="se_connecter_titre position-absolute top-0 start-50 translate-middle-x">
                <h2 class="text-uppercase texte_style centrer">Se connecter</h2>
            </div>
            
            <div class="se_connecter_contenu position-absolute bottom-0 start-0">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <input class="se_connecter_email detail_style" name="mail" placeholder="Email">
                    <br>
                    <input class="se_connecter_mdp detail_style" name="mdp" type="password" placeholder="Mot de passe">
                    <br>
                    <input type="submit" name="submit" value="Connexion" class="text-uppercase btn_se_connecter texte_style">
                    <br>
                    <a href="#" class="connecter_mdp_oublié">Mot de passe oublié</a>
                    <br><br><br><br>
                    <a href="inscription.php" class="connecter_mais_inscription centrer position-absolute bottom-0 start-50 translate-middle-x">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</form>

<div id="Clouds">
    <div class="Cloud Foreground"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Foreground"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Foreground"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Foreground"></div>
    <div class="Cloud Background"></div>
    <div class="Cloud Background"></div>
</div>

<?php
    include("footer.php");
?>