
<!-- <?php

include("cnx.php");

$query_nav_acheteur = mysqli_query($con, "select type_user from buyer where type_user = 2");
$query_nav_vendeur = mysqli_query($con, "select type_user from seller where type_user = 1");
$query_nav_admin = mysqli_query($con, "select type_user from admin where type_user = 0 ");
$admin = mysqli_fetch_array($query_nav_admin);
$vendeur = mysqli_fetch_array($query_nav_vendeur);
$acheteur = mysqli_fetch_array($query_nav_acheteur);

echo "<br> <br> <br><br><br> <br> <br> <br> <br> <br> <br>";

if($row = mysqli_fetch_assoc($query_nav_admin)){
    $type_user = $row['type_user'];
    echo "<H1> Admin: ".$type_user."</H1>";
    

}

if($row = mysqli_fetch_assoc($query_nav_vendeur)){
    $type_user = $row['type_user'];
    echo "<H1> Vendeur: ".$type_user."</H1>";
}
if($row = mysqli_fetch_assoc($query_nav_acheteur)){
    $type_user = $row['type_user'];
    echo "<H1> Acheteur: ".$type_user."</H1>";
}
if (isset($acheteur) && $acheteur = 1){
    ?>
    <nav class="navbar fixed-top navbar-expand-lg shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="position-absolute top-0 start-0" id="img_logo_navbar"
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
                            <a class="nav-link" href="enchere.php">Enchère</a>
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
                            <div class="btn-group">
                                <a class="nav-link"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img id="img_nav_user" src="../Image/user.png" alt="user">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><button class="dropdown-item" type="button"><?php echo $_SESSION['email'];?> </button></li>
                                    <li><span class="dropdown-item" ><a href="../Front/infoPerso.php" class="text-decoration-none">My account</a></span></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><span class="dropdown-item" ><a href="../Bdd/logout.php" class="text-decoration-none">Logout <i class="fas fa-sign-out-alt text-dark "></i></a> </span></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </nav>
<?php }
elseif (isset($vendeur) && $vendeur = 1){
    ?>
    <nav class="navbar fixed-top navbar-expand-lg shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="position-absolute top-0 start-0" id="img_logo_navbar"
                    src="../Image/logo_navbar.png" alt="logo_navbar"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <form class="form-inline my-2 my-lg-0">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav text-uppercase">
                        <li class="nav-item nav_regul">
                            <a class="nav-link" href="#">Ajouter Article</a>
                        </li>
                        <li class="nav-item nav_regul">
                            <a class="nav-link" href="#">Liste Article</a>
                        </li>
                        <li class="nav-item last_nav_title nav_regul">
                            <a class="nav-link" href="#">Statistique</a>
                        </li>
                        <li class="nav_user position-absolute top-0 end-0">
                            <div class="btn-group">
                                <a class="nav-link"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img id="img_nav_user" src="../Image/user.png" alt="user">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><button class="dropdown-item" type="button">?php echo $_SESSION['email'];?> </button></li>
                                    <li><span class="dropdown-item" ><a href="../Front/infoPerso.php" class="text-decoration-none">My account</a></span></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><span class="dropdown-item" ><a href="../Bdd/logout.php" class="text-decoration-none">Logout <i class="fas fa-sign-out-alt text-dark "></i></a> </span></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </nav>
<?php }
elseif (isset($_SESSION['email']) && $admin = 1){ 
    ?>
<nav class="navbar fixed-top navbar-expand-lg shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="position-absolute top-0 start-0" id="img_logo_navbar"
                src="Image/logo_navbar.png" alt="logo_navbar"></a>
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
                            <li><a class="dropdown-item" href="base.php">Ajouter un article</a></li>
                            <li><a class="dropdown-item" href="#">Liste des articles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="#">Liste Vendeur</a>
                    </li>

                    <li class="nav-item last_nav_title nav_regul">
                        <a class="nav-link" href="#">Statistique</a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                        <div class="btn-group">
                            <a class="nav-link"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="img_nav_user" src="../Image/user.png" alt="user">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><button class="dropdown-item" type="button"><?php echo $_SESSION['email'];?> </button></li>
                                <li><span class="dropdown-item" ><a href="../Front/infoPerso.php" class="text-decoration-none">My account</a></span></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><span class="dropdown-item" ><a href="../Bdd/logout.php" class="text-decoration-none">Logout <i class="fas fa-sign-out-alt text-dark "></i></a> </span></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav> 
<?php }else{
    ?>



<?php
}
?> -->


