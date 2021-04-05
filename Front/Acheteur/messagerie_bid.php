<?php
    $title="Accueil";
    require "head.php";

    $email_user = $_SESSION['email'];
    
    $queryBuyer = mysqli_query($con, "SELECT id_buyer FROM buyer WHERE (email='$email_user' or lastname='$email_user')");
    if($row = mysqli_fetch_assoc($queryBuyer)){
        $id_buyer = $row['id_buyer'];
        $queryBid = mysqli_query($con, "SELECT id_bid, id_item, id_buyer, id_seller, state, price_user FROM bid WHERE id_buyer='$id_buyer'");
        $queryCountItems = mysqli_query($con, "select count(id_bid) as total from bid where id_buyer='$id_buyer'");
        $queryItem = mysqli_query($con, "SELECT name,price,description,photo,category,subcategory FROM item,bid WHERE item.id_item=bid.id_item AND id_buyer = '$id_buyer'");

?>


<?php

if($row = mysqli_fetch_assoc($queryCountItems)){
            $total = $row['total'];
?>
<div class="genale_page_enchere position-relative">
    <div class="texte_style position-absolute top-50 start-50 translate-middle">
        <p class="titre_general_enchere text-uppercase">
        Messaging
        </p>
        <p class="info_general_listeArticle centrer detail_style">
            You have <?php echo $total ?> message
        </p>
    </div>

    <div class="class_separation position-absolute bottom-0 start-50 translate-middle-x" id="here"></div>
</div>

<!-- navbar of the messaging -->
<div class="vetement_details" id="">
    <div class="navbar_vetement">
            <ul class="navbar_listeVendeur_details detail_style centrer">
                <li><a href="messagerie_offer.php#here" class=" text-uppercase">Offer</a> </li>
                <li><a href="messagerie_bid.php#here" class="badge text-uppercase  bg_blue1 text-light">Bid</a></li>
            </ul>
    </div>
</div>

<?php
    for ($i=0; $i<=$total;$i++){
        if($rowAllItemyOffer = mysqli_fetch_assoc($queryBid)){
            $id_bid = $rowAllItemyOffer['id_bid'];
            $id_item = $rowAllItemyOffer['id_item'];
            $id_seller = $rowAllItemyOffer['id_seller'];
            $id_buyer = $rowAllItemyOffer['id_buyer'];
            $state = $rowAllItemyOffer['state'];
            $price_user = $rowAllItemyOffer['price_user'];

            
                if($row2 = mysqli_fetch_assoc($queryItem)){
                    $name = $row2['name'];
                    $price = $row2['price'];
                    $description = $row2['description'];
                    $photo = $row2['photo'];
                    $category = $row2['category'];
                    $subcategory = $row2['subcategory'];
            
?>
<!-- row to see my bid -->
<div class="row" style="margin-top:120px">

    <div class="col-2"></div>

    <div class="col-3">
        <img class="img_enchere" src="<?php echo $photo ?>" alt="chaussure">
    </div>

    <div class="col-5 enchere_liste_details position-relative">
        <div class="enchere_info_titre texte_style text-uppercase"><?php echo $name ?></div>
        <div class="enchere_info_marque detail_style text-uppercase"><?php echo $category ?> - <?php echo $subcategory ?></div>
        <br>
        <div class="info_description_inde"><?php echo $description ?></div>
        <hr>
        <div class="row">
            <div class="col-md-2">
                <h4 class="texte_style text-uppercase"><?php echo $price_user ?> €</h4>
            </div>

            <div class="col-md-3">
                <div class="input-group mb-3">
                    <!-- <div class="texte_style text-uppercase" style="font-size:22px"><?php echo $state ?></div> -->
                </div>
            </div>

            <div class="col-md-6">
                <a type="button" href="myBid.php?idBid=<?= $id_bid ?>" class="btn text-light bg_blue1 w-100">Result <i class="fas fa-handshake"></i></a>
            </div>
            
            <div class="col-md-1">
                <a type="button" href="../../Bdd/delete.php?iditembid=<?= $id_item; ?>" class="btn btn-outline-danger f_right" name="deleteItem"><i class="fas fa-times"></i></a>
            </div>

        </div>
    
        <div class="col-1"></div>
    </div>

    <div class="col-2"></div>
</div>

<?php
                }
            }
        }
    }
}
    include("footer.php");
?>