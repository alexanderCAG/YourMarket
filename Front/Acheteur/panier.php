
<?php
    $title="Page maison";
    require "head.php";

    include("../../Bdd/cnx.php");
    $email_user = $_SESSION['email'];
    $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE (email='$email_user' or lastname='$email_user')");
    $queryTotalBasket= mysqli_query($con, "SELECT email, sum(price*quantity) as total_basket FROM basket, buyer WHERE buyer.id_buyer=basket.id_buyer and (email='$email_user' or lastname='$email_user')");

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
            Basket
        </p>
        <p class="info_general_panier centrer detail_style">
            You have <?php echo $total ?> articles
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

                    $queryQteTotal = mysqli_query($con, "SELECT quantity FROM item WHERE id_item='$id_item'");
                    if($rowQteTotal = mysqli_fetch_assoc($queryQteTotal)){
                        $quantityTotal = $rowQteTotal['quantity'];
            ?>
            <div class="col-1"></div>

            <div class="col-10 listeArticle_liste_un_par_un">
                <!-- row to see my card -->
                <div class="row">
                    <div class="col-5">
                        <img class="img_listeArticle" src="<?php echo $photo ?>" alt="chaussure"><br>
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
                                <!-- <div class="input-group mb-3">
                                    <input type="number" class="form-control w-100" value="<?php echo $quantityCadre ?>" style="width:50px!important;">
                                    <button type="submit" name="submit_btn_change_qte_panier" class="input-group-text btn bg_blue1 rounded-0" style="border-top-right-radius: 5px!important;border-bottom-right-radius: 5px!important;"><i class="fas fa-pen text-light"></i></button>
                                </div> -->
                                <form action="../../Bdd/panier.php" method="POST">
                                    <div class="input-group mb-3">
                                        <input type="number" style="width:50px!important;" name="qtePanier" class="form-control w-100" min="0" value="<?php echo $quantityCadre ?>" max="<?php echo $quantityTotal ?>">
                                        <button type="submit" name="submit_btn_change_qte_panier" class="input-group-text btn bg_blue1 rounded-0" style="border-top-right-radius: 5px!important;border-bottom-right-radius: 5px!important;"><i class="fas fa-pen text-light"></i></button>
                                        <input type="hidden" name="idItem" value="<?php echo $id_item ?>">
                                    </div>
                                </form>
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
}
?>
        </div>
    </div>


    <?php if($row4 = mysqli_fetch_assoc($queryTotalBasket)){
                    $totalBasket = $row4['total_basket'];

    ?>
    <!-- my navbar on the right -->
    <div class="panier_navbar_div">
        <div class="navbar_panier detail_style text-uppercase">
            <form action="" method="POST">
                <input type="radio" name="typedelivraison_panier" id="livraison_panier_magasin" class="contenu_navbar_panier contenu_navbar_panier_premier"><span class="typedelivraison_panier_texte">Store delivery</span>
                <br>
                <input type="radio" name="typedelivraison_panier" id="livraison_panier_relais" class="contenu_navbar_panier"><span class="typedelivraison_panier_texte">Relay point</span>
                <br>
                <input type="radio" name="typedelivraison_panier" id="livraison_panier_domicile" class="contenu_navbar_panier"><span class="typedelivraison_panier_texte">Home delivery</span>
                <hr>
                <span class="contenu_navbar_panier detail_panier_navbar">Order value : </span><span class="detail_panier_navbar f_right"><?php echo $totalBasket ?><span class="detail_panier_navbar_euro">€</span></span>
                <br>
                <span class="contenu_navbar_panier detail_panier_navbar">Delivery : </span><span class="detail_panier_navbar f_right">0<span class="detail_panier_navbar_euro">€</span></span>
               <hr>
                <span class="contenu_navbar_panier prixTotal_panier_navbar">Total :</span><span class="prixTotal_panier_navbar f_right"><?php echo $totalBasket ?><span class="detail_panier_navbar_euro">€</span></span>
                <br><br>
                <a type="button"  href="paiement.php" class="btn rounded-0 bg_blue1 text-light  pt-3 pb-3 w-100" style="border-bottom-left-radius:15px!important;border-bottom-right-radius:15px!important;">FINALIZE MY ORDER</a>
            </form>
        </div>
    </div>
    <?php
        }

?>
</div>

<?php
    include("footer.php");
?>