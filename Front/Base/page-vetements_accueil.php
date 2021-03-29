
<?php
    $title="Page maison";
    require "head.php";
        include("../../Bdd/cnx.php");
        session_start();
        $queryCountItems = mysqli_query($con, "select count(id_item) as total from item"); //4
        $queryAllItems = mysqli_query($con, "select name, price , brand, quantity, description,photo, is_negotiated, is_bidding from item,seller where seller.id_seller=item.id_seller");// Tableau liste
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

<div class="vetement_general">
    <img class="image_vetement_general position-relative" src="../../Image/vetement-general.png" alt="vetement-general">
    <div class="deco_marque_general position-absolute position-absolute top-0 end-0">
        <img class="img_icon_sale position-absolute top-50 start-0 translate-middle-y" src="../../Image/icon_sale.png" alt="icon_sale">
        <p class="texte_deco_marque_general texte_style text-uppercase position-absolute top-50 start-50 translate-middle">vêtements</p> 
    </div>
    <div class="class_separation"></div>
</div>

<div class="vetement_details">
    <div class="navbar_vetement">
        <ul class="navbar_vetement_details detail_style centrer">
                <li><a href="#">T-SHIRT</a></li>
                <li><a href="#">SWEAT-SHIRT</a></li>
                <li><a href="#">PULL</a></li>
                <li><a href="#">CAP</a></li>
                <li><a href="#">MEN</a></li>
                <li><a href="#">WOMMEN</a></li>
        </ul>
    </div>
</div>

<div class="vetement_liste_total row">
    <!-- Premiere ligne -->
    <div class="col-1"></div>

    <div class="col-10">
        <div class="row">
        <?php
        // Tota items
        if($row = mysqli_fetch_assoc($queryCountItems)){
            $total = $row['total'];
            for ($i=0; $i<=$total;$i++){
                if($rowAllItems = mysqli_fetch_assoc($queryAllItems)){
                    $nameItems = $rowAllItems['name'];
                    $prixItems = $rowAllItems['price'];
                    $brandItems = $rowAllItems['brand'];
                    $descriptionItems = $rowAllItems['description'];
                
                    // echo "<H1> Nom produit: ".$nameItems."</H1><br>";
                    // echo "<h3> prix: ".$prixItems." $ </h3><br>";
                    // echo "<p> Description: ".$descriptionItems." $ </p><br>";
                    ?>
                    <div class=" vetement_liste_un_par_un col-3 mb-5">
                        <div class="img_vetement_presentation">
                            <img class="img_vetement_sale" src="../../Image/chaussure.png" alt="chaussure">
                            <div class="class_separation2"></div>
                        </div>

                        <div class="vetement_liste_details mt-2 position-relative">
                            <div class="vetement_liste_details_gauche">
                                <div class="detail_style_titre detail_style"><?php echo $nameItems ?></div> 
                                <div class="detail_style_marque detail_style"><?php echo $brandItems ?></div> 
                            </div>
                            <div class="vetement_liste_details_droite">
                                <p class="detail_style_prix texte_style"><?php echo $prixItems ?> €</p>
                            </div>
                            <center><button class="btn_ajouter_article position-absolute bottom-0 start-50 translate-middle-x">ADD TO CART</button></center>
                        </div>
                    </div>

            <?php
                }
            }

        }
        ?>
        </div>
        
    </div>
    
    <div class="col-1"></div>

</div>

<!-- Modal negociation-->
<div class="modal fade" id="nego_prix_vetement" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title titre_modal_prix_nego texte_style text-uppercase" id="staticBackdropLabel">Choose a price</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mt-2">
                    <input type="text" name="quantite_nego_vetement" class="quantite_nego_vetement" placeholder="Quantité">
                    <input type="text" name="prix_nego_vetement" class="prix_nego_vetement">€
                    <br><br>
                    <span class="condition_prix_nego">If you offer a price and this price is accepted by the seller, you will be automatically charged.</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="subit_btn_nego_prix_vetement" class="btn btn-primary">Send</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    include("footer.php");
?>