<!-- base -->
<!-- <nav class="navbar navbar_menu_principal fixed-top navbar-expand-lg shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Front/index"><img class="position-absolute top-0 start-0" id="img_logo_navbar"
                src="Image/logo_navbar.png" alt="logo_navbar"></a>
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
                            <li><a class="dropdown-item" href="../Front/page-maison.php">ALL</a></li>
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
                            <li><a class="dropdown-item" href="../Front/page-vetements.php">ALL</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="../Front/enchere.php">Enchère</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Front/panier.php">Panier
                            <button type="button" class="nav_btn_panier btn position-relative">
                                <img id="img_nav_panier" src="Image/panier.png" alt="panier"> <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">0
                                    <span class="visually-hidden">unread messages</span></span>
                            </button>
                        </a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                        <a class="nav-link" href="../Front/connexion.php">
                            <img id="img_nav_user" src="Image/user.png" alt="user">
                        </a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav> -->

<!-- base v2 -->
<!-- <nav class="navbar navbar_menu_principal fixed-top navbar-expand-lg shadow">
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
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="enchere_accueil.php">Enchère</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panier_accueil.php">Panier
                            <button type="button" class="nav_btn_panier btn position-relative">
                                <img id="img_nav_panier" src="../Image/panier.png" alt="panier">
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">0
                                        <span class="visually-hidden"></span>
                                    </span>
                            </button>
                        </a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                            <a class="nav-link" href="../Front/connexion.php">
                                <img id="img_nav_user" src="../Image/user.png" alt="user">
                            </a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav>  -->

<!-- acheteur -->
<!-- <nav class="navbar navbar_menu_principal fixed-top navbar-expand-lg shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Front/index_accueil"><img class="position-absolute top-0 start-0" id="img_logo_navbar"
                src="Image/logo_navbar.png" alt="logo_navbar"></a>
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
                            <li><a class="dropdown-item" href="../Front/page-maison.php">ALL</a></li>
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
                            <li><a class="dropdown-item" href="../Front/page-vetements.php">ALL</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="../Front/enchere.php">Enchère</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Front/panier.php">Panier
                            <button type="button" class="nav_btn_panier btn position-relative">
                                <img id="img_nav_panier" src="Image/panier.png" alt="panier"> <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">0
                                    <span class="visually-hidden">unread messages</span></span>
                            </button>
                        </a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                        <div class="btn-group">
                            <a class="nav-link"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="img_nav_user" src="../Image/user.png" alt="user">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><button class="dropdown-item" type="button"><?php echo $_SESSION['email'];?> </button></li>
                                <li><span class="dropdown-item" ><a href="../Front/infoPerso.php" class="text-decoration-none">My account</a></span></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><span class="dropdown-item" ><a href="../Bdd/logout.php" class="text-decoration-none">Logout <i class="fas fa-sign-out-alt text-dark "></i></a> </span></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav> -->

<!-- vendeur -->
<!-- <nav class="navbar navbar_menu_principal fixed-top navbar-expand-lg shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="position-absolute top-0 start-0" id="img_logo_navbar"
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
                            Articles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="../Front/ajoutArticle.php">Ajouter un article</a></li>
                            <li><a class="dropdown-item" href="../Front/listeArticle.php">Liste des articles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="../Front/listeVendeur.php">Liste Vendeur</a>
                    </li>
                    <li class="nav-item last_nav_title nav_regul">
                        <a class="nav-link" href="#">Statistique</a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                        <div class="btn-group">
                            <a class="nav-link"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="img_nav_user" src="../Image/user.png" alt="user">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><button class="dropdown-item" type="button"><?php echo $_SESSION['email'];?> </button></li>
                                <li><span class="dropdown-item" ><a href="../Front/infoPerso.php" class="text-decoration-none">My account</a></span></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><span class="dropdown-item" ><a href="../Bdd/logout.php" class="text-decoration-none">Logout <i class="fas fa-sign-out-alt text-dark "></i></a> </span></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav> -->

<!-- admin -->
<!-- <nav class="navbar navbar_menu_principal fixed-top navbar-expand-lg shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="position-absolute top-0 start-0" id="img_logo_navbar"
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
                            Articles
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="../Front/ajoutArticle.php">Ajouter un article</a></li>
                            <li><a class="dropdown-item" href="../Front/listeArticle.php">Liste des articles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="../Front/listeVendeur.php">Liste Vendeur</a>
                    </li>
                    <li class="nav-item last_nav_title nav_regul">
                        <a class="nav-link" href="#">Statistique</a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                        <div class="btn-group">
                            <a class="nav-link"  id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <img id="img_nav_user" src="../Image/user.png" alt="user">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><button class="dropdown-item" type="button"><?php echo $_SESSION['email'];?></button></li>
                                <li><span class="dropdown-item" ><a href="../Front/infoPerso.php" class="text-decoration-none">My account</a></span></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><span class="dropdown-item" ><a href="../Bdd/logout.php" class="text-decoration-none">Logout <i class="fas fa-sign-out-alt text-dark "></i></a> </span></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav> -->