
<?php
    $title="Page maison";
    require "head.php";

    include("../../Bdd/cnx.php");
    $email_user = $_SESSION['email'];
    $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE email='$email_user'");

    if($row2 = mysqli_fetch_assoc($queryBuyer)){
        $id_buyer = $row2['id_buyer'];
        $queryCountItems = mysqli_query($con, "select count(id_basket) as total from basket where id_buyer='$id_buyer'"); //4
        $queryAllItems = mysqli_query($con, "select id_buyer, id_item, id_seller, name, price , quantity, description, photo, category, subcategory from basket where id_buyer='$id_buyer'");// 
    }
?>

<?php

if($row = mysqli_fetch_assoc($queryCountItems)){
    $total = $row['total'];

?>

<div class="genale_panier position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_panier text-uppercase">
            Panier
        </p>
        <p class="info_general_panier centrer detail_style">
            Vous avez <?php echo $total ?> articles
        </p>
    </div>
    
    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x"></div>
</div>

<div class="panier_total">

    <div class="panier_liste_article_un_par_un">
        <div class="row">
        <?php
            for ($i=0; $i<=$total;$i++){
                if($rowAllItems = mysqli_fetch_assoc($queryAllItems)){
                    $id_item = $rowAllItems['id_item'];
                    $id_buyer = $rowAllItems['id_buyer'];
                    $id_seller = $rowAllItems['id_seller'];
                    $nameItems = $rowAllItems['name'];
                    $prixItems = $rowAllItems['price'];
                    $quantityCadre = $rowAllItems['quantity'];
                    $descriptionItems = $rowAllItems['description'];
                    $photo = $rowAllItems['photo'];
                    $category = $rowAllItems['category'];
                    $subcategoryItems = $rowAllItems['subcategory'];
            ?>
            <div class="col-1"></div>

            <div class="col-10 listeArticle_liste_un_par_un">
                <div class="row">
                    <div class="col-5">
                        <img class="img_listeArticle" src="../../Image/chaussure.png" alt="chaussure"><br>
                    </div>

                    <div class="col-7 listeArticle_liste_details position-relative">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="listeArticle_info_titre texte_style text-uppercase"><?php echo $nameItems ?></div>
                            </div>
                        </div>
                        <div class="listeArticle_info_marque detail_style text-uppercase"><?php echo $category ?> - <?php echo $subcategoryItems ?></div>
                        <br>
                        <div class="listeArticle_info_description"><?php echo $descriptionItems ?></div>
                        <br>
                        <div class="row border-bottom mb-3 pb-2">
                            <div class="col-md-2"><small class="text-uppercase ">Price</small></div>
                            <div class="col-md-10"><small class="text-uppercase">Quantity</small></div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <h4 class="texte_style text-uppercase"><?php echo $prixItems ?> $</h4>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control w-100" value="<?php echo $quantityCadre ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-1">
                                <a type="button" href="../../Bdd/delete.php?idpanier=<?= $id_item; ?>" class="btn btn-outline-danger f_right"><i class="fas fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>

        <?php
        }
    }
}
?>
        </div>
    </div>



    

    <div class="panier_navbar_div">
        <div class="navbar_panier detail_style text-uppercase">
            <form action="" method="POST">
                <input type="radio" name="typedelivraison_panier" id="livraison_panier_magasin" class="contenu_navbar_panier contenu_navbar_panier_premier"><span class="typedelivraison_panier_texte">Livraison en magasin</span>
                <br>
                <input type="radio" name="typedelivraison_panier" id="livraison_panier_relais" class="contenu_navbar_panier"><span class="typedelivraison_panier_texte">Point relais</span>
                <br>
                <input type="radio" name="typedelivraison_panier" id="livraison_panier_domicile" class="contenu_navbar_panier"><span class="typedelivraison_panier_texte">livraison à domicile</span>
                <br>
                <div class="separation_panier_div mb-3"></div>
                <span class="contenu_navbar_panier detail_panier_navbar">Valeur de la commande : </span><span class="detail_panier_navbar f_right">60<span class="detail_panier_navbar_euro">€</span></span>
                <br>
                <span class="contenu_navbar_panier detail_panier_navbar">Livraison : </span><span class="detail_panier_navbar f_right">0<span class="detail_panier_navbar_euro">€</span></span>
                <br>
                <div class="separation_panier_div mt-3 mb-3"></div>
                <span class="contenu_navbar_panier prixTotal_panier_navbar">Total :</span><span class="prixTotal_panier_navbar f_right">60<span class="detail_panier_navbar_euro">€</span></span>
                <br>
                <button type="submit" name="btn_submit_navbar_panier" id="btn_submit_navbar_panier" class="bg_blue1 white btn_final_navbar_panier mt-3">Finaliser la commande</button>
            </form>
        </div>
    </div>
    
</div>

<?php
    include("footer.php");
?>