<?php
    $title="Confirmation";
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
                            <a class="nav-link" href="../../Front/Base/connexion.php">
                                <img id="img_nav_user" src="../../Image/user.png" alt="user">
                            </a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav>

<div class="confirm_register_general position-relative">

    <div class="toast-area" id="toasts">
        <div style="display: none">
            <div class="toast" id="clonemother">
                <div class="toast-content">
                    <div class="toast_deco_gauche"></div>
                    <div class="toast_icon">
                        &#x2714
                    </div>
                    <div class="toast_text">
                        <p class="toast_text_titre">Success</p>
                        <p class="toast_text_message">Inscription valider</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="confirm_register_div position-absolute top-50 start-50 translate-middle shadow">
        <div class="confirm_register_titre position-absolute top-0 start-50 translate-middle-x">
            <h2 class="text-uppercase texte_style centrer">BIENVENUE</h2>
        </div>
        
        <div class="confirm_register_contenu position-absolute bottom-0 start-0">
            <div class="confirm_register_contenu2 position-absolute top-50 start-50 translate-middle">
                <p class="text-uppercase msg_confirm_register">
                    Vous êtes maintenant inscrit
                </p>
                <br><br>
                <a href="../../Front/Base/connexion.php" class="confirm_register_to_connexion">Sign up</a>
            </div>
        </div>
    </div>
</div>

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

<script>
    function animationInscription(){
        let child = document.getElementById('clonemother');
        let clone = child.cloneNode(true);
        let node = document.getElementById("toasts").appendChild(clone);
        console.log(node.childNodes);

        setTimeout(function() {
            if(node) {
                node.style.animation = "toast .5s ease-out forwards";
                setTimeout(() => {node.remove();} ,500);
            }
        },3000);
    }

    window.onload=animationInscription();
</script>

<?php
    include("footer.php");
?>