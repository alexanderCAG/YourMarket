
<?php

    include("cnx.php");
    session_start();

    $query_nav_acheteur = mysqli_query($con, "select type from users where type = 'acheteur'");
    $query_nav_vendeur = mysqli_query($con, "select type from users where type = 'vendeur'");
    $query_nav_admin = mysqli_query($con, "select type from users where type = 'admin'");


	if ($query_nav_acheteur != 0){?>
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
                        <img id="img_nav_panier" src="Image/panier.png" alt="panier"> <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">0
                            <span class="visually-hidden">unread messages</span></span>
                    </button>
                </a>
            </li>
            <li class="nav_user position-absolute top-0 end-0">
                <a class="nav-link" href="#">
                    <img id="img_nav_user" src="Image/user.png" alt="panier">
                </a>
            </li>
        </ul>
    <?php }
	elseif ($query_nav_vendeur != 0){ ?>
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
                <a class="nav-link" href="connexion.php">
                    <img id="img_nav_user" src="Image/user.png" alt="panier">
                </a>
            </li>
        </ul>
    <?php }
    elseif ($query_nav_admin != 0){ ?>
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
            <li class="nav-item nav_regul">
                <a class="nav-link" href="#">Liste Vendeur</a>
            </li>
            <li class="nav-item nav_regul">
                <a class="nav-link" href="#">Liste Article</a>
            </li>
            <li class="nav-item last_nav_title nav_regul">
                <a class="nav-link" href="#">Statistique</a>
            </li>
            <li class="nav_user position-absolute top-0 end-0">
                <a class="nav-link" href="connexion.php">
                    <img id="img_nav_user" src="Image/user.png" alt="panier">
                </a>
            </li>
        </ul>
    <?php }
    else{ ?> 
        
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
                        <img id="img_nav_panier" src="Image/panier.png" alt="panier"> <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">0
                            <span class="visually-hidden">unread messages</span></span>
                    </button>
                </a>
            </li>
            <li class="nav_user position-absolute top-0 end-0">
                <a class="nav-link" href="connexion.php">
                    <img id="img_nav_user" src="Image/user.png" alt="panier">
                </a>
            </li>
        </ul>

        <?php 
        // echo "<script type='text/javascript'> alert('Invalid Connecxion')</script>";
        // echo "<script language='javascript' type='text/javascript'> location.href='connexion.php' </script>";
    }
?>


<!-- base -->
<!-- <nav class="navbar fixed-top navbar-expand-lg shadow">
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
                            Maison
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="base.php">sheets</a></li>
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
                                <img id="img_nav_panier" src="Image/panier.png" alt="panier"> <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">0
                                    <span class="visually-hidden">unread messages</span></span>
                            </button>
                        </a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                        <a class="nav-link" href="connexion.php">
                            <img id="img_nav_user" src="Image/user.png" alt="panier">
                        </a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav> -->

<!-- acheteur -->
<!-- <nav class="navbar fixed-top navbar-expand-lg shadow">
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
                                <img id="img_nav_panier" src="Image/panier.png" alt="panier"> <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">0
                                    <span class="visually-hidden">unread messages</span></span>
                            </button>
                        </a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                        <a class="nav-link" href="#">
                            <img id="img_nav_user" src="Image/user.png" alt="panier">
                        </a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav> -->

<!-- vendeur -->
<!-- <nav class="navbar fixed-top navbar-expand-lg shadow">
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
                        <a class="nav-link" href="connexion.php">
                            <img id="img_nav_user" src="Image/user.png" alt="panier">
                        </a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav> -->

<!-- admin -->
<!-- <nav class="navbar fixed-top navbar-expand-lg shadow">
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
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="#">Liste Vendeur</a>
                    </li>
                    <li class="nav-item nav_regul">
                        <a class="nav-link" href="#">Liste Article</a>
                    </li>
                    <li class="nav-item last_nav_title nav_regul">
                        <a class="nav-link" href="#">Statistique</a>
                    </li>
                    <li class="nav_user position-absolute top-0 end-0">
                        <a class="nav-link" href="connexion.php">
                            <img id="img_nav_user" src="Image/user.png" alt="panier">
                        </a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav> -->