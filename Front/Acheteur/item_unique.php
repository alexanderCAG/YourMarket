<?php
    $title="Accueil";
    require "head.php";
    include("../../Bdd/cnx.php");
    $iditem=$_GET['iditem'];

    $queryItem = mysqli_query($con, "SELECT price,name,category,subcategory,quantity,description,photo,is_negotiated, is_buying FROM item WHERE id_item='$iditem'");

?>

<div class="row" style="margin-top:120px">
<?php

    if($rowItem = mysqli_fetch_assoc($queryItem)){
        $nameCadre = $rowItem['name'];
        $prixCadre = $rowItem['price'];
        $categoryCadre = $rowItem['category'];
        $quantityCadre = $rowItem['quantity'];
        $descriptionCadre = $rowItem['description'];
        $subcategory = $rowItem['subcategory'];
        $photo = $rowItem['photo'];
        $is_negotiated = $rowItem['is_negotiated'];
        $is_buying = $rowItem['is_buying'];
                    ?>
    
    <div class="col-2"></div>
    <div class="col-3">
        <img class="img_enchere" src="<?php echo $photo ?>" alt="chaussure">
    </div>

    <div class="col-5 enchere_liste_details position-relative">
        <div class="enchere_info_titre texte_style text-uppercase"><?php echo $nameCadre ?></div>
        <div class="enchere_info_marque detail_style text-uppercase"><?php echo $categoryCadre ?> - <?php echo $subcategory ?></div>
        <br>
        <div class="info_description_inde"><?php echo $descriptionCadre ?></div>
        <hr>
        <div class="row">
            <div class="col-3"></div>

            <div class="col-6">
                <!-- verify the quantity and the type of sale -->
                <?php if($is_negotiated == 1 && $quantityCadre != 0 ){ ?>
                    <button onclick="propositionNego()" type="button" class="btn btn-outline-success"> <i class="far fa-handshake"></i><small> Offer</small></button>
                <?php } ?>

                <?php if($is_buying == 1 && $quantityCadre != 0 ){ ?>
                    <a href="../../Bdd/panier.php?iditem=<?php echo $iditem ?>" type="button" class="btn btn-dark f_right"> <i class="fas fa-shopping-cart"></i>&nbsp;<small>Add to cart </small></a>
                <?php } ?>

                <?php  if($quantityCadre == 0 ){?>
                    <div class="bg-danger text-light w-100 text-center">Unavailable</div>
                <?php }?>
                
            </div>

            <div class="col-3"></div>

        </div>
    
        <div class="col-1"></div>
    </div>

    <div class="col-2"></div>
</div>

<?php
}
?>

<!-- propose a price for the offer -->
<div class="nego_item_unique" id="negociation_item_unique">
    <form action="../../Bdd/panier.php" method="POST">
        <h5 class="modal-title titre_unique_prix_nego texte_style text-uppercase" id="staticBackdropLabel">Choose a price</h5>
        <input type="text" id="quantite_nego" name="quantite_nego" class="quantite_nego" placeholder="Quantité">
        <input type="text" id="prix_nego" name="prix_nego" class="prix_nego">€
        <input type="hidden" id="id_item_nego" name="id_item_nego" value="<?php echo $iditem ?>">
        <br>
        <span id="negoItemErreur"></span>
        <br>
        <span class="condition_prix_nego">If you offer a price and this price is accepted by the seller, you will be automatically charged.</span>
        <br>
        <button type="submit" name="btn_submit_nego" id="btn_submit_nego" class="f_right text-uppercase btn_submit_nego">Send</button>
        <span onclick="propositionNego_hide()" class="f_right color_blue2 close_nego_item">Hide</span>
    </form>

    <div class="message_nego detail_style">
        
    </div>
</div>



<?php
    include("footer.php");
?>