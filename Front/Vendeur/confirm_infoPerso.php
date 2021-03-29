<?php
    $title="Confirmation";
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

<div class="confirm_infoPerso_general position-relative">

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

    <div class="confirm_infoPerso_div position-absolute top-50 start-50 translate-middle shadow">
        <div class="confirm_infoPerso_titre position-absolute top-0 start-50 translate-middle-x">
            <h2 class="text-uppercase texte_style centrer">Complété</h2>
        </div>
        
        <div class="confirm_infoPerso_contenu position-absolute bottom-0 start-0">
            <div class="confirm_infoPerso_contenu2 position-absolute top-50 start-50 translate-middle">
                <p class="text-uppercase msg_confirm_infoPerso">
                    Vous informations sont à jour
                </p>
                <br><br>
                <a href="listeArticle.php" class="confirm_infoPerso_to_index">Liste Article</a>
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
    function animationInfoPerso(){
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

    window.onload=animationInfoPerso();
</script>

<?php
    include("footer.php");
?>