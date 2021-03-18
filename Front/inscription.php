<?php
    $title="Inscription";
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
                        <a class="nav-link" href="connexion.php">
                            <img id="img_nav_user" src="../Image/user.png" alt="panier">
                        </a>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</nav>

<div class="inscription_general position-relative">

    <!-- Notification success -->
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

    <div class="inscription_div position-absolute top-50 start-50 translate-middle shadow">
        <div class="inscription_titre row position-absolute top-0 start-50 translate-middle-x">
            <div id="inscription_titre_premier" class="col-6 position-relative">
                <button class="btn_inscription_titre_premier position-absolute top-50 start-50 translate-middle text_uppercase texte_style">Acheteur</button>
            </div>

            <div id="inscription_titre_deuxieme" class="col-6 position-relative">
                <button class="btn_inscription_titre_deuxieme position-absolute top-50 start-50 translate-middle text_uppercase texte_style">Vendeur</button>
            </div>
        </div>
        
        <div class="inscription_contenu position-absolute bottom-0 start-0">

            <form action="../Bdd/register.php" method="POST">
                <div class="row inscription_contenu_acheteur">
                    <div class="col-1"></div>

                    <div class="col-5">
                        <h3 class="inscription_detail_titre1 text-uppercase detail_style">information personnelles</h3>
                        
                        <input id="nom_acheteur" name="nom_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Nom">
                        <br>
                        <span id="nomErreur_acheteur"></span>
                        <br>
                        <input id="prenom_acheteur" name="prenom_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Prénom">
                        <br>
                        <span id="prenomErreur_acheteur"></span>
                        <br>
                        <input id="telephone_acheteur" name="telephone_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Téléphone">
                        <br>
                        <span id="telephoneErreur_acheteur"></span>
                        <br>
                        <input id="mail_acheteur" name="mail_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Email">
                        <br>
                        <span id="mailErreur_acheteur"></span>
                        <br>
                        <input id="mdp_acheteur" name="mdp_acheteur" type="password" class="inscription_contenu_details_acheteur" placeholder="Mot de passe">
                        <br>
                        <span id="mdpErreur_acheteur"></span>
                        <br>
                        <input id="mdp2_acheteur" name="mdp2_acheteur" type="password" class="inscription_contenu_details_acheteur" placeholder="Confirmation mot de passe">
                        <br>
                        <span id="mdp2Erreur_acheteur"></span>
                    </div>

                    <div class="col-5" style="margin-left:50px!important;">
                        <h3 class="inscription_detail_titre2 text-uppercase detail_style">information de livraison</h3>
                        
                        <input id="adresse1_acheteur" name="adresse1_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Adresse 1">
                        <br>
                        <span id="adresse1Erreur_acheteur"></span>
                        <br>
                        <input id="adresse2_acheteur" name="adresse2_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Adresse 2">
                        <br>
                        <span id="adresse2Erreur_acheteur"></span>
                        <br>
                        <input id="pays_acheteur" name="pays_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Pays">
                        <br>
                        <span id="paysErreur_acheteur"></span>
                        <br>
                        <input id="ville_acheteur" name="ville_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Ville">
                        <br>
                        <span id="villeErreur_acheteur"></span>
                        <br>
                        <input id="codepostal_acheteur" name="codepostal_acheteur" type="text" class="inscription_contenu_details_acheteur" placeholder="Code Postal">
                        <br>
                        <span id="codepostalErreur_acheteur"></span>
                        <br>
                        <input id="check_condition_inscription_acheteur" class="condition_inscription" type="checkbox">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Accepter les condition d'inscription</a>
                        <br>
                        <a class="retour_login_inscription" href="connexion.php">Login</a>
                        <button type="button" onclick="reset_acheteur()" class="btn_reset_inscription_acheteur text-uppercase detail_style">Reset</button>
                    </div>

                    <div class="col-1"></div>

                    <div class="col-12">
                        <button type="submit" id="submit_inscription_acheteur" name="submit_inscription_acheteur" class="btn text-light btn_inscription_final_acheteur text-uppercase detail_style position-absolute bottom-0 start-0">S'inscrire</button>
                    </div>
                </div>
            </form>

            <form action="../Bdd/register.php" method="POST" enctype="multipart/form-data">
                <div class="row inscription_contenu_vendeur">
                    <div class="col-1"></div>

                    <div class="col-5">
                        <h3 class="inscription_detail_titre1 text-uppercase detail_style">information générale</h3>
                        
                        <input id="nomMarque_vendeur" name="nomMarque_vendeur" class="inscription_contenu_details_vendeur" placeholder="Nom de la marque">
                        <br>
                        <span id="nomMarqueErreur_vendeur"></span>
                        <br>
                        <input id="telephone_vendeur" name="telephone_vendeur" class="inscription_contenu_details_vendeur" placeholder="Téléphone">
                        <br>
                        <span id="telephoneErreur_vendeur"></span>
                        <br>
                        <input id="mail_vendeur" name="mail_vendeur" class="inscription_contenu_details_vendeur" placeholder="Email">
                        <br>
                        <span id="mailErreur_vendeur"></span>
                        <br>
                        <input id="mdp_vendeur" name="mdp_vendeur" type="password" class="inscription_contenu_details_vendeur" placeholder="Mot de passe">
                        <br>
                        <span id="mdpErreur_vendeur"></span>
                        <br>
                        <input id="mdp2_vendeur" name="mdp2_vendeur" type="password" class="inscription_contenu_details_vendeur" placeholder="Confirmation mot de passe">
                        <br>
                        <span id="mdp2Erreur_vendeur"></span>
                        <br>
                        <a class="retour_login_inscription" href="connexion.php">Login</a>
                        <button type="button" onclick="reset_vendeur()" class="btn_reset_inscription_vendeur text-uppercase detail_style">Reset</button>
                    </div>

                    <div class="col-5" style="margin-left:50px!important;">
                        <img id="img_inscription_choix_vendeur">
                        <div class="img_inscription_general">
                            <span class="file_inscription_img">
                                <span onclick="choix_image_vendeur()" class="btn btn-default btn_choix_img_vendeur_inscription">
                                    Browse <input type="file" id="file_interrieur_inscription_img">
                                </span>
                            </span>
                            <input type="text" name="img" class="form-control" readonly>
                        </div>
                        <br><br>
                        <input id="check_condition_inscription_vendeur" class="condition_inscription" type="checkbox">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Accepter les condition d'inscription</a>
                    </div>

                    <div class="col-1"></div>

                    <div class="col-12">
                        <button type="submit" id="submit_inscription_vendeur" name="submit_inscription_vendeur" class="btn text-light btn_inscription_final_vendeur text-uppercase detail_style position-absolute bottom-0 start-0">S'inscrire</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal condition -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title modal_condition_inscription_titre texte_style text-uppercase" id="staticBackdropLabel">Condition d'inscription</h5>
        </div>
        <div class="modal-body modal_condition_inscription_texte">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quasi velit eveniet, saepe harum exercitationem unde eum quisquam earum magnam vero distinctio maiores consequuntur sint itaque? Itaque nulla porro expedita.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, sunt! Deleniti odio facere illum minus non in tempora mollitia, labore architecto animi cupiditate sequi unde, facilis doloremque velit a est.
            <br>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, suscipit id, harum cupiditate deleniti obcaecati dicta voluptas fuga eligendi laboriosam reprehenderit odit aspernatur quo, architecto ipsam necessitatibus ut expedita in.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem tempora laborum eveniet accusamus voluptate doloribus ratione aut nostrum? Ut nobis praesentium in illo id consequatur, saepe eaque dolorum vero nihil?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minus reprehenderit aut earum necessitatibus? Vero ipsam dolorum deleniti voluptatem suscipit eaque, omnis animi accusantium corporis consectetur facere at autem officiis.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur, at saepe, voluptate eius incidunt est iste totam laboriosam assumenda recusandae doloremque quis delectus perspiciatis. Iste cupiditate modi accusamus culpa ducimus?
            <br><br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis odio magnam provident laborum omnis tenetur ipsum recusandae. Repudiandae minima assumenda dolores porro alias quis itaque cumque! Nostrum accusamus quos impedit?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quasi velit eveniet, saepe harum exercitationem unde eum quisquam earum magnam vero distinctio maiores consequuntur sint itaque? Itaque nulla porro expedita.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque, sunt! Deleniti odio facere illum minus non in tempora mollitia, labore architecto animi cupiditate sequi unde, facilis doloremque velit a est.
            <br>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, suscipit id, harum cupiditate deleniti obcaecati dicta voluptas fuga eligendi laboriosam reprehenderit odit aspernatur quo, architecto ipsam necessitatibus ut expedita in.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem tempora laborum eveniet accusamus voluptate doloribus ratione aut nostrum? Ut nobis praesentium in illo id consequatur, saepe eaque dolorum vero nihil?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo minus reprehenderit aut earum necessitatibus? Vero ipsam dolorum deleniti voluptatem suscipit eaque, omnis animi accusantium corporis consectetur facere at autem officiis.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur, at saepe, voluptate eius incidunt est iste totam laboriosam assumenda recusandae doloremque quis delectus perspiciatis. Iste cupiditate modi accusamus culpa ducimus?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis odio magnam provident laborum omnis tenetur ipsum recusandae. Repudiandae minima assumenda dolores porro alias quis itaque cumque! Nostrum accusamus quos impedit?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Understood</button>
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

<?php
    include("footer.php");
?>

